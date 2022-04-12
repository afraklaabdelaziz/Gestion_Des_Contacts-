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