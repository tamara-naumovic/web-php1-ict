const formCnt = document.getElementById("formCnt");
const usernameCnt = document.getElementById("usernameCnt");
const emailCnt = document.getElementById("emailCnt");
const textareaCnt = document.getElementById("textareaCnt");

formCnt.addEventListener("submit",(e)=>{
    e.preventDefault();
    proveraCnt();
});

function proveraCnt(){
    const usernameCntValue = usernameCnt.value.trim();
    const emailCntValue = emailCnt.value.trim();
    const textareaCntValue = textareaCnt.value.trim();

    if(usernameCntValue === ''){
        setErrorFor(usernameCnt, 'Username cannot be blank');
    }else if(!isUsernameCnt(usernameCntValue)){
        setErrorFor(usernameCnt, 'Username is not valid');
    }else{
        setSuccessFor(usernameCnt);
    }

    if(emailCntValue === ''){
        setErrorFor(emailCnt, 'Email cannot be blank');
    }else if(!isEmailCnt(emailCntValue)){
        setErrorFor(emailCnt, 'Email is not valid');
    }else{
        setSuccessFor(emailCnt);
    }
    
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

function isEmailCnt(emailCnt){
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailCnt);
}

function isUsernameCnt(usernameCnt){
    return /^[a-z0-9\_]+$/.test(usernameCnt);
}