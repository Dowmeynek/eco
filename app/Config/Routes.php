<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/main', 'Home::index');
$routes->get('/taas', 'EcoController::taas');
