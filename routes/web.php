<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
| this is route for auth users
|
*/
Route::group(['prefix'=>'/interface','middleware'=>'AllowedIP'],function ()
{
  Route::get('/login','Admin\Auth\LoginController@showLoginForm');
  Route::post('/login','Admin\Auth\LoginController@login');
  Route::post('/logout','Admin\Auth\LoginController@logout');
    Route::get('/user','Admin\User@index');

});
Route::get('deny','Admin\Auth\LoginController@deny');

