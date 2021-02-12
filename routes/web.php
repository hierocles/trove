<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('nation', ['uses' => 'NationsController@index']);
    $router->get('nation/{name}', ['uses' => 'NationsController@getFullNationRecord']);
    $router->get('nation/{name}/{attribute}', ['uses' => 'NationsController@getSingleAttribute']);
    $router->get('nation/endotart/{name}', ['uses' => 'NationsController@getEndotartList']);
    $router->get('region', ['uses' => 'RegionsController@index']);
    $router->get('region/{name}', ['uses' => 'RegionsController@getFullRegionRecord']);
    $router->get('regions/{name}/{attribute}', ['uses' => 'RegionsController@getSingleAttribute']);
});
