<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
| this is route for auth users
|
*/

Auth::loginUsingId(28);

Route::group(['prefix' => '/interface', 'middleware' => 'AllowedIP'], function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm');
    Route::post('/login', 'Admin\Auth\LoginController@login');
    Route::post('/logout', 'Admin\Auth\LoginController@logout');
    Route::get('/user', 'Admin\Members\UserController@index');
    Route::post('/user', 'Admin\Members\UserController@index');
    Route::post('/user/add', 'Admin\Members\UserController@add');
    Route::post('/user/block', 'Admin\Members\UserController@block');
    Route::post('/user/delete', 'Admin\Members\UserController@delete');
    Route::post('/user/change', 'Admin\Members\UserController@changeGroup');
    Route::post('group/add', 'Admin\Members\GroupController@add');
    Route::get('group', 'Admin\Members\GroupController@index');
    Route::post('group/edit', 'Admin\Members\GroupController@edit');
    Route::post('group/store', 'Admin\Members\GroupController@storeEdit');
    Route::post('group/show', 'Admin\Members\GroupController@show');
    Route::post('group/getOldPermission', 'Admin\Members\GroupController@getOldPermission');
    Route::post('group/change', 'Admin\Members\GroupController@changePermission');
    Route::get('jobs','Admin\Jobs\JobsController@index');
    Route::get('jobs/show','Admin\Jobs\JobsController@show');
    Route::post('jobs/add','Admin\Jobs\JobsController@add');
    Route::post('jobs/details','Admin\Jobs\JobsController@details');



});
Route::get('deny', 'Admin\Auth\LoginController@deny');


