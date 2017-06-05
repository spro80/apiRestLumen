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
    $app->get('subcategoria','SubcategoriaController@getAllSubcategoria');
    $app->delete('subcategoria/{id}','SubcategoriaController@deleteSubcategoria');
    $app->post('subcategoria','SubcategoriaController@createSubcategoria');
    $app->put('subcategoria/{id}','SubcategoriaController@updateSubcategoria');
    $app->get('subcategoria/getMaxIdInsertarSubcategoria','SubcategoriaController@getMaxIdInsertarSubcategoria');
    
    
    
    
    $app->get('subcategoria/categoria','SubcategoriaController@getAllSubcategoriaWithCategoria');    
    $app->get('subcategoria/categoria','SubcategoriaController@categoria');
    
    
    //GET     http://localhost:8083/api/sistema/subcategoria                          //EJEMPLO: ALL GET        - OK
    //DELETE  http://localhost:8083/api/sistema/subcategoria/5                        //EJEMPLO: DELETE         - OK
    //POST    http://localhost:8083/api/sistema/subcategoria                          //EJEMPLO: POST (CREATE)  - OK
    //PUT     http://localhost:8083/api/sistema/subcategoria/4                        //EJEMPLO: PUT (UPDATE)   - OK
    
    //GET     http://localhost:8083/api/sistema/subcategoria/getMaxIdInsertarSubcategoria  //EJEMPLO: GET MAX ID SIGUIENTE-OK
    
    
});
