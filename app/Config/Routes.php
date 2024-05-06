<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/signup', 'Page::signup');
$routes->get('/login', 'Page::login');
$routes->get('/home', 'Page::home');
$routes->get('/explore', 'Page::explore');
