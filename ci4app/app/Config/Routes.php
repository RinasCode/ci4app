<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Users'); // Set default controller ke Users
$routes->get('/', 'Users::login'); // Rute awal menuju login


// Rute untuk login
$routes->get('login', 'Users::login');
$routes->post('login', 'Users::login'); // Untuk menangani submit form login
$routes->get('logout', 'Users::logout');

// Rute untuk registrasi
$routes->get('register', 'Users::register');
$routes->post('register', 'Users::register'); // Untuk menangani submit form registrasi

// Rute halaman home (hanya bisa diakses jika sudah login)
$routes->get('home', 'Pages::index', ['filter' => 'auth']);

// Rute lainnya
$routes->get('pages/about', 'Pages::about');
$routes->get('pages/contact', 'Pages::contact');

// Rute untuk Komik
$routes->get('komik', 'Komik::index', ['filter' => 'auth']);
$routes->get('komik/create', 'Komik::create', ['filter' => 'auth']);
$routes->post('komik/save', 'Komik::save', ['filter' => 'auth']);
$routes->delete('komik/(:num)', 'Komik::delete/$1', ['filter' => 'auth']);
$routes->get('komik/edit/(:any)', 'Komik::edit/$1', ['filter' => 'auth']);
$routes->post('komik/update/(:any)', 'Komik::update/$1', ['filter' => 'auth']);
$routes->get('komik/(:any)', 'Komik::detail/$1', ['filter' => 'auth']);

// Rute untuk People
$routes->get('people', 'People::index', ['filter' => 'auth']); // Tambahkan filter jika perlu
