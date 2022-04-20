//star regex
let valid = true;
let regexName = /[A-Za-z]{4,20}$/;
let regexEmail = /^(^[a-z0-9-_.][a-z0-9]+@(gmail|outlook).(com|fr|ma))$/;
let regexPass = /[A-Za-z]{6,16}[0-9]{2,16}$/;
let regexPhone = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
let regexAdresse = /^[a-zA-Z0-9\s\,\''\-]*$/;
// end regex
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
    return false;
}
// validation de form de signUp 
function validateInput() {
    const userNameSinUp = document.getElementById('nameS');
    const passSinUp = document.getElementById('passS');
    const passCSinUp = document.getElementById('passCS');
    const nameValue = userNameSinUp.value.trim();
    const passValue = passSinUp.value.trim();
    const passConfValue = passCSinUp.value.trim();
    if (nameValue == '') {
        return error(userNameSinUp, 'please enter your UserName');
    } else if (regexName.test(nameValue) == false) {
        return error(userNameSinUp, 'format is not valid');
    }else{
       success(userNameSinUp);
    }
    if (passValue == '') {
        return error(passSinUp, 'please enter your Password');
    } else if (regexPass.test(passValue) == false) {
        return error(passSinUp, 'format password is not valid');
    }
    else {
        success(passSinUp);
    }
    if (passConfValue == '') {
        return error(passCSinUp, 'please Confirm your password');
    } else if (passConfValue != passValue) {
        return error(passCSinUp, 'please Entre your password');
    } else {
         success(passCSinUp)
    }
    console.log('ffff');
}
// end form validation signup
// star contact
const addContact = document.querySelector(".addContact");
const updateContact = document.querySelectorAll(".updateContact");
const deleteContacts = document.querySelectorAll(".deleteContact");
for (const upContact of updateContact) {
    upContact.addEventListener("click", function () {
        modalEditeC.classList.toggle("modal-active");
    });
}
for (const deleteContact of deleteContacts) {
    deleteContact.addEventListener("click", function () {
        modalDeleteC.classList.toggle("modal-active");
    });
}
let modalEditeC = document.querySelector(".modelEditC");
let modalAddC = document.querySelector(".modelAddC");
let modalDeleteC = document.querySelector(".modelDeleteC");
const closeEditC = document.querySelector('.closeEditC');
const closeAddC = document.querySelector('.closeAddC');
const closeDeleteC = document.querySelector('.closeDeleteC');
addContact.addEventListener("click", function () {
    modalAddC.classList.toggle("modal-active");
});
closeAddC.addEventListener("click", function () {
    modalAddC.classList.toggle("modal-active")
})
closeEditC.addEventListener("click", function () {
    modalEditeC.classList.toggle("modal-active")
})
closeDeleteC.addEventListener("click", function () {
    modalDeleteC.classList.toggle("modal-active")
})
// form validation add contact 
function validInputAddContact(){
    const nameAddContact = document.getElementById('nameAdd');
    const emailAddContact = document.getElementById('emailAdd');
    const phoneAddContact = document.getElementById('phoneAdd');
    const adresseAddContact = document.getElementById('adresseAdd');
    if (nameAddContact.value == '') {
        return error(nameAddContact, 'please enter name contact');
    } else if (regexName.test(nameAddContact.value) == false) {
        return error(nameAddContact, 'format is not valid');
    } else {
        success(nameAddContact);
    }
    if (emailAddContact.value == '') {
        return error(emailAddContact, 'please enter email contact');
    } else if (regexEmail.test(emailAddContact.value) == false) {
       return error(emailAddContact, 'format email is not valid')
    } else {
        success(emailAddContact);
    }
    if (phoneAddContact.value == '') {
        return error(phoneAddContact, 'please enter phone contact');
    } else if (regexPhone.test(phoneAddContact.value) == false) {
        return error(phoneAddContact, 'format is not valid');
    } else {
        success(phoneAddContact);
    }
    if (adresseAddContact.value == '') {
        return error(adresseAddContact, 'please enter Adresse contact');
    } else if (regexAdresse.test(adresseAddContact.value) == false) {
        return error(adresseAddContact, 'format is not valid');
    } else {
        success(adresseAddContact);
    }
}
function validInputEditContact() {
    const nameEditContact = document.getElementById('nameEdit');
    const emailEditContact = document.getElementById('emailEdit');
    const phoneEditContact = document.getElementById('phoneEdit');
    const adresseEditContact = document.getElementById('adresseEdit');
    if (nameEditContact.value == '') {
        return error(nameEditContact, 'please enter name contact');
    } else if (regexName.test(nameEditContact.value) == false) {
        return error(nameEditContact, 'format is not valid');
    } else {
        success(nameEditContact);
    }
    if (emailEditContact.value == '') {
        return error(emailEditContact, 'please enter email contact');
    } else if (regexEmail.test(emailEditContact.value) == false) {
        return error(emailEditContact, 'format email is not valid')
    } else {
        success(emailEditContact);
    }
    if (phoneEditContact.value == '') {
        return error(phoneEditContact, 'please enter phone contact');
    } else if (regexPhone.test(phoneEditContact.value) == false) {
        return error(phoneEditContact, 'format is not valid');
    } else {
        success(phoneEditContact);
    }
    if (adresseEditContact.value == '') {
        return  error(adresseEditContact, 'please enter Adresse contact');
    } else if (regexAdresse.test(adresseEditContact.value) == false) {
        return error(adresseEditContact, 'format is not valid');
    } else {
        success(adresseEditContact);
    }
} 
// model Edit and delete to 
let upDateC = document.querySelectorAll('.updateContact');
let idC = document.getElementById('idC');
let nameEdit = document.getElementById('nameEdit');
let emailEdit = document.getElementById('emailEdit');
let phoneEdit = document.getElementById('phoneEdit');
let adresseEdit = document.getElementById('adresseEdit');
for (const upC of upDateC) {
    upC.addEventListener('click', function () {
        var arr = upC.attributes.data.nodeValue.split("/");
        idC.value = arr[0];
        nameEdit.value = arr[1];
        emailEdit.value = arr[2];
        phoneEdit.value = arr[3];
        adresseEdit.value = arr[4];
    })
}
let deleteC = document.querySelectorAll('.deleteContact');
let idDeleteC = document.getElementById('delete');
for (const deleteContact of deleteC) {
    deleteContact.addEventListener('click', function () {
        idDeleteC.value = deleteContact.attributes.data.nodeValue;
    })
}
// end contact
