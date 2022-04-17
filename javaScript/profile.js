const updateProfile = document.querySelector(".Profile");
const Details = document.querySelector(".Details")
let modalEditeP = document.querySelector(".modelEditP");
let modalDetails = document.querySelector(".modelDetails");
const closeEditP = document.querySelector('.closeEditP');
const closeDetails = document.querySelector('.closeDetails');
updateProfile.addEventListener("click", function () {
    modalEditeP.classList.toggle("modal-active");
});
closeEditP.addEventListener("click", function () {
    modalEditeP.classList.toggle("modal-active")
})
Details.addEventListener("click", function () {
    modalDetails.classList.toggle("modal-active");
});
closeDetails.addEventListener("click", function () {
    modalDetails.classList.toggle("modal-active")
})
// form validation 
const form = document.getElementById('form');
const userName = document.getElementById('name');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const passC = document.getElementById('passC');
let valid = 0;
let regexName = /[A-Za-z]{4,20}$/;
let regexEmail = /^(^[a-z0-9-_.][a-z0-9]+@(gmail|outlook).(com|fr|ma))$/;
let regexPass = /[A-Za-z]{6,16}[0-9]{2,16}$/;
// function success de validation 
function success(elem) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = '';
    input.classList.add('success');
    input.classList.remove('error');
}
// function error de validation 
function error(elem, msg) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = msg;
    input.classList.add('error');
    input.classList.remove('success');
    valid++;
}
// validation de form de signUp 
form.addEventListener('submit', (e) => {
    validateInput();
    if (valid !== 0) {
        e.preventDefault();
    }
});
function validateInput() {
    const nameValue = userName.value.trim();
    const emailValue = email.value.trim();
    const passValue = pass.value.trim();
    const passConfValue = passC.value.trim();
    if (nameValue == '') {
        error(userName, 'please enter your UserName');
    } else if (regexName.test(nameValue) == false) {
        error(userName, 'format is not valid');
    } else {
        success(userName);
    }
    if (emailValue == '') {
        error(email, 'please enter your Email');
    } else if (regexEmail.test(emailValue) == false) {
        error(email, 'format email is not valid')
    } else {
        success(email);
    }
    // if (passValue == '') {
    //     error(pass, 'please enter your Password');
    // } else if (regexPass.test(passValue) == false) {
    //     error(pass, 'format password is not valid');
    // } else {
    //     success(pass);
    // }
    // if (passConfValue == '') {
    //     error(passC, 'please Confirm your password');
    // } else if (passConfValue != passValue) {
    //     error(passC, 'please Entre your password');
    // } else {
    //     success(passC)
    // }
}