<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route → Home controller → index method
$routes->get('/', 'Home::index');
