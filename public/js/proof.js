let file = document.getElementsByClassName('proof-icon');
let modal = document.getElementsByClassName('img-modal');
let img = document.getElementsByClassName('proof-img');

// file.addEventListener('click', showModal)

// modal.addEventListener('click', closeModal)

function showModal(i) {
    modal[i].style.display = "flex";
}

function closeModal(i) {
    modal[i].removeAttribute('style');
}
