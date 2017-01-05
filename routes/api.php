<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Post;

Route::get('/users/{id}', 'UserController@show');
Route::get('/users', 'UserController@index');
Route::post('/users', 'Auth\RegisterController@create');
Route::put('/users/{id}', 'UserController@edit');
Route::delete('/users/{id}', 'UserController@destroy');


Route::resource('/posts', 'PostController', [
	'except' => [ 'create', 'edit', 'destroy']
]);

Route::resource('/tags', 'TagController', [
	'only' => ['index', 'show', 'store']
]);

Route::resource('/files', 'FileController', [
	'only' => ['index', 'show', 'store']
]);