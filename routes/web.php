<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
/**FrontEnd Routing  */
Route::get('auth/google', 'Auth\LoginController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/','FrontEnd\HomeController@index');
Route::post('/states','FrontEnd\HomeController@states');
Route::post('/cities','FrontEnd\HomeController@city');
Route::post('/registration','FrontEnd\HomeController@registration');
/**FrontEnd Routing  End*/

/**AdminEnd Routing */
Route::get('/home', 'Users\UsersController@index');
Route::get('/login', 'Users\UsersController@login');
Route::get('/signup', 'Users\UsersController@signup');
/**AdminEnd Routing End */
