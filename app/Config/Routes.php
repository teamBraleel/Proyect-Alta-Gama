<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);


//página innecesaria-------------
$routes->get('/', 'Home::index');
//-------------------------------
//página de programadores------------------------------------
$routes->get('/programadores', 'DeveloperController::index');
//-----------------------------------------------------------
//página para agregar productos-------------------
$routes->get('/productos', 'AddContoller::index');
$routes->post('/productos/agregar', 'AddContoller::add');
//-------------------------------------------------
//página de registro--------------------------------
//---------------------------------------------------
//página principal-------------------------------------
$routes->get('/altaGama', 'altaGamaController::index');
//-----------------------------------------------------
$routes->post('/productos/img', 'AddContoller::add');
$routes->get('/admi123', 'AdmiController::index');
//Eliminar.--------------------------------------------
$routes->get('/admi123/eliminar(:any)', 'AddContoller::eliminar/$1');
//Modificar.--------------------------------------------
$routes->post('/admi123/modificar(:any)', 'AddContoller::modificar/$1');
//Registro----------------------------------------------------
$routes->get('/usuarios', 'userController::index');
$routes->post('/usuarios/agregar', 'userController::add');
//Eliminar Usuario--------------------------------------------
$routes->get('/usuarios/eliminar(:any)', 'userController::eliminar/$1');
//Modificar Usuario--------------------------------------------
$routes->post('/usuarios/modificar(:any)', 'userController::modificar/$1');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
