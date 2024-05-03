<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->post('dashboard', 'AuthController::test');
//$routes->post('submit', 'AuthController::login');
$routes->get('dashboard', 'AuthController::index');
//$routes->post('dashboard', 'AuthController::dashboard');
// $routes->get("dashboard","Dashboard::index");
// $routes->post('Ruangan', 'Dashboard::Ruangan');
$routes->get('ruangan', 'RuanganController::ruangan');
$routes->get('logout', 'LogoutController::index');
$routes->post('logout', 'LogoutController::logout', ['as' => 'dashboard']);
$routes->get('register', 'Register::index');
$routes->post('register', 'Register::process');
$routes->get('penjadwalan', 'SchedulerController::index');
$routes->post('penjadwalan', 'SchedulerController::submitForm');
// $routes->get('scheduler/edit/(:num)', 'UpdateController/editForm/$1');
// $routes->post('scheduler/update/(:num)', 'UpdateController/updateForm/$1');


//$routes->post('scheduler_input', 'SchedulerController::save');