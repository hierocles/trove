<?php

$router->get('/', function () {
    return view('documentation');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/', function () {
        return view('documentation');
    });
    $router->get('lastupdate/nation', ['uses' => 'NationsController@lastUpdate']);
    $router->get('lastupdate/region', ['uses' => 'RegionsController@lastUpdate']);
    $router->get('nation', ['uses' => 'NationsController@index']);
    $router->get('nation/{name}', ['uses' => 'NationsController@getFullNationRecord']);
    $router->get('nation/{name}/{attribute}', ['uses' => 'NationsController@getSingleAttribute']);
    $router->get('nation/{name}/multi/{attributes}', ['uses' => 'NationsController@getMultipleAttributes']);
    $router->get('endotart/{name}', ['uses' => 'NationsController@getEndotartList']);
    $router->get('region', ['uses' => 'RegionsController@index']);
    $router->get('region/{name}', ['uses' => 'RegionsController@getFullRegionRecord']);
    $router->get('region/{name}/{attribute}', ['uses' => 'RegionsController@getSingleAttribute']);
    $router->get('region/{name}/multi/{attributes}', ['uses' => 'RegionsController@getMultipleAttributes']);
});
