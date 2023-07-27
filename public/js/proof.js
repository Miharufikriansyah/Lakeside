let file = document.getElementsByClassName('proof-icon');
let modal = document.getElementById('img-modal');
let img = document.getElementsByClassName('proof-img');

// file.addEventListener('click', showModal)

// modal.addEventListener('click', closeModal)

function showModal() {
    modal.style.display = "flex";
}

function closeModal() {
    modal.removeAttribute('style');
}
