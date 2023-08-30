<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/hello', 'Hello::index');
$routes->get('/hello/say_hello/(:any)', 'Hello::say_hello/$1');
