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
  Route::get('/login','Auth\LoginController@showLoginForm')->name('login')->middleware('notAllowed');
  Route::post('/login','Auth\LoginController@login');
  Route::post('/logout','Auth\LoginController@logout');
});

