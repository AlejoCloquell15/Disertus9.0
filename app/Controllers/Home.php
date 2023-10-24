<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('paginaPrincipal');
    }

    public function cargarSob()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $variable['vista'] = view('spHeader');

        return view('spSobreNosotros', $variable);
    }

    public function comoFunciona()
    {
        return view('ComoFunciona');
    }

    public function menu()
    {
        return view('menu');
    }

    public function cargarMan()
    {
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $variable['vista'] = view('spHeader');
        return view('spManual', $variable);
    }

    public function cargarConfUsu(){
        $utils = new Utils();
        $auth = $utils->token();
        if ($auth == 1) {
            return view('spLogin');
        } elseif ($auth == 2) {
            return redirect()->route('cerrarSession');
        }

        $variable['vista'] = view('spHeader');
        return view('spConfiguracionUsuario', $variable);
    }
}