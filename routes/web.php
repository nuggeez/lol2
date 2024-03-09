<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/users',['uses' => 'UserController@getUsers']);
$router->get('/usersindex', 'UserController@index'); // get all users records
$router->post('/users', 'UserController@add');
$router->patch('/users/{id}', 'UserController@update');
$router->delete('/users/{id}', 'UserController@delete');

$router->get('/', function () use ($router) {
    return $router->app->version();
});


