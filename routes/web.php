<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Client;
use App\Http\Controllers\ClientController;
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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->group(["prefix" => "clients"], function () use ($router){
    $router->get('/', 'ClientController@list');
    $router->get('/{client}', 'ClientController@find');
    $router->post('/{client}', 'ClientController@store');
    $router->delete('/{client}', 'ClientController@destroy');
    //we could use this one to update
    // $router->put('/{client}', 'ClientController@update');
});

