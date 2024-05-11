
const button = document.querySelector('.button')
const nav    = document.querySelector('.nav')

button.addEventListener('click',()=>{
    nav.classList.toggle('activo')
})



function changeHeaderColor() {
    var header = document.getElementById('main-header');
    if ((window.scrollY > 0) || (window.innerWidth < 735)) {
        header.style.backgroundColor = '#1C2331'; // Cambia el color si se desplaza o si el ancho es menor a 600px
    } else {
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.2)'; // Vuelve al color inicial si no cumple las condiciones
    }
}

window.addEventListener('scroll', changeHeaderColor);
window.addEventListener('resize', changeHeaderColor);


window.onload = function() {
    var pdf = document.getElementById('pdf');
    pdf.onload = function() {
        // PDF cargado correctamente
    };
    pdf.onerror = function() {
        // Error al cargar el PDF
        console.error("Error al cargar el PDF.");
    };
};