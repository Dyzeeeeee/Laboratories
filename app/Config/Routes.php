<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/students', 'StudController::CRUD');


$routes->post('/save', 'StudController::save');
$routes->get('/delete/(:any)', 'StudController::delete/$1');
$routes->get('/update/(:any)', 'StudController::update/$1');

$routes->post('/add', 'StudController::add');
$routes->get('/deleteSection/(:any)', 'StudController::deleteSection/$1');
$routes->get('/updateSection/(:any)', 'StudController::updateSection/$1');


