<?php

// syntax: 'ControllerName@MethodName'

/*Route::get('/','PagesController@index')->name('pages.index');
Route::get('/about','PagesController@about')->name('pages.about');
Route::get('/todos/create','TodosController@create')->name('todos.create');
Route::post('/todos','TodosController@store')->name('todos.store'); // making a post request
Route::get('/todos/{id}','TodosController@show')->name('todos.show');
Route::get('/todos/{id}/edit','TodosController@edit')->name('todos.edit');
/*Route::put('/todos/{id}','TodosController@update')->name('todos.update'); // making a put request


Route::get('/','PagesController@index')->name('pages.index');

Route::get('/about','PagesController@about')->name('pages.about');



/**

 * Todo Route(s)

 */

Route::resource('/todos','TodosController');



/**

 * Auth Route(s)

 */

Auth::routes(['verify' => true]);



/**

 * Dashboard Route

 */

Route::get('/home', 'HomeController@index')->name('home');



/**

 * User Profile Route(s)

 */

Route::get('/profile','ProfileController@index')->name('profile.index');

Route::put('/profile','ProfileController@update')->name('profile.update');

