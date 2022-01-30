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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/admin/login', 'Admin::login');
$routes->post('/admin/login_proses', 'Admin::login_proses');
$routes->get('/admin/logout', 'Admin::logout');

$routes->get('/admin/dashboard', 'Admin/Dashboard::index');

$routes->get('/admin/forklift', 'Forklift::index',['as'=>'index_forklift']);
$routes->get('/admin/forklift/tambah_data', 'Forklift::tambah');
$routes->post('/admin/forklift/tambah_proses', 'Forklift::tambah_proses');
$routes->get('/admin/forklift/delete/(:num)', 'Forklift::delete/$1');
$routes->get('/admin/forklift/detail/(:num)', 'Forklift::detail/$1');
$routes->get('/admin/forklift/edit/(:num)', 'Forklift::edit/$1');
$routes->post('/admin/forklift/edit_proses', 'Forklift::edit_proses');

$routes->get('/admin/sopir', 'Sopir::index',['as'=>'index_sopir']);
$routes->get('/admin/sopir/tambah_data', 'Sopir::tambah');
$routes->post('/admin/sopir/tambah_proses', 'Sopir::tambah_proses');
$routes->get('/admin/sopir/delete/(:num)', 'Sopir::delete/$1');

$routes->get('/admin/transaksi', 'Transaksi::index',['as'=>'index_transaksi']);
$routes->get('/admin/transaksi/delete/(:num)', 'Transaksi::delete/$1');
$routes->get('/admin/transaksi/edit/(:num)', 'Transaksi::edit/$1');
$routes->post('/admin/transaksi/edit_proses', 'Transaksi::edit_proses');

$routes->get('/admin/pembayaran', 'PembayaranController::index',['as'=>'index_pembayaran']);
$routes->get('/admin/pembayaran/lunas/(:num)', 'PembayaranController::lunas/$1');
$routes->get('/admin/pembayaran/belum_lunas/(:num)', 'PembayaranController::belum_lunas/$1');
$routes->get('/admin/pembayaran/delete/(:num)', 'PembayaranController::delete/$1');
$routes->get('/admin/pembayaran/edit/(:num)', 'PembayaranController::edit/$1');
$routes->post('/admin/pembayaran/edit_proses', 'PembayaranController::edit_proses');

$routes->get('/admin/laporan', 'Transaksi::generate_pdf',['as'=>'laporan_transaksi']);

$routes->get('/kasir/login', 'Kasir::login');
$routes->post('/kasir/login_proses', 'Kasir::login_proses');
$routes->get('/kasir/logout', 'Kasir::logout',['as'=>'kasir_logout']);
$routes->get('/', 'Kasir::index',['as'=>'kasir_index']);
$routes->get('/rental/(:num)', 'Kasir::rental/$1');
$routes->post('/rental_proses', 'Transaksi::store');


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
