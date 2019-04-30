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



Route::get('/', 'DashboardController@dashboard');

Route::resource('projects', 'ProjectsController');
Route::resource('tasks', 'TasksController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');


Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
//
Route::resource('clients', 'ClientsController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
