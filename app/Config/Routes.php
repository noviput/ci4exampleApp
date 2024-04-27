<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('submit', 'AuthController::submit');
$routes->post('dashboard', 'AuthController::dashboard');
// $routes->post('Ruangan', 'Dashboard::Ruangan');
$routes->get('ruangan', 'RuanganController::ruangan');
$routes->get('logout', 'LogoutController::logout', ['as' => 'dashboard']);


