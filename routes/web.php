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
    return "hello";
});
$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'User ' . $postId . '' . $commentId;
});
//$router->get('user[/{name}]',function ($name = null){
//    return $name;
//});
//$router->get('user',['uses'=>'UserController@index']);
$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', ['uses' => 'UserController@index']);
    $router->post('/', ['uses' => 'UserController@store', 'middleware' => 'checkAge']);
    $router->get('/{id}', ['uses' => 'UserController@getUserById']);
    $router->put('/{id}', 'UserController@update');
    $router->delete('/{id}', 'UserController@delete');
});
