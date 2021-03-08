
const formReg = document.getElementById("formReg");
const formLog = document.getElementById("formLog");
const usernameLog = document.getElementById("usernameLog");
const passwordLog = document.getElementById("passwordLog");
const username = document.getElementById("username");
const email = document.getElementById("email");
const address = document.getElementById("address");
const password = document.getElementById("password");
const password2 = document.getElementById("confpassword");

formLog.addEventListener("submit",(e)=>{
    e.preventDefault();
    proveraLog();
});

formReg.addEventListener("submit",(e)=>{
    e.preventDefault();
    proveraReg();
});

function proveraReg(){
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const addressValue = address.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === ''){
        setErrorFor(username, 'Username cannot be blank');
    }else if(!isUsername(usernameValue)){
        setErrorFor(username, 'Username is not valid');
    }else{
        setSuccessFor(username);
    }

    if(emailValue === ''){
        setErrorFor(email, 'Email cannot be blank');
    }else if(!isEmail(emailValue)){
        setErrorFor(email, 'Email is not valid');
    }else{
        setSuccessFor(email);
    }

    if(addressValue === ''){
        setErrorFor(address, 'Address cannot be blank');
    }else if(!isAddress(addressValue)){
        setErrorFor(address, 'Address is not valid');
    }else{
        setSuccessFor(address);
    }

    if(passwordValue === ''){
        setErrorFor(password, 'Password cannot be blank');
    }else if(!isPassword(passwordValue)){
        setErrorFor(password, 'Password is not valid');
    }else{
        setSuccessFor(password);
    }

    if(password2Value === ''){
        setErrorFor(password2, 'Password cannot be blank');
    }else if(!isPassword(password2Value)){
        setErrorFor(password2, 'Password is not valid');
    }else if(passwordValue != password2Value){
        setErrorFor(password2, 'Passwords does not match');
    }else{
        setSuccessFor(password2);
    }
}

function proveraLog(){
    const usernameValueLog = usernameLog.value.trim();
    const passwordValueLog = passwordLog.value.trim();

    if(usernameValueLog === ''){
        setErrorFor(usernameLog, 'Username cannot be blank');
    }else if(!isUsernameLog(usernameValueLog)){
        setErrorFor(usernameLog, 'Username is not valid');
    }else{
        setSuccessFor(usernameLog);
    }

    if(passwordValueLog === ''){
        setErrorFor(passwordLog, 'Password cannot be blank');
    }else if(!isPasswordLog(passwordValueLog)){
        setErrorFor(passwordLog, 'Password is not valid');
    }else{
        setSuccessFor(passwordLog);
    }
}

function setErrorFor(input,message){
    const formControl = input.parentElement;
    const small = formControl.querySelector(".small");

    small.innerText = message;

    formControl.className = "form-control error";
}

function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}

// REGULARNI IZRAZI

function isEmail(email){
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isUsername(username){
    return /^[a-z0-9\_]+$/.test(username);
}

function isUsernameLog(usernameLog){
    return /^[a-z0-9\_]+$/.test(usernameLog);
}

function isAdress(address){
    return /^([a-z])+[0-9]$/.test(address);
}

function isPassword(password){
    return /^([a-z])+[0-9]{1}$/.test(password);
}

function isPasswordLog(passwordLog){
    return /^([a-z])+[0-9]{1}$/.test(passwordLog);
}
