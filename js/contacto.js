document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const nombre = document.getElementById("nombre").value.trim();
  const email = document.getElementById("email").value.trim();
  const mensaje = document.getElementById("mensaje").value.trim();

  if (nombre === "" || email === "" || mensaje === "") {
    document.getElementById("respuesta").textContent = "Por favor completa todos los campos obligatorios.";
    document.getElementById("respuesta").style.color = "red";
    return;
  }

  // Aquí podrías hacer un fetch hacia tu backend PHP
  document.getElementById("respuesta").textContent = "¡Gracias por contactarnos, " + nombre + "! Te responderemos pronto.";
  document.getElementById("respuesta").style.color = "green";

  document.getElementById("contactForm").reset();
});
