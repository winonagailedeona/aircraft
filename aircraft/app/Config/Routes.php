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
$routes->get('/cont', 'ProductsController::mycont',['filter' => 'authGuard']);
$routes->get('/pasta', 'ProductsController::products',['filter' => 'authGuard']);
$routes->get('/sandwich', 'ProductsController::sandwichProducts',['filter' => 'authGuard']);
$routes->get('/pica', 'ProductsController::picaProducts',['filter' => 'authGuard']);
$routes->get('/rice', 'ProductsController::mealsProducts',['filter' => 'authGuard']);
$routes->get('/dessert', 'ProductsController::dessertProducts',['filter' => 'authGuard']);
$routes->get('/others', 'ProductsController::allProducts',['filter' => 'authGuard']);
$routes->match(['get', 'post'], 'ProductController/store', 'ProductController::store');

//LOGIN AND REGISTER USER
$routes->get('/', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

//LOGIN ADMIN
$routes->get('/adlogin', 'AdminController::admlogin');
$routes->match(['get', 'post'], 'SigninController/signinAuth', 'SigninController::signinAuth');
$routes->get('/signin', 'SigninController::admin');
$routes->get('/reviewnf', 'AdminController::reviewnewsfeed');
$routes->get('/adprofile', 'ProfileController::admin');

//This is dashboard
$routes->get('/admin', 'AdminController::index');

//This is menu
$routes->get('/menuTable', 'AdminController::menuTable');
$routes->get('/editMenu/(:any)', 'AdminController::editMenu/$1');
$routes->post('/saveMenu', 'AdminController::saveMenu');
$routes->post('/updateMenu', 'AdminController::updateMenu');


//This is for the Customers Section
$routes->get('/customers', 'AdminController::customers');
$routes->post('/saveCustomer', 'AdminController::saveCustomer');

//Orders
$routes->get('/adorders', 'AdminController::myorders');
$routes->get('/processorders', 'AdminController::processing');
$routes->get('/cancelorders', 'AdminController::cancelled');
$routes->get('/historyorders', 'AdminController::myhistory');



//USER
$routes->get('/userprofile', 'UserController::profile');
$routes->match(['get', 'post'], '/userprofile/(:any)', 'UserController::profile/$1');
$routes->match(['get', 'post'], '/checkout', 'UserController::checkout');

$routes->get('/nf', 'UserController::newsfeed');
$routes->post('/savepost', 'UserController::savepost');
$routes->get('/orders', 'UserController::orders');
$routes->get('/confirmedorders', 'UserController::confirmedorders');
$routes->get('/readyorders', 'UserController::readyorders');
$routes->get('/cancelledorders', 'UserController::cancelledorders');
$routes->get('/ordershistory', 'UserController::ordershistory');
$routes->get('/search', 'UserController::search');
$routes->post('/search', 'UserController::search');
$routes->get('/showcart', 'UserController::showcart',['filter' => 'authGuard']);
$routes->post('/placeorder', 'ProductsController::placeorder');
$routes->get('/accept/(:any)', 'AdminController::accept/$1');
$routes->get('/cancel/(:any)', 'AdminController::cancel/$1');
$routes->get('/cancelledbyuser/(:any)', 'UserController::cancelledbyuser/$1');
$routes->get('/receive/(:any)', 'UserController::receive/$1');

$routes->get('/blocked/(:any)', 'AdminController::blocked/$1');
$routes->get('/unblocked/(:any)', 'AdminController::unblocked/$1');
$routes->get('/acceptpost/(:any)', 'AdminController::acceptpost/$1');


$routes->get('/processed/(:any)', 'AdminController::processed/$1');
$routes->get('/deletecart/(:any)', 'UserController::deletecart/$1');
$routes->get('/faqs', 'UserController::faqs');
$routes->get('/about', 'UserController::about');
$routes->put('/update_profile/(:any)', 'UserController::update_profile/$1');


//CART
$routes->post('/cart', 'UserController::cart');
$routes->post('/cartm', 'UserController::cartm');
$routes->post('/carts', 'UserController::carts');
$routes->post('/cartp', 'UserController::cartp');
$routes->post('/cartd', 'UserController::cartd');
$routes->post('/cartmi', 'UserController::cartmi');
$routes->post('/carto', 'UserController::carto');

//SINGLE PRODUCT
$routes->get('/sp/(:any)', 'ProductsController::sp/$1');
$routes->get('/spm/(:any)', 'ProductsController::spm/$1');
$routes->get('/sps/(:any)', 'ProductsController::sps/$1');
$routes->get('/spp/(:any)', 'ProductsController::spp/$1');
$routes->get('/spd/(:any)', 'ProductsController::spd/$1');
$routes->get('/spmi/(:any)', 'ProductsController::spmi/$1');
$routes->get('/spo/(:any)', 'ProductsController::spo/$1');


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
