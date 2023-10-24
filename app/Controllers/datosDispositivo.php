<?php

namespace App\Controllers;

use App\Models\nodemcuModelo;
use App\Models\sessionModelo;
use App\Controllers\Utils;
use App\Models\caudalModelo;



class DatosDispositivo extends BaseController
{
    public function cargarNodemcu()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $idUser = session('idUser');
        $nodemcuModelo = new nodemcuModelo();

        $placas['resultado'] = $nodemcuModelo->selectPlacas($idUser);
        $placas['vista'] = view('spHeader');
        $placas['idUser'] = $idUser;
        return view('spElegirNodemcu', $placas);

    }

    public function datosDispositivo()
    {
        $nodemcuModelo = new nodemcuModelo();

        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $tiempoEspera = $this->request->getPost('tiempoEspera');
        $tiempoDucha = $this->request->getPost('tiempoDucha');
        $tiempoTolerancia = $this->request->getPost('tiempoTolerancia');
        $idNodemcu = $this->request->getPost('idNodemcu');

        if ($tiempoEspera == 0 || $tiempoDucha == 0 || $tiempoTolerancia == 0) {

            $mensaje['mensaje'] = "Los valores tienen que ser superiores a 0";

            return view('spConfiguracion', $mensaje);
        }

        if ($this->request->getVar('agregarDatos')) {
            $datos = [
                'TiempoEspera' => $tiempoEspera,
                'TiempoDucha' => $tiempoDucha,
                'TiempoTolerancia' => $tiempoTolerancia,
                'IdNodemcu' => $idNodemcu,
            ];

            //var_dump($datos);
            $vista['resultado'] = $nodemcuModelo->agregarDatos($datos);
            $vista['idNodemcu'] = $idNodemcu;
            $vista['vista'] = view('spHeader');

            return view('spConfiguracion', $vista);
        } else {
            $idUsuario = session('idUser');

            $datos = [
                'IdUsuario' => $idUsuario,
                'IdNodemcu' => $idNodemcu,
            ];

            $nodemcuModelo->eliminarDispositivo($datos);

            return redirect()->to(site_url('cargarNodemcu'));
        }

    }

    public function cargarSpConf()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $modeloCaudal = new caudalModelo();

        $idUser = session('idUser');
        $variable['consulta'] = $modeloCaudal->conf($idUser);

        $variable['idNodemcu'] = $this->request->getPost('idUser');

        $nodemcuModelo = new nodemcuModelo();
        $variable['resultado'] = $nodemcuModelo->selectDatos($variable['idNodemcu']);

        $variable['vista'] = view('spHeader');
        return view('spConfiguracion', $variable);
    }

    public function cargarAgregarNodemcu()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        return view('spAgregarNodemcu');
    }

    public function agregarNodemcu()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $idNodemcu = $this->request->getPost('idNodemcu');
        $tiempoDucha = $this->request->getPost('tiempoDucha');
        $tiempoEspera = $this->request->getPost('tiempoEspera');
        $tiempoTolerancia = $this->request->getPost('tiempoTolerancia');
        $nombre = $this->request->getPost('nombre');

        $idUsuario = session('idUser');

        $datos = [
            'IdUsuario' => $idUsuario,
            'IdNodemcu' => $idNodemcu,
            'TiempoDucha' => $tiempoDucha,
            'TiempoEspera' => $tiempoEspera,
            'TiempoTolerancia' => $tiempoTolerancia,
            'Nombre' => $nombre,
        ];

        $nodemcuModelo = new nodemcuModelo();
        $nodemcuModelo->agregarDispositivo($datos);

        return redirect()->to(site_url('cargarNodemcu'));
    }
}