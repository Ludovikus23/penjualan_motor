<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rute untuk Pesanan
$routes->get('pesanan', 'PesananController::index');
$routes->get('pesanan/(:num)', 'PesananController::detail/$1');
$routes->get('pesanan/create', 'PesananController::create');
$routes->post('pesanan/store', 'PesananController::store');
$routes->get('pesanan/edit/(:num)', 'PesananController::edit/$1');
$routes->post('pesanan/update/(:num)', 'PesananController::update/$1');
$routes->get('pesanan/delete/(:num)', 'PesananController::delete/$1');

// Rute untuk Motor
$routes->get('motor', 'MotorController::motor');
$routes->get('motor/create', 'MotorController::create');
$routes->post('motor/store', 'MotorController::store');
$routes->get('motor/edit/(:num)', 'MotorController::edit/$1');
$routes->post('motor/update/(:num)', 'MotorController::update/$1');

// Rute untuk Pelanggan
$routes->get('pelanggan', 'PelangganController::index');
$routes->get('pelanggan/create', 'PelangganController::create');
$routes->post('pelanggan/store', 'PelangganController::store');
$routes->get('pelanggan/edit/(:segment)', 'PelangganController::edit/$1');
$routes->post('pelanggan/update/(:segment)', 'PelangganController::update/$1');
$routes->get('pelanggan/delete/(:segment)', 'PelangganController::delete/$1');

// Rute untuk Pembeli
$routes->get('pembeli', 'PembeliController::index'); // Pastikan hanya ada satu rute
$routes->get('pembeli/create', 'PembeliController::create');
$routes->post('pembeli/store', 'PembeliController::store');
$routes->get('pembeli/edit/(:num)', 'PembeliController::edit/$1');
$routes->post('pembeli/update/(:num)', 'PembeliController::update/$1');
$routes->get('pembeli/delete/(:num)', 'PembeliController::delete/$1');

// Rute untuk Promosi
$routes->get('promosi', 'PromosiCOntroller::index');
$routes->get('promosi/create', 'PromosiCOntroller::create');
$routes->post('promosi/store', 'PromosiCOntroller::store');
$routes->get('promosi/edit/(:segment)', 'PromosiCOntroller::edit/$1');
$routes->post('promosi/update/(:segment)', 'PromosiCOntroller::update/$1');
$routes->get('promosi/delete/(:segment)', 'PromosiCOntroller::delete/$1');

// Rute untuk Laporan
$routes->get('laporan', 'LaporanController::index');
$routes->get('laporan/create', 'LaporanController::create');
$routes->post('laporan/store', 'LaporanController::store');
$routes->get('laporan/edit/(:num)', 'LaporanController::edit/$1');
$routes->post('laporan/update/(:num)', 'LaporanController::update/$1');
$routes->get('laporan/delete/(:num)', 'LaporanController::delete/$1');

// Rute untuk Dashboard
$routes->get('/dashboard', 'Dashboard::dashboard');

// Ruet User

$routes->get('/auth/register', 'AuthController::register'); // Halaman registrasi
$routes->post('/auth/submit_registration', 'AuthController::submit_registration'); // Proses registrasi
$routes->get('/auth/login', 'AuthController::login'); // Halaman login
$routes->post('/auth/submit_login', 'AuthController::submit_login'); // Proses login
$routes->get('/auth/logout', 'AuthController::logout'); // Proses logout
// Routes for AuthController
$routes->get('auth/login', 'AuthController::login');
$routes->post('auth/login', 'AuthController::login');
$routes->get('auth/register', 'AuthController::register');
$routes->post('auth/register', 'AuthController::register');

$routes->get('auth/main', 'AuthController::main');

$routes->get('auth/login', 'AuthController::login');
$routes->post('auth/login', 'AuthController::login');
$routes->get('auth/logout', 'AuthController::logout'); // Untuk logout
$routes->post('auth/save', 'AuthController::save');

// Halaman Public
//$routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']);
$routes->post('dashboard', 'AuthController::dashboard');

$routes->post('/layouts/main', 'AuthCOntroller::login');

$routes->get('public/home', 'PublicController::index');   // Halaman utama
$routes->get('/about', 'PublicController::about'); // Halaman about
$routes->get('/contact', 'PublicController::contact'); // Halaman kontak


