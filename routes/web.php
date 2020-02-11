<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.'], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('projects', 'ProjectController');
    Route::resource('Tasks', 'TaskController');
});
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
   Route::resource('users', 'UserController');

});
Route::get('/', function () {
    return view('welcome');
});
