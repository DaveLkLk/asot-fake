const btnSubmit = document.getElementById('btn-submit')
btnSubmit.addEventListener(('click'), ()=>{
    if(dni.value.length < 8){
        pDni.classList.remove('p--hidden')
        dni.classList.add('dni--invalid')
    }
    setTimeout(()=>{
        dni.classList.remove('dni--invalid')
    }, 1000)
})


const headerIndex = document.querySelector('.header')
let count = 10;
for (let i = 0; i < count; i++) {
    let glitchBox = document.createElement('div');
    glitchBox.className = 'h--glitchBox';
    headerIndex.appendChild(glitchBox);
}
setInterval(function() {
    let glitch = document.getElementsByClassName('h--glitchBox');
    for (let i = 0; i < glitch.length; i++) {
        glitch[i].style.left = Math.floor(Math.random() * 100)+"vw";
        glitch[i].style.top = Math.floor(Math.random() * 100)+"vh";
        glitch[i].style.width = Math.floor(Math.random() * 50)+"px";
        glitch[i].style.height = Math.floor(Math.random() * 50)+"px";
        glitch[i].style.backgroundPosition = Math.floor(Math.random() * 100)+"px";
        
    }
}, 300)




