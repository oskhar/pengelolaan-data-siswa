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
$routes->get('/', 'Dashboard::index');
$routes->get('/data-siswa', 'SiswaController::index');
$routes->get('/data-siswa/create', 'SiswaController::create');
$routes->get('/data-siswa/detail', 'SiswaController::detail');
$routes->get('/data-siswa/update', 'SiswaController::update');
$routes->get('/data-siswa/trash', 'SiswaController::trash');
$routes->get('/data-siswa/update/(:any)', 'SiswaController::update/$1');
$routes->get('/data-siswa/update/(:any)/(:any)', 'SiswaController::update/$1/$2');
$routes->get('/data-siswa/detail/(:any)', 'SiswaController::detail/$1');
$routes->get('/data-siswa/get_data_ajax', 'SiswaController::get_data_ajax');
$routes->get('/data-siswa/get_deleted_data_ajax', 'SiswaController::get_deleted_data_ajax');

// action router
$routes->post('/data-siswa/create-data', 'SiswaController::create_data');
$routes->post('/data-siswa/update-data', 'SiswaController::update_data');
$routes->post('/data-siswa/soft-delete', 'SiswaController::soft_delete');
$routes->post('/data-siswa/recover-data', 'SiswaController::recover_data');
$routes->get('/data-siswa/export-excel', 'SiswaController::export_excel');

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