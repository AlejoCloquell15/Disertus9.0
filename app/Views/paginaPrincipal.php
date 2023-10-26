<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,300;1,400&display=swap">
  <style>
    /* Estilos generales */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #EBEBEB;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .container1 {
      max-width: 800px;
      padding: 20px;
      margin-left: 782px;
    }

    .container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      height: 100px;
    }

    .container2 {
      max-width: 800px;
      margin: auto;
      padding: 40px;
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      margin-top: 40px;
      text-align: center;
      /* Alineación central del contenido */
    }

    .container2 h2 {
      font-size: 2em;
      color: #004B49;
      /* Color verde oscuro */
      margin-bottom: 20px;
    }

    .container2 p {
      font-size: 1.2em;
      color: #333;
      /* Color de texto principal */
      margin-bottom: 30px;
    }

    .container2 ul,
    .container2 ol {
      font-size: 1.1em;
      text-align: left;
      margin-bottom: 30px;
    }

    .container2 ul li,
    .container2 ol li {
      margin-bottom: 10px;
    }

    .container2 ul li::before {
      content: '\2022';
      /* Añade un bullet point personalizado */
      color: #00B195;
      /* Color turquesa */
      font-size: 1.2em;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

    .container2 ol li {
      counter-increment: my-awesome-counter;
      /* Incrementa el contador */
    }

    .container2 ol li::before {
      content: counter(my-awesome-counter) '. ';
      /* Usa el contador como número */
      color: #097679;
      /* Color verde más oscuro */
      font-weight: bold;
    }

    .container2 ol {
      counter-reset: my-awesome-counter;
      /* Reinicia el contador para listas ordenadas */
    }

    .container2 h2:last-child,
    .container2 p:last-child,
    .container2 ul:last-child,
    .container2 ol:last-child {
      margin-bottom: 0;
      /* Elimina el espacio extra al final del contenido */
    }


    /* Estilos del encabezado */
    header {
      background: linear-gradient(86deg, #004B49 11%, #097679 58%, #00B195 100%);
      color: #ffffff;
      padding: 10px 0;
    }

    .header-icons a {
      color: #ffffff;
      text-decoration: none;
      margin-right: 20px;
      font-size: 18px;
      transition: color 0.3s ease-in-out;
    }

    .header-icons a:hover {
      color: #ff9900;
    }

    /* Estilos de la sección de héroe */
    .hero-section {
      background: linear-gradient(86deg, #004B49 11%, #097679 58%, #00B195 100%);
      color: #ffffff;
      padding: 100px 0;
      text-align: center;
    }

    .hero-section h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }

    .hero-section p {
      font-size: 1.2em;
      margin-bottom: 40px;
    }

    .cta-button {
      display: inline-block;
      padding: 10px 30px;
      background-color: #ffffff;
      color: #333;
      font-size: 1em;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out;
    }

    .cta-button:hover {
      background-color: #ff9900;
      color: #ffffff;
    }

    .bienvenido {
      margin-top: -220px;
    }
  </style>
</head>

<body>
  <header>
    <div class="container1">
      <div class="header-icons">
        <a href="#">Iniciar Sesión</a>
        <a href="#">Registrarse</a>
        <a href="#">Manual</a>
        <a href="#">Sobre Nosotros</a>
      </div>
    </div>
  </header>

  <div class="hero-section">
    <div class="container"></div>
    <div class="bienvenido">
      <h1>Bienvenido a Disertus</h1>
      <p>Transforma tu experiencia de ducha con nuestra innovadora solución de ahorro de agua.</p>
      <a href="#" class="cta-button">¡Empieza Ahora!</a>
    </div>
  </div>
  </div>

  <div class="container2">
    <h2 style="text-align: center;">Descubre las Características</h2>
    <p style="text-align: center;">Aquí tienes algunas de las características destacadas de nuestro innovador sistema de
      ducha automática:</p>
    <ul>
      <li>Ahorro de Agua: Nuestra ducha automática está diseñada para reducir significativamente el consumo de agua,
        ayudando a conservar este valioso recurso.</li>
      <li>Control de Tiempo: Los usuarios pueden configurar la duración de su ducha y el tiempo de espera para una
        experiencia personalizada.</li>
      <li>Caudalímetro Integrado: Registramos el volumen de agua utilizado, brindándote información útil para controlar
        tu consumo y ahorrar dinero.</li>
      <li>Conciencia Ambiental: Fomentamos la responsabilidad ambiental al reducir el desperdicio de agua y ayudamos a
        preservar el planeta para las generaciones futuras.</li>
    </ul>

    <h2 style="text-align: center;">¿Cómo Funciona?</h2>
    <p style="text-align: center;">El funcionamiento de nuestra ducha automática es sencillo y efectivo. Aquí tienes una
      descripción paso a paso:</p>
    <ol>
      <li>Detección de Movimiento: Nuestro sistema utiliza un sensor PIR para detectar el movimiento del usuario en la
        ducha.</li>
      <li>Configuración Personalizada: Los usuarios pueden configurar la duración de la ducha y los tiempos de espera a
        través de nuestro sitio web.</li>
      <li>Registro de Caudal: Durante la ducha, un caudalímetro mide el volumen de agua utilizado, proporcionando datos
        precisos.</li>
      <li>Envío de Datos: Al finalizar la ducha, los datos se envían a nuestro servidor para su registro y análisis.
      </li>
      <li>Ahorro de Agua: El sistema apaga la ducha según la configuración, lo que reduce el consumo innecesario de
        agua.</li>
      <li>Conciencia Ambiental: Nuestro sistema no solo ahorra agua, sino que también promueve la conciencia ambiental
        al hacer que los usuarios sean conscientes de su consumo.</li>
    </ol>
  </div>

  <footer>
    <!-- Agrega tu contenido del pie de página aquí -->
  </footer>
</body>

</html>