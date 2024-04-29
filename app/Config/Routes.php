<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('submit', 'AuthController::submit');
$routes->get('dashboard', 'AuthController::index');
$routes->post('dashboard', 'AuthController::dashboard');
// $routes->get("dashboard","Dashboard::index");
// $routes->post('Ruangan', 'Dashboard::Ruangan');
$routes->get('ruangan', 'RuanganController::ruangan');
$routes->post('Logout', 'LogoutController::index');
$routes->post('logout', 'LogoutController::logout', ['as' => 'dashboard']);
$routes->get('register', 'Register::index');
$routes->post('register', 'Register::process');
