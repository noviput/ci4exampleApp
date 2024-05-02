<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('submit', 'AuthController::login');
$routes->get('dashboard', 'AuthController::index');
$routes->post('dashboard', 'AuthController::dashboard');
// $routes->get("dashboard","Dashboard::index");
// $routes->post('Ruangan', 'Dashboard::Ruangan');
$routes->get('ruangan', 'RuanganController::ruangan');
$routes->get('Logout', 'LogoutController::index');
$routes->post('logout', 'LogoutController::logout');
$routes->get('register', 'Register::index');
$routes->post('register', 'Register::process');
$routes->get('scheduler', 'SchedulerController::scheduler');
//$routes->post('scheduler_input', 'SchedulerController::save');