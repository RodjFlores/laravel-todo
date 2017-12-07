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


//php artisan make:model Task -m
Route::post('/tasks', 'TasksController@store');
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::delete('/task/{task}/delete', 'TasksController@delete');
/*Route::get('/tasks',function(){
    $tasks = App\Task::all();

    return view("tasks/index", compact('tasks'));
});*/
Route::get('/tasks/create', 'TasksController@create');
//php artisan make:controller TasksController -r  <-makes resourcefull controller
Route::get('/home','TasksController@index');

Route::patch('/tasks/{task}/edit', 'TasksController@edit');
Route::patch('/task/{task}/edit', 'TasksController@update');

Auth::routes();


/*
*/