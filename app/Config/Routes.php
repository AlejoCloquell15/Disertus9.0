<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/nosotros', 'Home::nosotros');
$routes->get('/ComoFunciona', 'Home::ComoFunciona');
$routes->get('/menu', 'Home::menu');
$routes->get('/', 'Home::index');
$routes->get('/registrar', 'registrar::registrar');
$routes->post('/ingresarDatos', 'registrar::ingresarDatos');
$routes->get('/ingresarDatos', 'registrar::ingresarDatos');
$routes->get('/cargarLogin', 'login::cargarLogin');
$routes->post('/login', 'login::login');
$routes->post('/cerrarSession', 'login::cerrarSession');
$routes->get('/cerrarSession', 'login::cerrarSession');
$routes->get('/cargarPp', 'paginaPrincipal::cargarPp');
$routes->get('/eliminarToken', 'paginaPrincipal::eliminarToken');
$routes->get('/recibirNodemcu/(:any)', 'recibirNodemcu::recibirDatos');
$routes->post('/recibirNodemcu', 'recibirNodemcu::recibirDatos');
$routes->get('/recibirCaudal', 'recibirNodemcu::recibirCaudal');
$routes->post('/recibirCaudal', 'recibirNodemcu::recibirCaudal');
$routes->get('/recibir_caudalimetro/(:any)', 'recibirNodemcu::recibirCaudalimetro');
$routes->post('/recibir_caudalimetro', 'recibirNodemcu::recibirCaudalimetro');
//$routes->get('/recibirNodemcuPrueba', 'recibirNodemcu::recibirDatosPrueba'); $routes->post('/recibirNodemcuPrueba', 'recibirNodemcu::recibirDatosPrueba');
$routes->get('/enviarCorreo', 'recuperarPassword::correo');
$routes->post('/enviarCorreo', 'recuperarPassword::correo');
$routes->post('/datosDispositivo', 'datosDispositivo::datosDispositivo');
$routes->post('/cargarNodemcu', 'datosDispositivo::cargarNodemcu');
$routes->get('/cargarNodemcu', 'datosDispositivo::cargarNodemcu');
$routes->post('/cargarSpConf', 'datosDispositivo::cargarSpConf');
$routes->get('/cargarSpConf', 'datosDispositivo::cargarSpConf');
$routes->get('/cargarRecuperacion', 'recuperarPassword::cargarRecuperacion');
$routes->post('/enviarCodigo', 'recuperarPassword::enviarCodigo');
$routes->post('/cambiarPassword', 'recuperarPassword::cambiarPassword');
$routes->post('/cargarAgregarNodemcu', 'datosDispositivo::cargarAgregarNodemcu');
$routes->post('/agregarNodemcu', 'datosDispositivo::agregarNodemcu');
$routes->post('/cargarEst', 'estadisticas::cargarEst');
$routes->get('/cargarEst', 'estadisticas::cargarEst');
$routes->post('/cargarSpEst', 'estadisticas::cargarSpEst');
$routes->get('/cargarSpEst', 'estadisticas::cargarSpEst');
$routes->post('/filtro/(:any)', 'estadisticas::filtro/$1');
$routes->get('/filtro/(:any)', 'estadisticas::filtro/$1');
$routes->get('/recibirMAC/(:any)', 'recibirNodemcu::recibirMAC');
$routes->post('/recibirMAC', 'recibirNodemcu::recibirMAC');
$routes->get('/cargarSob', 'Home::cargarSob');
$routes->get('/cargarMan', 'Home::cargarMan');
$routes->get('/cargarUsu', 'Home::cargarConfUsu');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}