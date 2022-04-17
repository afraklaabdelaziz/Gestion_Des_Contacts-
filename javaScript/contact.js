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
valid = 0;
// regex
let regexName = /[A-Za-z ]{3,20}$/;
let regexEmail = /([a-z0-9-_.][a-z0-9]+@(gmail|outlook).(com|fr|ma))$/;
let regexPhone = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
let regexAdresse = /^[a-zA-Z0-9\s\,\''\-]*$/;
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
// form validation add contact 
const formAddContact = document.getElementById('formAdd');
const nameAddContact = document.getElementById('nameAdd');
const emailAddContact = document.getElementById('emailAdd');
const phoneAddContact = document.getElementById('phoneAdd');
const adresseAddContact = document.getElementById('adresseAdd');
// validation form add Students
formAddContact.addEventListener('submit', (event) => {
    validInputAddContact();
    if (valid !== 0) {
        event.preventDefault();
    }
});
function validInputAddContact() {
    if (nameAddContact.value == '') {
        error(nameAddContact, 'please enter name contact');
    } else if (regexName.test(nameContact.value) == false) {
        error(nameAddContact, 'format is not valid');
    } else {
        success(nameAddContact);
    }
    if (emailAddContact.value == '') {
        error(emailAddContact, 'please enter email contact');
    } else if (regexEmail.test(emailAddContact.value) == false) {
        error(emailAddContact, 'format email is not valid')
    } else {
        success(emailAddContact);
    }
    if (phoneAddContact.value == '') {
        error(phoneAddContact, 'please enter phone contact');
    } else if (regexPhone.test(phoneAddContact.value) == false) {
        error(phoneAddContact, 'format is not valid');
    } else {
        success(phoneAddContact);
    }
    if (adresseAddContact.value == '') {
        error(adresseAddContact, 'please enter Adresse contact');
    } else if (regexAdresse.test(adresseAddContact.value) == false) {
        error(adresseAddContact, 'format is not valid');
    } else {
        success(adresseAddContact);
    }
}
// form validation update contact
const formEditContact = document.getElementById('formEdit');
const nameEditContact = document.getElementById('nameEdit');
const emailEditContact = document.getElementById('emailEdit');
const phoneEditContact = document.getElementById('phoneEdit');
const adresseEditContact = document.getElementById('adresseEdit');

formEditContact.addEventListener('submit', (event) => {
    validInputEditContact();
    if (valid !== 0) {
        event.preventDefault();
    }
});
function validInputEditContact() {
    if (nameEditContact.value == '') {
        error(nameEditContact, 'please enter name contact');
    } else if (regexName.test(nameEditContact.value) == false) {
        error(nameEditContact, 'format is not valid');
    } else {
        success(nameEditContact);
    }
    if (emailEditContact.value == '') {
        error(emailEditContact, 'please enter email contact');
    } else if (regexEmail.test(emailEditContact.value) == false) {
        error(emailEditContact, 'format email is not valid')
    } else {
        success(emailEditContact);
    }
    if (phoneEditContact.value == '') {
        error(phoneEditContact, 'please enter phone contact');
    } else if (regexPhone.test(phoneEditContact.value) == false) {
        error(phoneEditContact, 'format is not valid');
    } else {
        success(phoneEditContact);
    }
    if (adresseEditContact.value == '') {
        error(adresseEditContact, 'please enter Adresse contact');
    } else if (regexAdresse.test(adresseEditContact.value) == false) {
        error(adresseEditContact, 'format is not valid');
    } else {
        success(adresseEditContact);
    }
}