
const dni = document.getElementById('dni')
const pDni = document.querySelector('.p--hidden')
dni.addEventListener('input', function(){
    if(this.value.length > 8){
        this.value = this.value.slice(0, 8);
    }
})
dni.addEventListener('blur', ()=>{
    if (dni.value.length < 8){
        pDni.classList.remove('p--hidden')
    }
    if (dni.value.length == 8){
        pDni.classList.add('p--hidden')
        dni.classList.remove('dni--invalid')
    }
})