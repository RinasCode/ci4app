<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// pemahaman routes di ci 4.
 //even udah punya controller jangan lupa kasih route biar bisa jalan
// $routes->get('/', 'Home::index');
// $routes->get('/coba', 'Home::coba');
// $routes->get('/caca', 'Home::caca');
// $routes->get('/coba', 'Coba::index');
// $routes->get('/coba/ayam', 'Coba::ayam');
// // ini cara penggunaan place holder
// //$1 ambil nilai dari place holder pertama dan seterusnya.
// // bisa pakai alpha, num, alnum, any
// $routes->get('home/caca/(:any)/(:num)', 'Home::caca/$1/$2');

// // ini cara penggunaan place holder
// // cara panggil controller di dalam folder
// $routes->get('user', 'Admin\User::index');

//controller yang di pakai 
$routes->get('/', 'Pages::index');
$routes->get('pages/about', 'Pages::about');
$routes->get('pages/contact', 'Pages::contact');
$routes->get('komik', 'Komik::index');
