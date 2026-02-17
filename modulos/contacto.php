<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="../css/contacto.css">
</head>
<body>
  <header>
    <button class="back-button" onclick="window.location.href='../index.html'" >←</button>
    <h1>Contáctanos</h1>
    <p>Es muy importante para nosotros que te contactes por cualquier duda, comentario o inconveniente con nuestros productos.
    No olvides completar todo el formulario para que podamos responderte!</p>
  </header>

  <main>
    <section class="formulario">
        <h2>Información de contacto</h2>
      <form id="contactForm">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

        <button type="submit">Enviar</button>
      </form>
      <div id="respuesta"></div>
    </section>

    <section class="info">
      <h2>Información del negocio</h2>
      <p><strong>Teléfono:</strong> 03884040275</p>
      <p><strong>Email:</strong> contacto@tuempresa.com</p>
      <p><strong>Dirección:</strong> San Salvador de Jujuy Jujuy AR, Campero 371, Y4600 HMG</p>
      <p><strong>Horarios:</strong>  Lunes a Viernes de 8:30 a 20:00 hs | Sábado de 8:30 a 14:00 hs y 16:00 a 20:00 hs.
       | Postventa: Lunes a Viernes de 8:30 a 17:30 hs.</p>
    </section>
    <section class="mapa">          
    <h2>Ubicación</h2>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.123456789!2d-65.3001903!3d-24.1926195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941b0f457c08456f%3A0xa90d536e1cf933ec!2sTodo%20Ika%20Repuestos!5e0!3m2!1ses!2sar!4v1700000000000"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
    </section>

  </main>

  <script src="contacto.js"></script>
</body>
</html>
