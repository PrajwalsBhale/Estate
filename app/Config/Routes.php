<?php

namespace Config;

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
$routes->setDefaultController('Web');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Web::index');
$routes->get('/about', 'Web::about');
$routes->get('/property', 'Web::property');
$routes->get('/blog', 'Web::blog');
$routes->get('/property_single', 'Web::property_single');
$routes->get('/agents_grid', 'Web::agents_grid');
$routes->get('/agents_single', 'Web::agents_single');
$routes->get('/contact', 'Web::contact');
$routes->get('/login', 'Web::login', ['filter' => 'AlreadyLoggedIn']);
$routes->get('/register', 'Web::register', ['filter' => 'AlreadyLoggedIn']);
$routes->get('/logout', 'Web::logout', ['filter' => 'AuthCheck']);


$routes->get('/profile', 'Web::profile', ['filter' => 'AuthCheck']);
$routes->get('/PostProperty', 'Web::post_property', ['filter' => 'AuthCheck']);

$routes->get('/PropertySingle/(:num)', 'Web::property_single/$1',['filter' => 'AuthCheck']);



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
