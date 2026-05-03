<?php

$router->get('/', ['DashboardController','index']);
$router->get('/events',['EventController','index']);

$router->get('/login',['AuthController','login']);
$router->post('/login',['AuthController','loginPost']);

$router->get('/register',['AuthController','register']);
$router->post('/register',['AuthController','registerPost']);

$router->post('/api/register',['ApiController','register']);