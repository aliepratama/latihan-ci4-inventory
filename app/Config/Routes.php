<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', 'Accounts::login');
$routes->add('/register', 'Accounts::register');
$routes->get('/account_lists', 'Accounts::lists');
$routes->get('/dashboard', 'Accounts::dashboard');
$routes->get('/logout', 'Accounts::logout');
