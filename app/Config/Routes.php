<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/main', 'Home::index');
$routes->get('/shop', 'Home::shop');
$routes->get('/admins', 'AdminController::admin');
$routes->get('/login', 'AdminController::login');
$routes->get('/register', 'AdminController::register');
