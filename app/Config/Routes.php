<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('produk', 'Produk::index');

$routes->group('rekomendasi', static function($routes){
    $routes->get('/', 'Rekomendasi::index');
    $routes->get('read', 'Rekomendasi::read');
    $routes->post('hitung', 'Rekomendasi::hitung');
});


$routes->group('kriteria', static function($routes){
    $routes->get('/', 'Kriteria::index');
    $routes->get('read', 'Kriteria::read');
    $routes->post('post', 'Kriteria::post');
    $routes->put('put', 'Kriteria::put');
    $routes->delete('delete/(:any)', 'Kriteria::delete/$1');
});
$routes->group('laptop', static function($routes){
    $routes->get('/', 'Laptop::index');
    $routes->get('read', 'Laptop::read');
    $routes->post('post', 'Laptop::post');
    $routes->put('put', 'Laptop::put');
    $routes->delete('delete/(:any)', 'Laptop::delete/$1');
});
$routes->group('detail', static function($routes){
    $routes->put('put', 'Detail::put');
});
