<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/users', 'UserController@index'); // get all users records
$router->post('/users', 'UserController@add'); // create new user record
$router->get('/users/{id}', 'UserController@show'); // get user by id
$router->put('/users/{id}', 'UserController@update'); // update user record
$router->patch('/users/{id}', 'UserController@update'); // update user record
$router->delete('/users/{id}', 'UserController@delete'); // delete record

// userjob routes
$router->get('/usersjob', 'UserJobController@index');
$router->get('/userjob/{id}', 'UserJobController@show');

$router->get('/', function () use ($router) {
    return $router->app->version();
});


