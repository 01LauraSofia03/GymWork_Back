<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/test', function () use ($router) {
    return json_encode([
        'data'=>'test'
    ]);
});
$router->get('registro','UsuarioController@index');
$router->get('registro/{id}','UsuarioController@show');
$router->post('registro','UsuarioController@store');