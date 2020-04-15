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
    return $router->app->version();
});

// $router->group(['prefix' => 'api'], function() use ($router){
    
//     $router->get('authors', ['uses' => 'AuthorController@showAllAuthors']);
//     $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);
//     $router->post('authors', ['uses' => 'AuthorController@create']);
//     $router->put('authors/{id}', ['uses' => 'AuthorController@update', 'middleware' => 'jwt_auth']);
//     $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

// });

// $router->group(['prefix' => 'api/users'], function() use ($router){
//     $router->post('login', ['uses' => 'UserController@login']);
//     $router->post('register', ['uses' => 'UserController@register']);
// });

$router->group(['prefix' => 'api'], function() use ($router){
    
    $router->get('/', ['uses' => 'TestController@showAllAuthors']);
    $router->get('/{id}', ['uses' => 'TestController@showOneAuthor']);
    $router->post('/', ['uses' => 'TestController@create']);
    $router->put('/{id}', ['uses' => 'TestController@update']);
    $router->delete('/{id}', ['uses' => 'TestController@delete']);

});