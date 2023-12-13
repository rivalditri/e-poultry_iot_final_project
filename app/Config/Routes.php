<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Gas', 'Backend::getAllGas');
$routes->get('/Temp', 'Backend::getAllTemp');
$routes->get('/Hum', 'Backend::getAllHum');
$routes->get('/setTemp', 'Home::Temp');
$routes->post('/config', 'Backend::setConfig');
$routes->get('/config', 'Backend::getConfig');
$routes->get('/sent/(:segment)/(:segment)/(:segment)', 'Backend::insert/$1/$2/$3');
