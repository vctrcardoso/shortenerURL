<?php

namespace Config;

use App\Models\ForgotModel;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
#$routes->get('/', 'Home::index');

$routes->group('', function ($routes) {
	$routes->add('',      'Home::index',  ['as' => 'homepage',]);
	$routes->add('login', 'Login::login', ['as' => 'loginpage', 'filter' => 'authenticator:logout',]);
	$routes->add('registro', 'registro::registrar', ['as' => 'registrarpage',]);
	$routes->add('admin',      'Home::admin',  ['as' => 'inicial', 'filter' => 'Login:restrito']);
	$routes->add('send',      'ForgotPass::Sendmail',  ['as' => 'sendpage']);
	$routes->add('forgot',      'ForgotPass::index',  ['as' => 'forgotpage']);
/* 	$routes->add('novasenha',      'Home::NewPassword',  ['as' => 'newpass']); */
	$routes->add('novasenha/(:hash)', 'ForgotPass::NewPassword/$1');
	$routes->add('senha',      'ForgotPass::UpdatePass',  ['as' => 'updatepage']);
	$routes->add('encurta',      'Home::Encurta',  ['as' => 'encurtamento']);
	$routes->add('meuslinks',      'Login::URLs',  ['as' => 'linkpage']);
	$routes->add('url/(:any)', 'Home::Retornar/$1');
	$routes->add('deletar/(:num)', 'Home::excluir/$1');


});



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

$routes->add('logout', function () {
	session()->destroy();
	return redirect('loginpage');
});
