const formCnt = document.getElementById("formCnt");
const textareaCnt = document.getElementById("textareaCnt");

formCnt.addEventListener("submit",(e)=>{
    e.preventDefault();
    proveraCnt();
});

function proveraCnt(){
    const textareaCntValue = textareaCnt.value.trim();

    if(textareaCntValue === ''){
        setErrorFor(textareaCnt, 'Message cannot be blank');
    }else{
        setSuccessFor(textareaCnt);
    }
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector(".small");

    small.innerText = message;

    formControl.className = "form-control error";
}

function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}
