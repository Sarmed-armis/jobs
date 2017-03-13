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
  Route::get('/login','Admin\LoginController@showLoginForm');
  Route::post('/login','Auth\LoginController@login');
  Route::post('/logout','Auth\LoginController@logout');
  Route::get('deny','Auth\LoginController@deny');
});

