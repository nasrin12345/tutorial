<?php

// syntax: 'ControllerName@MethodName'

Route::get('/','PagesController@index')->name('pages.index');
Route::get('/about','PagesController@about')->name('pages.about');
Route::get('/todos/create','TodosController@create')->name('todos.create');
Route::post('/todos','TodosController@store')->name('todos.store'); // making a post request
Route::get('/todos/{id}','TodosController@show')->name('todos.show');
Route::get('/todos/{id}/edit','TodosController@edit')->name('todos.edit');
Route::put('/todos/{id}','TodosController@update')->name('todos.update'); // making a put request
Route::get('/todos','TodosController@index')->name('todos.index');
