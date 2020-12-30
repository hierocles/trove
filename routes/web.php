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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('nation', ['uses' => 'NationsController@showRequirement']);
    $router->get('nation/{name}', ['uses' => 'NationsController@showFullNation']);
    $router->get('nation/{name}/{attr}', ['uses' => 'NationsController@showSingleAttribute']);
    $router->post('nation', ['uses' => 'NationsController@create']);
    $router->put('nation/{name}', ['uses' => 'NationsController@update']);
    $router->delete('nation/{name}', ['uses' => 'NationsController@delete']);

    $router->get('region', ['uses' => 'RegionsController@showRequirement']);
    $router->get('region/{name}', ['uses' => 'RegionsController@showFullRegion']);
    $router->get('regions/{name}/{attr}', ['uses' => 'RegionsController@showSingleAttribute']);
    $router->post('region', ['uses' => 'RegionsController@create']);
    $router->put('region/{name}', ['uses' => 'RegionsController@update']);
    $router->delete('region/{name}', ['uses' => 'RegionsController@delete']);
});
