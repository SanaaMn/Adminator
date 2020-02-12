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
    Route::get('projects/{project}/tasks', 'ProjectController@task')->name('projects.task');
    Route::resource('tasks', 'TaskController');
    Route::resource('users', 'UserController')->middleware(['auth', 'Role:10']);

});
Route::get('/', function () {
    return view('welcome');
});
