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

$router->get('/restaurants', 'RestaurantsController@index');
$router->get('/restaurants/{id}', 'RestaurantsController@getDetails');
$router->get('/clientes', 'ClientesController@index');
$router->get('/clientes/{id}', 'ClientesController@getDetails');
$router->get('/ementas', 'EmentasController@index');
$router->get('/ementas/{id}', 'EmentasController@getDetails');

//$router->post('/restaurant', 'RestaurantsController@post');
//$router->put('/restaurant', 'RestaurantsController@put');