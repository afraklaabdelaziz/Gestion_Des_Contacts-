const menu = document.querySelector(".fa-bars");
const list = document.querySelector(".list");
const header = document.querySelector(".ContainerHeader");
menu.addEventListener("click", function () {
    list.classList.toggle("d-none");
    list.classList.toggle("list1");
    header.classList.toggle("header");
})
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