<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&family=Nunito+Sans:opsz@6..12&family=Raleway:ital,wght@0,100;1,100;1,300&family=Ubuntu:ital,wght@1,300&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .cont-prin {
        margin-left: 57px;
    }

    .bienvenidos {
        background-color: #F4F4F4;
        margin-top: 70px;
        margin-bottom: 100px;
        height: 300px;
        display: flex;
        align-items: center;
        /* Esto centra verticalmente el contenido */

    }

    .text-bie {
        margin-left: 70px;
        width: 620px;
    }

    .text {
        font-family: 'Gabarito', sans-serif;
        color: #555555;
    }

    .titulo-bie {
        font-size: 50px;
    }

    .img-bie {
        width: 290px;
        height: auto;
        margin-left: 170px;
    }

    /*//////////////////////////////*/

    .mision {
        background-color: #F4F4F4;
        margin-top: 0px;
        margin-bottom: 100px;
        height: 300px;
        display: flex;
        align-items: center;
        margin-top: 30px;
        /* Esto centra verticalmente el contenido */

    }

    .text-mis {
        margin-left: 160px;
        width: 620px;
    }

    .titulo-mis {
        font-size: 50px;
    }

    .img-mis {
        width: 290px;
        height: auto;
        margin-left: 140px;
    }

    .ambiente {
        background-color: #F4F4F4;
        margin-bottom: 120px;
        height: 300px;
        display: flex;
        align-items: center;
        margin-top: 30px;
        /* Esto centra verticalmente el contenido */

    }

    .text-amb {
        margin-left: 70px;
        width: 620px;
    }

    .titulo-amb {
        font-size: 50px;
    }

    .img-amb {
        width: 320px;
        height: auto;
        margin-left: 170px;
    }

    .img-dis {
        text-align: center;
        width: 520px;
        height: auto;
        margin-top: 140px;
        box-shadow: 10px 17px 14px -3px rgba(0, 0, 0, 0.28);
        -webkit-box-shadow: 10px 17px 14px -3px rgba(0, 0, 0, 0.28);
        -moz-box-shadow: 10px 17px 14px -3px rgba(0, 0, 0, 0.28);
    }

    .cont-img-dis {
        height: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 70px;
        margin-bottom: 150px;
    }

    .como-funciona {
        width: 100%;
        margin-bottom: 100px;
        height: 210px;
        padding-bottom: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 30px;
        text-align: center;
        box-shadow: 10px 17px 14px -3px rgba(0, 0, 0, 0.28);
        -webkit-box-shadow: 10px 17px 14px -3px rgba(0, 0, 0, 0.28);
        -moz-box-shadow: 10px 17px 14px -3px rgba(0, 0, 0, 0.28);
        /* Esto centra verticalmente el contenido */
    }

    .text-com {
        margin-left: 50px;
        width: 1000px;
    }

    .titulo-com {
        font-size: 80px;
    }

    .p-com {
        font-size: 20px;
    }

    .cont-ben {
        height: 1000px;
        margin-bottom: 10px;
        font-family: 'Gabarito', sans-serif;
    }

    .cont-cua>div>h1 {
        font-size: 25px;
        margin-top: 15px;
    }


    .img-aho {
        width: 120px;
        height: auto;
        margin-left: 0px;
        margin-top: 0px;
    }

    .img-pla {
        width: 170px;
        height: auto;
        margin-left: 0px;
        margin-top: 0px;
    }

    .img-exp {
        width: 140px;
        height: auto;
        margin-left: 0px;
        margin-top: 0px;
    }

    .img-sen {
        width: 140px;
        height: auto;
        margin-left: 0px;
        margin-top: 0px;
    }

    .img-reg {
        width: 140px;
        height: auto;
        margin-left: 0px;
        margin-top: -10px;
    }

    .img-amb2 {
        width: 130px;
        height: auto;
        margin-left: 0px;
        margin-top: 0px;
    }

    .cont-aho {
        text-align: center;
        background-color: #E7E7E7;
        position: absolute;
        height: 340px;
        width: 367px;
        margin-top: 50px;
        margin-left: 40px;
        border-radius: 20px;
    }

    .cont-pla {
        text-align: center;
        background-color: #E7E7E7;
        position: absolute;
        height: 340px;
        width: 367px;
        margin-top: 50px;
        margin-left: 460px;
        border-radius: 20px;
    }

    .cont-exp {
        text-align: center;
        background-color: #E7E7E7;
        position: absolute;
        height: 340px;
        width: 367px;
        margin-left: 40px;
        margin-top: 450px;
        border-radius: 20px;
    }

    .cont-tec {
        text-align: center;
        background-color: #E7E7E7;
        position: absolute;
        height: 340px;
        width: 367px;
        margin-left: 460px;
        margin-top: 450px;
        border-radius: 20px;
    }

    .cont-reg {
        text-align: center;
        background-color: #E7E7E7;
        position: absolute;
        height: 340px;
        width: 367px;
        margin-left: 875px;
        margin-top: 50px;
        border-radius: 20px;
    }

    .cont-aum {
        text-align: center;
        background-color: #E7E7E7;
        position: absolute;
        height: 340px;
        width: 367px;
        margin-left: 875px;
        margin-top: 450px;
        border-radius: 20px;
    }

    .titulo-ben {
        font-size: 50px;
    }

    .cont-titulo {
        display: flex;
        justify-content: center;
    }

    .cont-p-aho {
        position: absolute;
        width: 300px;
        margin-left: 35px;
        margin-top: 0px;
    }

    .cont-p-amb2 {
        position: absolute;
        width: 300px;
        margin-left: 35px;
        margin-top: -15px;
    }

    .cont-p-reg {
        position: absolute;
        width: 300px;
        margin-left: 35px;
        margin-top: -5px;
    }
</style>

<body>
    <?php echo $vista; ?>
    <div class="cont-prin">
        <div class="cont-img-dis">
            <img src="<?= base_url('disertus.png') ?>" alt="Mi Imagen" class="img-dis">
        </div>
        <div class="bienvenidos">
            <div class="text-bie">
                <h1 class="titulo-bie">Te damos la bienvenida a Disertus</h1>
                <div class="text">
                    <p>Bienvenidos a Disertus, un proyecto nacido de la pasión por la eficiencia y la sostenibilidad en
                        el
                        uso
                        del agua. Fundado en 2023, nuestro objetivo es transformar la forma en que las personas y
                        las organizaciones interactúan con uno de los recursos más esenciales: el agua.</p>
                </div>
            </div>
            <img src="<?= base_url('bienvenido.png') ?>" alt="Mi Imagen" class="img-bie">
        </div>

        <div class="mision">
            <img src="<?= base_url('mision.png') ?>" alt="Mi Imagen" class="img-mis">
            <div class="text-mis">
                <h1 class="titulo-mis">Nuestra misión</h1>
                <div class="text">
                    <p>En Disertus, creemos en un futuro donde el agua se utiliza de manera consciente y responsable.
                        Nuestra misión es proporcionar soluciones innovadoras que no solo ahorren agua, sino que también
                        promuevan un cambio de mentalidad hacia una gestión más eficiente y sostenible de este recurso
                        precioso.</p>
                </div>
            </div>
        </div>
        <div class="ambiente">
            <div class="text-amb">
                <h1 class="titulo-amb">Nuestro compromiso social y ambiental</h1>
                <div class="text">
                    <p>Estamos comprometidos con la responsabilidad social empresarial y la protección del medio
                        ambiente. Colaboramos con organizaciones y proyectos que comparten nuestra visión de un mundo
                        más sostenible y participamos activamente en iniciativas de conservación del agua.</p>
                </div>
            </div>
            <img src="<?= base_url('ambiente.png') ?>" alt="Mi Imagen" class="img-amb">
        </div>
        <div class="como-funciona">
            <div class="text-com">
                <h1 class="titulo-com">¿Cómo Funciona?</h1>
                <div class="text">
                    <p class="p-com">Nuestras duchas automáticas incorporan tecnología de vanguardia que permite un
                        control preciso
                        del flujo de agua y del tiempo de uso. A través de un intuitivo panel de configuración, los
                        usuarios pueden personalizar sus preferencias y establecer límites de tiempo para cada sesión de
                        ducha. Una vez alcanzado el límite, el flujo de agua se detiene temporalmente, promoviendo así
                        una gestión responsable del recurso.</p>
                </div>
            </div>
        </div>
        <div class="cont-ben">
            <div class="cont-titulo">
                <h1 class="titulo-ben">Beneficios Destacados</h1>
            </div>
            <div class="cont-cua">
                <div class="cont-aho">
                    <h1>Ahorro de Agua</h1>
                    <img src="<?= base_url('Ahorro.png') ?>" alt="Mi Imagen" class="img-aho">
                    <div class="cont-p-aho">
                        <p>Nuestras duchas automáticas están diseñadas para reducir el consumo de agua en un
                            gran porcentaje en comparación con las duchas convencionales.</p>
                    </div>
                </div>
                <div class="cont-pla">
                    <h1>Plataforma de Gestión en Línea</h1>
                    <img src="<?= base_url('Gestion.png') ?>" alt="Mi Imagen" class="img-pla">
                    <div class="cont-p-aho">
                        <p>Ofrecemos una plataforma web que permite a los usuarios monitorear y analizar su consumo de
                            agua, brindando valiosa información para un uso aún más eficiente.</p>
                    </div>
                </div>
                <div class="cont-exp">
                    <h1>Experiencia Personalizada</h1>
                    <img src="<?= base_url('ExperienciaPersonalizada.png') ?>" alt="Mi Imagen" class="img-exp">
                    <div class="cont-p-aho">
                        <p>Cada usuario puede adaptar la configuración de su ducha según sus preferencias individuales,
                            creando así una experiencia de baño a medida.</p>
                    </div>
                </div>
                <div class="cont-tec">
                    <h1>Tecnología de Sensorización</h1>
                    <img src="<?= base_url('Sensor.png') ?>" alt="Mi Imagen" class="img-sen">
                    <div class="cont-p-aho">
                        <p>Nuestras duchas cuentan con sensores de vanguardia que inician y detienen el flujo de agua de
                            forma instantánea, optimizando el consumo y brindando una experiencia de baño sin
                            interrupciones.</p>
                    </div>
                </div>
                <div class="cont-reg">
                    <h1>Registro Histórico de Consumo</h1>
                    <img src="<?= base_url('Registro.png') ?>" alt="Mi Imagen" class="img-reg">
                    <div class="cont-p-reg">
                        <p>Ofrecemos una plataforma en línea que registra el consumo de agua individual, permitiendo un
                            seguimiento a lo largo del tiempo y facilitando la fijación de metas de ahorro y la
                            conciencia del consumo.</p>
                    </div>
                </div>
                <div class="cont-aum">
                    <h1>Aumento de la Conciencia Ambiental</h1>
                    <img src="<?= base_url('Ambiente2.png') ?>" alt="Mi Imagen" class="img-amb2">
                    <div class="cont-p-amb2">
                        <p>Nuestras duchas automáticas fomentan la
                            responsabilidad ambiental, contribuyendo a la conservación del recurso para las futuras
                            generaciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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