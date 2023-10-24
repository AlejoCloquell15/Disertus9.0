<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.cont-principal {
    margin-left: 100px;
}
</style>

<body>
    <?php echo $vista;?>
    <div class="cont-principal">
        <p>Información sobre la cuenta</p>
        <form action="">
            <p>Correo Electronico Asociado a La Cuenta: ...</p>
            <input type="submit" value="Cambiar Correo">
            <input type="submit" value="Cambiar Contraseña">
            <input type="submit" value="Cerrar Sesion">
            <input type="submit" value="Eliminar cuenta">
        </form>
    </div>
</body>

</html>