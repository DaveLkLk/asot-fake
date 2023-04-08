const reloj = document.getElementById('reloj')
function showTime(){
    let fecha = new Date();
    let hora = fecha.getHours();
    let minutos = fecha.getMinutes();
    let minutosFull = minutos.toString().padStart(2, '0');
    let segundos = fecha.getSeconds();
    let segundosFull = segundos.toString().padStart(2, '0');
    let fullTime = hora+":"+minutosFull+":"+segundosFull;
    reloj.textContent = fullTime;
}
setInterval(showTime, 1000);



