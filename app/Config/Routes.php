<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/home', 'Home::home');


//User
$routes->get('/dashboard', 'User\User::dashboard');
$routes->get('/data', 'User\User::data');

//Admin
$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/home', 'Admin\Admin::home');
