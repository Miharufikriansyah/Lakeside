const input = document.querySelector('#proof');
const icon = document.querySelector('.up-icon');
const text = document.querySelector('.label-text')

input.addEventListener('change', function (){
    if(input.value != ''){
        input.style.display = "block";
        icon.style.display = "none";
        text.style.display = "none";   
    }else{
        input.removeAttribute('style');
        icon.removeAttribute('style');
        text.removeAttribute('style');
    }
})