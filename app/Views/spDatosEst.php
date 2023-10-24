<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<style>
.gran-contenedor {
    margin-left: 100px;

}

.datos {
    display: flex;
}

.cont-prin {
    margin-top: 20px;
}

table {
    border-collapse: collapse;
    width: 500px;
}

th,
td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

.canva {
    width: 1000px;
    height: 300px;
    margin-left: 100px;
}
</style>

<?php echo $vista ?>
<div class="gran-contenedor">

    <body>
        <h1>Datos por dispositivo</h1>
        <form action="<?php echo base_url('/filtro/' . $idNodemcu); ?>" method="post">
            <select name="opcion">
                <option value="Total">Total</option>
                <option value="Dia">Dia</option>
                <option value="Mes">Mes</option>
                <option value="Año">Año</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
        <div class="datos">
            <div class="cont-prin">
                <table border='1'>
                    <tr>
                        <th>IdNodemcu</th>
                        <th>Caudal</th>
                        <th>Fecha</th>
                        <?php if (isset($consulta)) {
                if ($consulta == null) {
                    echo "Este dispositivo aun no tiene datos.";
                } else {
                    // Variable para rastrear el IdNodemcu actual
                    foreach ($consulta as $con) {
                        echo "<tr>";
                        echo "<td>" . $con->IdNodemcu . "</td>";
                        echo "<td>" . $con->caudal . "</td>";
                        if (isset($con->Fecha)) {
                            echo "<td>" . $con->Fecha . "</td>";
                        } else {
                            echo "<td>-</td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            ?>
                </table>
            </div>
            <div class="canva">
                <canvas id="grafico_consumo_agua" width="2000" height="1200"></canvas>
            </div>
        </div>
        <script>
        // Obtener los datos de PHP
        var consumoAgua = <?= json_encode($consulta) ?>;

        if (consumoAgua && consumoAgua.length > 0) {
            // Preparar los datos para Chart.js
            var labels = consumoAgua.map(function(item) {
                return item.Fecha;
            });
            var data = consumoAgua.map(function(item) {
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
</div>
<script type="text/javascript">
setTimeout(function() {
    $.ajax({
        url: '<?php echo base_url('/cargarPp'); ?>',
        success: function() {
            window.location.href = '<?php echo base_url('/cargarPp'); ?>';
        },
        error: function(xhr, status, error) {
            console.log('Error al cargar la página: ' + error);
        }
    });
}, 100000);
</script>
</body>

</html>