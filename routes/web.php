<?php

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('tasks', 'TaskController@index');
Route::get('tasks/create', 'TaskController@create');
Route::post('tasks', 'TaskController@store');
Route::get('tasks/{t}', 'TaskController@show')->where('t', '[0-9]+');
Route::get('tasks/{t}/edit', 'TaskController@edit')->where('t', '[0-9]+');
Route::put('tasks/{t}', 'TaskController@update')->where('t', '[0-9]+');
Route::delete('tasks/{t}', 'TaskController@destroy')->where('t', '[0-9]+');
*/
Route::resource('tasks', 'TaskController');
Route::post('ajax/{method}', 'AjaxController@main');
