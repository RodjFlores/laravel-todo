<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index' );
//php artisan make:model Task -m
Route::post('/tasks', 'TasksController@store');
Route::get('/tasks','TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
//php artisan make:controller TasksController -r  <-makes resourcefull controller
Route::patch('/tasks/{task}/edit', 'TasksController@edit');
Route::delete('/tasks/{task}/delete', 'TasksController@destroy');
Route::get('/tasks/{task}', 'TasksController@show');
/*
*/