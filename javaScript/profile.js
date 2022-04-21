const Details = document.querySelector(".Details")
let modalDetails = document.querySelector(".modelDetails");
const closeDetails = document.querySelector('.closeDetails');
Details.addEventListener("click", function () {
    modalDetails.classList.toggle("modal-active");
});
closeDetails.addEventListener("click", function () {
    modalDetails.classList.toggle("modal-active")
})