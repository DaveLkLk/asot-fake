// Obtener el elemento de la alerta y el botón de cierre
let formAlert = document.getElementById("form--alert");
let btnCerrar = document.getElementById("close--alert");

// Mostrar la alerta con una transición suave
function mostrarAlerta() {
  alerta.querySelector(".form--alert p").textContent = "<php $_SESSION['message'] ?>";
  alerta.classList.remove("form--hidden");
  alerta.classList.add("form--alert");
}
// Ocultar la alerta al hacer clic en el botón de cierre

btnCerrar.addEventListener('click', ()=>{
    formAlert.classList.remove("form--alert");
    formAlert.classList.add("form--hidden");
});