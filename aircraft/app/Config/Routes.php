<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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

//USER INTERFACE
$routes->get('/cont', 'ProductsController::mycont');
$routes->get('/pasta', 'ProductsController::products');
$routes->get('/sandwich', 'ProductsController::sandwichProducts');
$routes->get('/pica', 'ProductsController::picaProducts');
$routes->get('/rice', 'ProductsController::mealsProducts');
$routes->get('/dessert', 'ProductsController::dessertProducts');
$routes->get('/others', 'ProductsController::othersProducts');
$routes->match(['get', 'post'], 'ProductController/store', 'ProductController::store');


//LOGIN AND REGISTER
$routes->get('/', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

$routes->post('/search', 'UserController::search');

$routes->get('/adminprofile', 'ProfileController::adminindex',['filter' => 'authGuard']);
$routes->get('/adminsign', 'SigninController::admin');

//ADMIN PANEL

//This is dashboard
$routes->get('/admin', 'AdminController::index');

//This is menu dropdown

$routes->get('/mealsTab', 'AdminController::mealsTable');
$routes->post('/saveMeals', 'AdminController::saveMeals');

$routes->get('/menuTable', 'AdminController::menuTable');
$routes->post('/saveMenu', 'AdminController::saveMenu');

//This is add new admin section
$routes->get('/addAdmin', 'AdminController::adminTable');

//USER
$routes->get('/userprofile', 'UserController::profile');
$routes->get('/orders', 'UserController::orders');
$routes->get('/cart/(:any)', 'UserController::cart/$1');
$routes->get('/showcart', 'UserController::showcart');
$routes->get('/sp/(:any)', 'ProductsController::sp/$1');
$routes->get('/search', 'UserController::search');
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
