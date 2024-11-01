<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

//ROUTES
$routes->get('/wedding', 'Wedding::homepage');
$routes->get('/wedding/capture', 'Wedding::capture');
$routes->get('/wedding/datatamu', 'Wedding::list_fetching');
$routes->get('/wedding/about', 'Wedding::about');
$routes->post('/wedding', 'Wedding::submit_tamu');

//Rundown
$routes->get('/wedding/rundown', 'Wedding::rundown'); // Displays the rundown page with the list of rundown
$routes->post('/wedding/addRundown', 'Wedding::addRundown'); // ADD RUNDOWN Berdasarkan ID 
$routes->post('/wedding/updateRundown/(:num)', 'Wedding::updateRundown/$1'); // UPDATE RUNDOWN Berdasarkan ID
$routes->get('/wedding/deleteRundown/(:num)', 'Wedding::deleteRundown/$1'); // DELETE RUNDOWN Berdasarkan ID

//Panitia
$routes->get('/wedding/roles', 'Wedding::roles'); // Displays the roles page with the list of panitia
$routes->post('/wedding/addPanitia', 'Wedding::addPanitia'); // Handles the addition of new panitia
$routes->post('/wedding/updatePanitia/(:num)', 'Wedding::updatePanitia/$1'); // Updates a panitia entry based on its ID
$routes->get('/wedding/deletePanitia/(:num)', 'Wedding::deletePanitia/$1'); // Deletes a panitia entry based on its ID

//Warning
$routes->get('/wedding/warning', 'Wedding::warning');
$routes->post('/wedding/addWarning', 'Wedding::addWarning');
$routes->post('/wedding/updateWarning/(:num)', 'Wedding::updateWarning/$1');
$routes->get('/wedding/deleteWarning/(:num)', 'Wedding::deleteWarning/$1');

//Pesan
$routes->get('/wedding/pesan', 'Wedding::pesan');
// $routes->get('/wedding/warning', 'Wedding::warning');
// $routes->get('/wedding/roles', 'Wedding::roles');
// $routes->get('/wedding/rundown', 'Wedding::rundown');
// $routes->get('/wedding/guests', 'Wedding::list_tamu');

$routes->post('/wedding/addcapture', 'Wedding::savecaptureimage');