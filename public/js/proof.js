const file = document.querySelector('.proof-icon');
const modal = document.querySelector('.img-modal');
const img = document.querySelector('.proof-img');

file.addEventListener('click', function(){
    modal.style.display = "flex";
})

modal.addEventListener('click', function(){
    modal.removeAttribute('style');
})