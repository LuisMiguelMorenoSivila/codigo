const slider = document.getElementById("slider");   // selecciona el contenedor
const slides = slider.querySelectorAll("img");      // selecciona todas las imágenes
let index = 0;

function showSlide(i) {
  slider.scrollTo({
    left: i * slider.clientWidth,                   // mueve el scroll al ancho de cada slide
    behavior: "smooth"                              // animación suave
  });
}

setInterval(() => {
  index++;
  if (index >= slides.length) index = 0;            // vuelve al inicio si llega al final
  showSlide(index);
}, 1500);                                           // cada 1.5 segundos
