<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

//ROUTES UNTUK GET
$routes->get('/wedding', 'Wedding::homepage');
$routes->get('/wedding/capture', 'Wedding::capture');
$routes->get('/wedding/list_tamu', 'Wedding::list_tamu');
$routes->get('/wedding/rundown', 'Wedding::rundown');
$routes->get('/wedding/about', 'Wedding::about');

//ROUTES UNTUK POST
$routes->post('/wedding', 'Wedding::submit_tamu');