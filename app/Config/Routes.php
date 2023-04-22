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
$routes->setAutoRoute(true);
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
$routes->get('/', 'Home::index');

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

 $routes->group('', function ($routes) {
	$routes->add('',      'Home::index',  ['as' => 'home',]);
	$routes->add('login', 'Auth\AuthController::login', ['as' => 'login']);
	$routes->add('register', 'Auth\AuthController::register', ['as' => 'register',]);
	$routes->post('actionregister','Auth\AuthController::actionRegister', ['as' => 'actionRegister']);
	$routes->post('actionlogin','Auth\AuthController::actionLogin', ['as' => 'actionLogin']);
	$routes->add('admin',      'Home::admin',  ['as' => 'index', 'filter' => 'authenticator:login']);
	$routes->add('send',      'ForgotPass::Sendmail',  ['as' => 'sendpage']);
	$routes->add('forgot',      'ForgotPass::index',  ['as' => 'forgotpage']);
/* 	$routes->add('novasenha',      'Home::NewPassword',  ['as' => 'newpass']); */
	$routes->add('novasenha/(:hash)', 'ForgotPass::NewPassword/$1');
	$routes->add('senha',      'ForgotPass::UpdatePass',  ['as' => 'updatepage']);
	$routes->add('shorten',      'Short\ShortenerController::Shorten',  ['as' => 'shorten']);
	$routes->add('viewmyurls',      'Short\ShortenerController::viewMyUrls',  ['as' => 'myurls']);
	$routes->get('getmyurls',      'Short\ShortenerController::getMyUrls',  ['as' => 'getmyurls']);
	$routes->add('url/(:any)', 'Short\ShortenerController::Redirect/$1');
	$routes->add('delete/(:num)', 'Short\ShortenerController::Destroy/$1');


});

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

$routes->add('logout', function () {
	session()->destroy();
	return redirect('login');
});
