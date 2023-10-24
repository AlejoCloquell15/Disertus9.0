<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\registrarModelo;
use App\Models\loginModelo;
use App\Models\sessionModelo;
use App\Models\nodemcuModelo;

class Registrar extends BaseController
{
    public function registrar()
    {
        return view('spRegistrar');
    } //

    public function ingresarDatos()
    {
        $validar = \Config\Services::validation();

        $validation = $this->validate([
            'nombre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tu nombre es requerido'
                ]
            ],
            'mail' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Su correo es requerido',
                    'valid_email' => 'Tu correo debe ser valido',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'La contraseña es requerida',
                    'min_length[6]' => 'La contraseña tiene que tener al menos 6 carácteres',
                ]
            ],
        ]);

        if ($validation == false) {
            $data['validar'] = $validar->getErrors('password', 'mail', 'nombre');
            return view('spRegistrar', $data);
        } else {
            $sessionModelo = new sessionModelo();
            $registrar = new registrarModelo();
            $loginModelo = new loginModelo();
            $nodemcuModelo = new nodemcuModelo();

            $nombre = $this->request->getPost('nombre');
            $mail = $this->request->getPost('mail');
            $contrasena = $this->request->getPost('password');
            $mac = $this->request->getPost('mac');
            $nombreDispositivo = $this->request->getPost('nombreDispositivo');

            $hash = Hash::make($contrasena);

            //comparo la mac que el usuario ingreso con el objetivo de averiguar si existe

            $consulta = $nodemcuModelo->compararMac($mac);

            if($consulta == true) {
                $datos = [
                    "Nombre" => $nombre,
                    "Email" => $mail,
                    "Contrasena" => $hash,
                ];
    
                $insercion = [
                    'mensaje' => $registrar->registrar(
                        $datos,
                    ),
                ];
                $idu = $loginModelo->sacarIdUsuario($mail);
                
            session()->set('idUser', $idu['IdUsuario']);
            $idUsuario = session('idUser');
            $resultado = $nodemcuModelo->registrarMac($idUsuario, $nombreDispositivo, $mac);
            
            }else{
                $mensaje = [
                    'mensaje' => "El dispositivo es inexistente o ya lo esta usando otro usuario",
                ];
                return view('spRegistrar', $mensaje);
            }

            if ($insercion['mensaje'] == 1) {
                $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"$&/()=?!';
                $longpalabra = 50;
                for ($pass = '', $n = strlen($caracteres) - 1; strlen($pass) < $longpalabra; ) {
                    $x = rand(0, $n);
                    $pass .= $caracteres[$x];
                }

                session()->set('idNodemcu', $mac);

                //Guardo el token en una variable de sesion
                session()->set('token', $pass);
                $token = session('token');


                $currentDateTime = new \DateTime();

                $interval = new \DateInterval('PT30M');
                $currentDateTime->add($interval);

                $fechaAdelantada = $currentDateTime->format('Y-m-d H:i:s');

                $datos = [
                    'Token' => $token,
                    'Expiracion' => $fechaAdelantada,
                    'IdUsuario' => $idUsuario,
                ];

                $insertar = $sessionModelo->agregarToken($datos);

                return redirect()->route('cargarPp');
            } else {
                $mensaje = [
                    'mensaje' => "Ya existe un usuario con ese correo",
                ];
                return view('spRegistrar', $mensaje);
            }
        }
    }
}