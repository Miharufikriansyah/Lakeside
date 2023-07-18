const navbar = document.querySelector('.navbar');
const body = document.body;
const hamOpen = document.querySelector('.hamburger-menu');
const hamClose = document.querySelector('.hamburger-toggle');


hamOpen.addEventListener('click',function () {
    navbar.style.display = "flex";
})

hamClose.addEventListener('click', function () {
    navbar.removeAttribute('style');
})
