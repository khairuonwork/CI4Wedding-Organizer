<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

//ROUTES UNTUK GET
$routes->get('/wedding', 'Wedding::homepage');
$routes->get('/wedding/capture', 'Wedding::capture');
//break
// $routes->get('/wedding/guests', 'Wedding::list_tamu');
$routes->get('/wedding/datatamu', 'Wedding::list_fetching');

$routes->get('/wedding/rundown', 'Wedding::rundown');
$routes->get('/wedding/about', 'Wedding::about');
// $routes->get('/wedding/roles', 'Wedding::roles');
$routes->get('/wedding/warning', 'Wedding::warning');

//Panitia
$routes->get('/wedding/roles', 'Wedding::roles'); // Displays the roles page with the list of panitia
$routes->post('/wedding/addPanitia', 'Wedding::addPanitia'); // Handles the addition of new panitia
$routes->post('/wedding/updatePanitia/(:num)', 'Wedding::updatePanitia/$1'); // Updates a panitia entry based on its ID
$routes->get('/wedding/deletePanitia/(:num)', 'Wedding::deletePanitia/$1'); // Deletes a panitia entry based on its ID


 
//ROUTES UNTUK POST
$routes->post('/wedding', 'Wedding::submit_tamu');
