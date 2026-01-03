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
$routes->get('/login', 'MyController::log');
$routes->get('/home', 'MyController::Home');
$routes->get('/signupfarmer', 'MyController::signupfarmer');
$routes->get('/signupsp', 'MyController::signupsp');
$routes->get('/about', 'MyController::About');
$routes->get('/index', 'MyController::index');
$routes->get('/products', 'MyController::products');
$routes->get('/blog', 'MyController::blog');
$routes->get('/contact', 'MyController::contact');
$routes->get('/farmerlogin', 'MyController::farmerlogin');
$routes->get('/splogin', 'MyController::splogin');
$routes->get('/loginf1', 'MyController::loginf1');
$routes->get('/logins2', 'MyController::logins2');
$routes->get('/fpassrecover', 'MyController::fpassrecover');
$routes->get('/spassrecover', 'MyController::spassrecover');

$routes->get('machine','MachineController::index');
$routes->get('create-machine','MachineController::create');
$routes->post('add-machine','MachineController::save');
$routes->get('delete-machine/(:num)', 'MachineController::delete/$1');
$routes->get('edit-machine/(:num)', 'MachineController::edit/$1');
$routes->post('update-machine', 'MachineController::update');
$routes->get('/viewmachine', 'ViewmachineController::viewmachine');






//service('auth')->routes($routes);


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
