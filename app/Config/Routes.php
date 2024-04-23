<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('submit', 'AuthController::submit');
$routes->post('dashboard', 'DashboardController::dashboard');

