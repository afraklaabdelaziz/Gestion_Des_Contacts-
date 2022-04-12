const menu = document.querySelector(".fa-bars");
const list = document.querySelector(".list");
const header = document.querySelector(".ContainerHeader");
menu.addEventListener("click", function () {
    list.classList.toggle("d-none");
    list.classList.toggle("list1");
    header.classList.toggle("header");
})
const addContact = document.querySelector(".addContact");
const updateContact = document.querySelectorAll(".updateContact");
for (const upContact of updateContact ) {
    upContact.addEventListener("click", function () {
        modalEditeC.classList.toggle("modal-active");
    });
}
let modalEditeC = document.querySelector(".modelEditC");
let modalAddC = document.querySelector(".modelAddC");
const closeEditC = document.querySelector('.closeEditC');
const closeAddC = document.querySelector('.closeAddC');
addContact.addEventListener("click", function () {
    modalAddC.classList.toggle("modal-active");
});
closeAddC.addEventListener("click", function () {
    modalAddC.classList.toggle("modal-active")
})

closeEditC.addEventListener("click", function () {
    modalEditeC.classList.toggle("modal-active")
})

// form validation 
const formAddContact = document.getElementById('form');
const nameContact = document.getElementById('name');
const emailContact = document.getElementById('email');
const phoneContact = document.getElementById('phone');
// const numberStudent = document.getElementById('number');
// const dateStudent = document.getElementById('date');
validC = true;
let regexWord = /[A-Za-z ]{4,20}$/;
let regexEmail = /^(^[a-z0-9-_.][a-z0-9]+@(gmail|outlook).(com|fr|ma))$/;
let regexNumber = /[0-9]{2,20}/
// validation form add Students
formAddContact.addEventListener('submit', (event) => {
    validInputContact();
    if (validC === false) {
        event.preventDefault();
    }
});
// function success de validation 
function success(elem) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = '';
    input.classList.add('success');
    input.classList.remove('error');
    validC = true;
}
// function error de validation 
function error(elem, msg) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = msg;
    input.classList.add('error');
    input.classList.remove('success');
    validC = false;
}
function validInputContact() {
    if (nameContact.value == '') {
        error(nameContact, 'please enter name');
    } else if (regexWord.test(nameContact.value) == false) {
        error(nameContact, 'format is not valid');
    } else {
        success(nameContact);
    }
    if (emailContact.value == '') {
        error(emailContact, 'please enter email');
    } else if (regexEmail.test(emailContact.value) == false) {
        error(emailContact, 'format email is not valid')
    } else {
        success(emailContact);
    }
    if (phoneContact.value == '') {
        error(phoneContact, 'please enter phone');
    } else if (regexWord.test(phoneContact.value) == false) {
        error(phoneContact, 'format is not valid');
    } else {
        success(phoneContact);
    }
}