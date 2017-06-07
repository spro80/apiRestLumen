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

$app->group(['prefix' => 'api/sistema','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('categoria','CategoriaController@getAllCategoria');
    $app->delete('categoria/{id}','CategoriaController@deleteCategoria');
    $app->post('categoria','CategoriaController@createCategoria');
    $app->put('categoria/{id}','CategoriaController@updateCategoria');

    $app->get('categoria/getByParameter/{param1}','CategoriaController@getByParameter');
    $app->get('categoria/getByTwoParameters/param1/{param1}/param2/{param2}','CategoriaController@getByTwoParameters');
    $app->get('categoria/getCountCategoria','CategoriaController@getCountCategoria');
    $app->get('categoria/getMaxIdCategoria','CategoriaController@getMaxIdCategoria');
    $app->get('categoria/getMaxIdInsertarCategoria','CategoriaController@getMaxIdInsertarCategoria');    
    
    $app->get('categoria/subcategorias','CategoriaController@subcategorias');
    $app->get('categoria/prueba','CategoriaController@prueba');

    //URL TEST POSTMAN
    //GET     http://localhost:8083/api/sistema/categoria                          //EJEMPLO: ALL GET        - OK
    //DELETE  http://localhost:8083/api/sistema/categoria/5                        //EJEMPLO: DELETE         - OK
    //POST    http://localhost:8083/api/sistema/categoria                          //EJEMPLO: POST (CREATE)
    //PUT     http://localhost:8083/api/sistema/categoria/4                        //EJEMPLO: PUT (UPDATE)   - OK

    //http://localhost:8083/api/sistema/categoria/getByParameter/1                            //EJEMPLO: GET with 1 parameter-OK
    //http://localhost:8083/api/sistema/categoria/getByTwoParameters/param1/ocho/param2/1     //EJEMPLO: GET with 2 parameter - OK
    //GET     http://localhost:8083/api/sistema/categoria/getCountCategoria                   //EJEMPLO: GET COUNT    - OK
    //GET     http://localhost:8083/api/sistema/categoria/getMaxIdCategoria                   //EJEMPLO: GET MAX ID   - OK
    //GET     http://localhost:8083/api/sistema/categoria/getMaxIdInsertarCategoria           //EJEMPLO: GET MAX ID SIGUIENTE-OK
    
});
