<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/', 'ReactController::index');

// $routes->get('/auth/register', 'AuthController::register');
// $routes->post('/auth/register', 'AuthController::registerUser');

$routes->get('/register', 'AuthController::register');
$routes->post('/auth/registerUser', 'AuthController::registerUser');
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/loginUser', 'AuthController::loginUser');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/auth/error', 'AuthController::error');

