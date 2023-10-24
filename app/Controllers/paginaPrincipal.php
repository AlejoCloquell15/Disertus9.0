<?php

namespace App\Controllers;

use App\Models\loginModelo;
use App\Models\caudalModelo;

class PaginaPrincipal extends BaseController
{
    public function cargarPp()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $idUsuario = session('idUser');

        $loginModelo = new loginModelo();
        $contra = $loginModelo->nombre($idUsuario);
        $contra['vista'] = view('spHeader');

        ////////////////////////////////////////////////7
        $modeloCaudal = new caudalModelo();
        $datos = [
            'IdUsuario' => $idUsuario,
        ];

        $contra['consulta'] = $modeloCaudal->caudalTotal($datos);
        $contra['consulta2'] = $modeloCaudal->caudalTotal2($datos);

        return view('spPaginaPrincipal', $contra);
    }
}