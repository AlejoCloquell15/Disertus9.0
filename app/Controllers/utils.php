<?php

namespace App\Controllers;

use App\Models\sessionModelo;

class Utils extends BaseController
{
    function token()
    {
        $idUsuario = session('idUser');
        if (isset($idUsuario)) {
            $token = session('token');
            if ($token) {
                $conexion = new sessionModelo;
                $fechaExpiracion = $conexion->fechaExpiracion($token);

                $fechaActual = date('Y-m-d H:i:s');

                if (strtotime($fechaExpiracion['Expiracion']) == strtotime($fechaActual)) {
                    return 2;
                } elseif (strtotime($fechaExpiracion['Expiracion']) < strtotime($fechaActual)) {
                    return 2;
                }
            }
        } else {
            return 1;
        }

    }
}