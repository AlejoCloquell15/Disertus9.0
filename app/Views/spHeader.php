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

    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        width: 100%;
        height: 100%;
        /* Cambiar el color de fondo a blanco */
    }

    header {
        background: linear-gradient(86deg, rgba(0, 75, 73, 1) 11%, rgba(9, 118, 121, 1) 58%, rgba(0, 177, 149, 1) 100%);
        color: #ffffff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 14px 20px;
        position: sticky;
        top: 0;
        z-index: 1;
    }

    header a {
        color: #ffffff;
        text-decoration: none;
        margin-right: 20px;
        /* Mayor espacio entre los íconos y el texto */
        font-size: 18px;
        /* Reducir el tamaño de fuente */
        transition: color 0.3s ease-in-out;
    }


    nav {
        background: rgb(0, 75, 73);
        background: linear-gradient(180deg, rgba(0, 75, 73, 1) 11%, rgba(9, 118, 121, 1) 58%, rgba(0, 136, 115, 1) 100%);
        color: #ffffff;
        position: fixed;
        left: 0;
        width: 35px;
        height: calc(100vh - 60px);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px;
        shadow: none;
    }

    @media (max-width: 767px) {
        nav {
            bottom: 0;
            top: auto;
            width: 100%;
            height: 35px;
            flex-direction: row;
            justify-content: space-evenly;
        }
    }

    nav a {
        color: #ffffff;
        text-decoration: none;
        margin: 20px 0;
        padding: 10px;
        width: 100%;
        /* Los enlaces ocupan todo el ancho del nav */
        text-align: center;
        /* Centrar el texto horizontalmente */
        transition: background-color 0.3s ease-in-out;
    }

    nav a:hover {
        background-color: #134e4e;
        color: #ff9900;
        font-size: 18px;
        transition: background-color 0.5s ease-in-out;
        /* Aumentar la duración de la transición en el hover */
        transition: 0.5s ease-in-out;
        /* Aumentar la duración de la transición en el hover */
    }

    nav i {
        font-size: 20px;
    }

    nav i:hover {
        color: #ff9900;
    }

    .content {
        margin: 0 220px;
        padding: 40px;
        background-color: #EBEBEB;

    }

    /* Cambios en el tamaño de los íconos del header */
    .header-icons i {
        font-size: 27px;
        margin-left: -8px;
        margin-right: 5px;
    }

    /* Cambios en el tamaño de los íconos del nav */
    .nav-icons i {
        font-size: 20px;
    }

    .disertus {
        font-size: 20px;
        color: #ffffff;
        margin: 0;
        margin-left: -5px;
        margin-top: 2px;
        font-family: 'Poppins';
    }

    .header-icons {
        display: flex;
        align-items: center;
    }

    .i-cerrar-session:hover {
        color: #ff9900;
        transform: scale(1.4);
    }

    .cont-ini>a>i {
        font-size: 25px;
    }

    .cont-ini>a>p {
        display: inline;
    }

    .cont-ini>a:hover {
        color: #ff9900;

    }
    </style>
</head>

<body>
    <header>
        <div class="header-icons">
            <a class="disertus">DISERTUS</a>
        </div>
        <div class="cont-ini">
            <a class="i-inicio" href="<?php echo base_url() ?>cargarPp">
                <i class="bi bi-house"></i>
                <p>Inicio</p>
            </a>
        </div>
    </header>
    <nav>
        <a href="<?php echo base_url(); ?>cargarNodemcu" title="Configuracion"><i class="bi bi-gear"></i></a>
        <a href="<?php echo base_url(); ?>cargarEst" title="Datos De Uso"><i class="bi bi-bar-chart"></i></a>
        <a href="<?php echo base_url(); ?>cargarMan" title="Manual Del Dispositivo"><i class="bi bi-wrench"></i></a>
        <a href="<?php echo base_url(); ?>cargarSob" title="Sobre Nostros"><i class="bi bi-people-fill"></i></a>
        <a href="<?php echo base_url(); ?>cargarUsu" title="Informacion Del Usuario"><i
                class="bi bi-person-circle"></i></a>
        <a href="<?php echo base_url(); ?>cerrarSession" title="Cerrar Sesion"><i class="bi bi-box-arrow-right"></i></a>
    </nav>
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
    }, 1800000);
    </script>
</body>

</html>