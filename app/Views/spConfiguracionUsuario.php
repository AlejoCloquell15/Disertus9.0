<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<style>
    .cont-principal {
        margin-left: 280px;
        width: fit-content;
        padding-left: 20px;
        padding-right: 20px;
        box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
        -webkit-box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
        -moz-box-shadow: 0px 8px 16px 5px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        padding-top: 20px;
        padding-bottom: 30px;
        margin-top: 50px;
    }

    .cont-nom {
        display: flex;
        align-items: center;
        padding-left: 11px;
        padding-right: 11px;
        border: 1px solid #BCBCBC;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .cont-correo {
        display: flex;
        align-items: center;
        padding-left: 11px;
        padding-right: 11px;
        border: 1px solid #BCBCBC;
        border-radius: 4px;
        margin-bottom: 30px;
    }

    .b {
        text-align: center;
        font-weight: 600;
    }

    input {
        margin-left: 10px;
        width: 250px;
        border: #BCBCBC solid 1px;
        border-bottom: 1px solid #BCBCBC;
        outline: none;
        height: 25px;
        padding-left: 6px;
        border-radius: 3px;
        display: relative;
    }

    #input-nombre::after {
        width: 100px;
        height: 2px;
        background-color: red;
        content: "asdasd";
        display: block
    }

    button {
        margin-left: 7px;
    }

    .input-submit-2 {
        border: 1px solid #FF5050;
        background: none;
        transition: transform 0.3s;
        height: 35px;
    }

    .input-submit-2:hover {
        transform: scale(1.02);
    }

    .input-submit {
        border: 1px solid #BCBCBC;
        background: none;
        transition: transform 0.3s;
        height: 35px;
        border: 1px solid green;
    }

    .input-submit:hover {
        transform: scale(1.02);

    }

    .input-submit-3 {
        border: none;
        background: #FF5050;
        transition: transform 0.3s;
        height: 35px;
        color: white;
    }

    .input-submit-3:hover {
        transform: scale(1.02);
        border: 1px solid red;
    }

    .estilo-modificado {
        border: none;
        border-bottom: solid 1px #009586;
    }

    .btn-editar {
        border: none;
        background-color: white;
    }

    .btn-editar>i {
        font-size: 20px;
        color: #009586;
        transition: transform 1s;
    }

    .btn-editar>:hover {
        color: black;
    }

    .btn-editar:hover {
        transform: scale(1.06);
    }

    #enviar-nombre {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    #enviar-correo {
        background-color: white;
        border: none;
        padding: 0;
    }

    box-icon {}
</style>

<body>
    <?php
    echo $vista; ?>
    <div class="cont-principal">
        <p class="b">Información sobre la cuenta</p>
        <div class="cont-nom">
            <p>Nombre De Usuario: </p>
            <form action="">
                <input id="input-nombre" type="text" value="<?php echo $consulta->Nombre ?>" readonly>
                <button id="button-nombre" class="btn-editar"><i class="bi bi-pencil-square"></i></button>
                <button id="enviar-nombre" style="display: none;">
                </button>
            </form>
        </div>
        <div class="cont-correo">
            <p>Correo Electronico Asociado a La Cuenta: </p>
            <form action="">
                <input id="input-correo" type="text" value="<?php echo $consulta->Email ?>" readonly>
                <button id="button-correo" class="btn-editar"><i class="bi bi-pencil-square"></i></button>
                <button style="display: none;" id="enviar-correo">
                </button>
            </form>
        </div>
        <form>
            <div class="cont-btns">
                <input type="submit" value="Cambiar Contraseña" class="input-submit">
                <input type="submit" value="Cerrar Sesion" class="input-submit-2">
                <input type="submit" value="Eliminar cuenta" class="input-submit-3">
            </div>
        </form>
    </div>
    <script>
        let inputcorreo = document.getElementById("input-correo");
        let buttoncorreo = document.getElementById("button-correo");
        let enviarcorreo = document.getElementById("enviar-correo");
        let valor = inputcorreo.value

        buttoncorreo.addEventListener("click", function (e) {
            e.preventDefault();
            console.log(valor)
            inputcorreo.toggleAttribute("readonly");
            enviarcorreo.style.display = enviarcorreo.style.display === 'none' ? 'inline-block' : 'none';
            if (inputcorreo.hasAttribute("readonly")) inputcorreo.value = valor
            inputcorreo.classList.toggle("estilo-modificado");
        });

        enviarcorreo.addEventListener("click", function (e) {
            e.preventDefault();
        });

        let inputnombre = document.getElementById("input-nombre");
        let buttonnombre = document.getElementById("button-nombre");
        let enviarnombre = document.getElementById("enviar-nombre");
        let valor2 = inputnombre.value

        buttonnombre.addEventListener("click", function (e) {
            e.preventDefault();
            inputnombre.toggleAttribute("readonly");
            enviarnombre.style.display = enviarnombre.style.display === 'none' ? 'inline-block' : 'none';
            if (inputnombre.hasAttribute("readonly")) inputnombre.value = valor2
            inputnombre.classList.toggle("estilo-modificado");
        });

        enviarnombre.addEventListener("click", function (e) {
            e.preventDefault();
        });
    </script>
</body>

</html>