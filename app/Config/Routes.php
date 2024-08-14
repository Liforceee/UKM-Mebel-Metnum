<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/home', 'Home::index');
$routes->get('/petunjuk', 'petunjuk::index');
$routes->get('/produk', 'produk::index');
$routes->get('/estimasi', 'estimasi::index');
$routes->post('/estimasi', 'estimasi::hasil');
$routes->get('/pengembang', 'pengembang::index');
$routes->get('/contact', 'contact::index');
