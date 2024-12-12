<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->group('id', function($routes) {
$routes->get('/', 'Home::index');
$routes->get('tentang', 'TentangController::index');
$routes->get('artikel', 'ArtikelController::index');
$routes->get('artikel/(:segment)', 'ArtikelController::detail/$1');
$routes->get('produk', 'ProdukController::index'); // Untuk halaman daftar produk
$routes->get('produk/(:segment)', 'ProdukController::detail/$1'); // Untuk halaman detail produk berdasarkan slug
$routes->get('aktivitas', 'AktivitasController::index');
$routes->get('aktivitas/(:segment)', 'AktivitasController::detail/$1');
$routes->get('kontak', 'KontakController::index');
$routes->get('language/setLanguage/(:any)', 'LanguageController::setLanguage/$1');

});

$routes->group('en', function($routes) {
$routes->get('/', 'Home::index');
$routes->get('about', 'TentangController::index');
$routes->get('article', 'ArtikelController::index');
$routes->get('article/(:segment)', 'ArtikelController::detail/$1');
$routes->get('product', 'ProdukController::index'); // Untuk halaman daftar produk
$routes->get('product/(:segment)', 'ProdukController::detail/$1'); // Untuk halaman detail produk berdasarkan slug
$routes->get('activity', 'AktivitasController::index');
$routes->get('activity/(:segment)', 'AktivitasController::detail/$1');
$routes->get('contact', 'KontakController::index');
$routes->get('language/setLanguage/(:any)', 'LanguageController::setLanguage/$1');

});

$routes->get('/', function () {
   return redirect()->to('/id/'); // Default redirect ke /en/home
});


// $routes->get('artikel1', 'Home::artikel1');
// $routes->get('artikel2', 'Home::artikel2');
// $routes->get('artikel3', 'Home::artikel3');
// $routes->get('artikel4', 'Home::artikel4');
// $routes->get('produk1', 'Home::produk1');
// $routes->get('produk2', 'Home::produk2');
// $routes->get('produk3', 'Home::produk3');
// $routes->get('produk4', 'Home::produk4');
// $routes->get('aktivitas1', 'Home::aktivitas1');
// $routes->get('aktivitas2', 'Home::aktivitas2');
// $routes->get('aktivitas3', 'Home::aktivitas3');
// $routes->get('aktivitas4', 'Home::aktivitas4');