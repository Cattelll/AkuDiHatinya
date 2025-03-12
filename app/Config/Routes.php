<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*
|--------------------------------------------------------------------------
| Routes untuk Login
|--------------------------------------------------------------------------
*/
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');

/*
|--------------------------------------------------------------------------
| Routes untuk Dashboard
|--------------------------------------------------------------------------
*/
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/dashboard/admin', 'Dashboard::admin', ['filter' => 'auth']);
$routes->get('/dashboard/puskesmas', 'Dashboard::puskesmas', ['filter' => 'auth']);

/*
|--------------------------------------------------------------------------
| Routes untuk Laporan
|--------------------------------------------------------------------------
*/
$routes->get('/Pemantauan/HT', 'Laporan::pHT', ['filter' => 'auth']);
$routes->get('/Pemantauan/DM', 'Laporan::pDM', ['filter' => 'auth']);
