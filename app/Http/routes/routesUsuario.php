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
    $app->get('usuario','UsuarioController@getAllUsuario');
    $app->delete('usuario/{id_usuario}','UsuarioController@deleteUsuario');
    $app->post('usuario','UsuarioController@createUsuario');
    $app->put('usuario/{id}','UsuarioController@updateUsuario');
    
    $app->get('usuario/getById/{param1}','UsuarioController@getById');
    $app->get('usuario/loginUsuario/param1/{param1}/param2/{param2}','UsuarioController@loginUsuario');
    
    //URL TEST POSTMAN
    //GET     http://localhost:8083/api/sistema/usuario                                        //EJEMPLO: ALL GET        - OK
    //DELETE  http://localhost:8083/api/sistema/usuario/05997002                               //EJEMPLO: DELETE         - OK
    //POST    http://localhost:8083/api/sistema/usuario                                        //EJEMPLO: POST (CREATE)  - OK
    //PUT     http://localhost:8083/api/sistema/usuario/14515778                               //EJEMPLO: PUT (UPDATE)   - OK
    
    //http://localhost:8083/api/sistema/usuario/getById/137452758                              //EJEMPLO: GET with 1 parameter - OK
    //http://localhost:8083/api/sistema/usuario/loginUsuario/param1/137452758/param2/123456    //EJEMPLO: GET with 2 parameter - OK
});
