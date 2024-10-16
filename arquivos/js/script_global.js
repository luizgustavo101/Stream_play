const drop = document.querySelector('.drop');

const genero = document.querySelector('.genero');
const lançamento = document.querySelector('.lançamento');
const ano = document.querySelector('.ano');

drop.addEventListener('click',()=>{
    if(genero.style.display == 'none'){
        genero.style.display = 'block'
    }else{
        genero.style.display = 'none'
}})