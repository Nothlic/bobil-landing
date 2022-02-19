<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('login', 'AuthController::login', ['as' => 'login']);
$routes->post('login', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');
// $routes->get('/bobil-core/login', 'AuthController::login');

// Registration
$routes->get('register', 'AuthController::register', ['as' => 'register']);
$routes->post('register', 'AuthController::attemptRegister');
// $routes->post('/bobil-core/register', 'AuthController::register');

// Activation
$routes->get('activate-account', 'AuthController::activateAccount', ['as' => 'activate-account']);
$routes->get('resend-activate-account', 'AuthController::resendActivateAccount', ['as' => 'resend-activate-account']);

// Forgot/Resets
$routes->get('forgot', 'AuthController::forgotPassword', ['as' => 'forgot']);
$routes->post('forgot', 'AuthController::attemptForgot');
$routes->get('reset-password', 'AuthController::resetPassword', ['as' => 'reset-password']);
$routes->post('reset-password', 'AuthController::attemptReset');

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/welcome', 'Home::welcome');
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/collections', 'Home::collections');
$routes->get('/detail/(:any)', 'Home::detail/$1');
$routes->get('/station', 'Home::station');
$routes->get('/coming-soon', 'Home::comingsoon');
$routes->post('/subscribe', 'Home::subscribe');

//Admin Page
$routes->get('/bobil-core', 'Admin::index', ['filter' => 'role:admin']);

//Brand Page
$routes->get('/brand/create', 'Brand::create', ['filter' => 'role:admin']);
$routes->get('/brand/(:any)', 'Brand::edit/$1', ['filter' => 'role:admin']);
$routes->delete('/brand/(:num)', 'Brand::delete/$1', ['filter' => 'role:admin']);

//Email Blast Page
$routes->get('/bobil-core/mailblast', 'EmailBlast::index', ['filter' => 'role:admin']);
$routes->get('/bobil-core/mailblast/create', 'EmailBlast::create', ['filter' => 'role:admin']);
$routes->get('/bobil-core/mailblast/(:any)', 'EmailBlast::edit/$1', ['filter' => 'role:admin']);
$routes->delete('/bobil-core/mailblast/(:num)', 'EmailBlast::delete/$1', ['filter' => 'role:admin']);

//Car Page
$routes->get('/car/create', 'Car::create', ['filter' => 'role:admin']);
$routes->get('/car/(:any)', 'Car::edit/$1', ['filter' => 'role:admin']);
$routes->delete('/car/(:num)', 'Car::delete/$1', ['filter' => 'role:admin']);

//Information Page
$routes->get('/bobil-core/subscribe', 'Email::index', ['filter' => 'role:admin']);
$routes->get('/bobil-core/information/welcome', 'Information::welcome', ['filter' => 'role:admin']);
$routes->get('/bobil-core/information/landing', 'Information::landing', ['filter' => 'role:admin']);
$routes->get('/bobil-core/information/about', 'Information::about', ['filter' => 'role:admin']);
$routes->get('/bobil-core/information/collection', 'Information::collection', ['filter' => 'role:admin']);
$routes->get('/bobil-core/information/station', 'Information::station', ['filter' => 'role:admin']);
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
