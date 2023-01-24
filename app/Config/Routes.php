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
$routes->get('/', 'Home::index');
$routes->get('/tentangkami', 'Profile::index');
$routes->get('/visimisi', 'Profile::visimisi');
$routes->get('/struktur', 'Profile::struktur');
$routes->get('/fasilitas', 'Profile::fasilitas');
$routes->get('/contact', 'Home::contact');
$routes->get('/daftar', 'Daftar::index');
$routes->get('/datadaftar', 'Daftar::datadaftar');
$routes->get('/detail/(:any)', 'Daftar::detail/$1');
$routes->post('/daftar/save', 'Daftar::save');
$routes->get('/edit/(:segment)', 'Daftar::edit/$1');
$routes->post('/daftar/update/(:any)', 'Daftar::update/$1');

$routes->delete('/delete/(:num)', 'Daftar::delete/$1');

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
