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

$router->get('/', function () use ($router) {
//    return $router->app->version();
    return 'Hallo Welt';
});

$router->get('/status', function () {
    return 'Hallo Welt2';
});

//$router->get('/amount', [
//    'as' => 'index',
//    'uses' => 'infoController@amount'
//])

$router->get('/amount', [
    'as'   => 'index',
    'uses' => 'InfoController@amount'
]);
