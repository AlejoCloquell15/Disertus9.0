<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,300;1,400&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            /* Cambiar el color de fondo a blanco */
        }


        h1 {
            margin-top: 30px;
            /* Eliminar el margen superior para acercar el título al contenido */
            font-size: 28px;
            /* Aumentar el tamaño de fuente */
            text-align: center;
            /* Centrar el título horizontalmente */
            margin-bottom: 20px;
            /* Agregar un margen inferior para separar del contenido siguiente */
        }

        .canva {
            width: 1000px;
            height: 500px;
            margin-left: 160px;
            display: flex;
            justify-content: center;

        }

        .p-total {
            position: absolute;
            margin-left: 180px;
            margin-top: -15px;
        }

        /* Cambios en el tamaño de los íconos del header */
    </style>
    <title>Bienvenido </title>
</head>

<body>
    <?php echo $vista; ?>
    <div class="cont-prin">
        <h1>¡Bienvenido
            <?php echo $Nombre ?>!
        </h1>
        <p class="p-total"><b>Cantidad total de consumo:</b>
            <?php if (isset($consulta2)) {
                foreach ($consulta2 as $con) {
                    echo $con->caudal;
                }
            } else {
                echo "Aun no hay datos de este dispositivo";
            } ?> Litros
        </p>
        <div class="canva">
            <canvas id="grafico_consumo_agua" width="3000" height="1500"></canvas>
        </div>
    </div>
    <script>
        // Obtener los datos de PHP
        var consumoAgua = <?= json_encode($consulta) ?>;

        if (consumoAgua && consumoAgua.length > 0) {
            // Preparar los datos para Chart.js
            var labels = consumoAgua.map(function (item) {
                return item.Fecha;
            });
            var data = consumoAgua.map(function (item) {
                return item.caudal;
            });

            // Crear el gráfico
            var ctx = document.getElementById('grafico_consumo_agua').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Consumo de Agua (litros)',
                        data: data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color del área bajo la línea
                        borderColor: 'rgba(75, 192, 192, 1)', // Color de la línea
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Litros'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Fecha'
                            }
                        }
                    }
                }
            });
        } else {
            // Si no hay datos, puedes ocultar el gráfico o mostrar un mensaje de aviso.
            document.getElementById('grafico_consumo_agua').style.display = 'none';
        }
    </script>
    <script type="text/javascript">
        setTimeout(function () {
            $.ajax({
                url: '<?php echo base_url('/cargarPp'); ?>',
                success: function () {
                    window.location.href = '<?php echo base_url('/cargarPp'); ?>';
                },
                error: function (xhr, status, error) {
                    console.log('Error al cargar la página: ' + error);
                }
            });
        }, 1000000);
    </script>
</body>

</html>