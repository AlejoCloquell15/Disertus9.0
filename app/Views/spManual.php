<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual de Usuario - Ducha Automática Disertus</title>
    <style>
        body {}

        h1,
        h2 {
            color: #333;
        }

        h2 {
            margin-top: 20px;
        }

        ol {
            margin-bottom: 20px;
        }

        .cont-prin {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 850px;
            padding: 20px;
            background-color: #F5F5F5;
            margin-top: 70px;
            padding-left: 50px;
            margin-bottom: 70px;
            box-shadow: 10px 9px 5px 0px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow: 10px 9px 5px 0px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 10px 9px 5px 0px rgba(0, 0, 0, 0.22);
        }

        .contenedor {
            display: flex;
            justify-content: center;
        }

        .cont-bienvenidos {
            background-color: #FFFFFF;
            margin: ;
            width: 600px;
            height: 150px;
            border: 1px solid #009686;
            border-radius: 7px;
        }

        .cont-bienvenidos>h2 {
            margin-left: 20px;

        }

        .cont-bienvenidos>p {
            margin-left: 20px;
        }

        .linea {
            width: 800px;
            height: 1px;
            background-color: #6C6C6C;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .linea-2 {
            width: 800px;
            height: 1px;
            background-color: #6C6C6C;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .linea-3 {
            width: 800px;
            height: 1px;
            background-color: #6C6C6C;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .text {
            font-style: italic;
        }
    </style>
</head>

<body>
    <?php echo $vista; ?>
    <div class="contenedor">
        <div class="cont-prin">
            <h1>Manual de Usuario - Ducha Automática Disertus</h1>
            <div class="cont-bienvenidos">
                <h2>Bienvenido a Disertus</h2>
                <p>¡Gracias por elegir Disertus para tu experiencia de ducha mejorada y eficiente! Sigue estos
                    simples
                    pasos
                    para
                    comenzar:</p>
            </div>
            <h2>Paso 1: Conectar a la Red Wi-Fi de la Ducha</h2>
            <ol>
                <div class="text">
                    <li>Enciende la ducha automática Disertus.</li>
                    <li>Desde tu dispositivo móvil o computadora, busca y selecciona la red Wi-Fi proporcionada por la
                        ducha
                        (por
                        ejemplo, "Disertus_Ducha_XXXXXX").</li>
                    <li>Introduce la contraseña de la red Wi-Fi (por defecto es "123456789").</li>
                    <li>Una vez conectado, abre tu navegador web y escribe la dirección IP de la ducha:
                        <code>http://192.168.4.1</code>
                    </li>
                </div>
            </ol>

            <div class="linea"></div>
            <h2>Paso 2: Configurar los Tiempos de la Ducha</h2>
            <ol>
                <div class="text">
                    <li>En la página de configuración, encontrarás campos para personalizar los tiempos de la ducha:
                    </li>
                    <ul>
                        <li><strong>Duración de la Ducha:</strong> Define cuánto tiempo deseas que la ducha esté activa.
                            Por
                            ejemplo, si ingresas <code>5</code>, la ducha se apagará automáticamente después de 5
                            minutos.
                        </li>
                        <li><strong>Tiempo de Espera:</strong> Establece cuánto tiempo debe esperar la ducha antes de
                            estar
                            lista
                            para el siguiente usuario.</li>
                        <li><strong>Tiempo de Tolerancia:</strong> Determina el tiempo que la ducha esperará después de
                            que
                            alguien
                            se haya salido antes de estar lista para el siguiente usuario.</li>
                    </ul>
                </div>
            </ol>

            <div class="linea-2"></div>
            <h2>Paso 3: Vincular tu Dispositivo a tu Usuario</h2>
            <ol>
                <div class="text">
                    <li>Encuentra la etiqueta con la dirección MAC de la ducha. Esta es una serie de números y letras
                        únicos
                        para tu
                        dispositivo.</li>
                    <li>En la página web, introduce tu dirección MAC en el campo designado y haz clic en "Vincular
                        Dispositivo".
                    </li>
                    <li>Ahora, tu ducha está asociada a tu usuario y recordará tus preferencias de configuración.</li>
                </div>
            </ol>

            <div class="linea-3"></div>
            <h2>Paso 4: Comenzar a Usar la Ducha Automática</h2>
            <ol>
                <div class="text">
                    <li>Ingresa al área de detección del sensor PIR para activar la ducha.</li>
                    <li>La ducha comenzará a fluir de acuerdo con la configuración establecida.</li>
                    <li>¡Disfruta de tu ducha sabiendo que estás utilizando agua de manera eficiente y sostenible!</li>
                </div>
            </ol>

            <p><strong>Importante:</strong></p>
            <div class="text">
                <ul>
                    <li>Puedes regresar a la página de configuración en cualquier momento para ajustar los tiempos según
                        tus
                        preferencias.</li>
                    <li>Si necesitas cambiar la red Wi-Fi a la que se conecta la ducha, repite el Paso 1.</li>
                </ul>

            </div>
        </div>
</body>

</html>