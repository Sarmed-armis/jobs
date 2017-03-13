<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
| this is route for auth users
|
*/
Route::group(['prefix'=>'/interface','middleware'=>'notAllowed'],function ()
{
  Route::get('/login','Admin\Auth\LoginController@showLoginForm');
  Route::post('/login','Admin\Auth\LoginController@login');
  Route::post('/logout','Admin\Auth\LoginController@logout');
  Route::get('/deny','Admin\Auth\LoginController@deny');
});

