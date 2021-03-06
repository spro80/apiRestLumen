<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});


$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('car','CarController@index');
    $app->delete('car/{id}','CarController@deleteCar');
    $app->post('car','CarController@createCar');
    $app->put('car/{id}','CarController@updateCar');
});


require('routes/routesUsuario.php');
require('routes/routesCategoria.php');
require('routes/routesSubcategoria.php');
