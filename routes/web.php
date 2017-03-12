<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
| this is route for auth users
|
*/
Route::group(['prefix'=>'/interface'],function ()
{
  Route::get('/login','Auth\LoginController@showLoginForm');
  Route::post('/login','Auth\LoginController@login');
  Route::post('/logout','Auth\LoginController@logout');
});

