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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Auth::routes(['verify' => true]); 

//for user registration on dashboard

Route::get('/users_data', 'UserController@index')->name('users');


Route::resources([
	'user_data'=>'UserController'
]);



Route::get('/users', 'UserController@create');
Route::get('graduates', 'GraduateController@create');

//Route::get('/register', 'RegistrationController@create');
// Route::post('users', 'UserController@store');
// Route::get('/login', 'SessionsController@create');
// Route::post('/login', 'SessionsController@store');
// Route::get('/logout', 'SessionsController@destroy');

Route::resources([
	'graduates'=>'GraduateController'
]);



Route::get('/about', function () {
	return view('about');

});
