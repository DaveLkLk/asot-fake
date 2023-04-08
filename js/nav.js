const navBox = document.querySelector('.nav--links');
const buttonMobile = document.querySelector('.nav--title button');
buttonMobile.addEventListener('click', ()=>{
    navBox.classList.toggle('nav--links-active')
})