<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    //return view('welcome');
});

//Auth::routes();
Route::get('/login', [
	'as'	=> 'login',
	'uses'	=> 'Auth\LoginController@showLoginForm'
]);

Route::post('/login', [
	'as'	=> 'login',
	'uses'	=> 'Auth\LoginController@login'
]);

Route::get('/logout', [
	'as'	=> 'logout',
	'uses'	=> 'Auth\LoginController@logout'
]);

Route::post('/password/email', [
	'as'	=> 'password.email',
	'uses'	=> 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);

Route::get('/password/reset', [
	'as'	=> 'password.request',
	'uses'	=> 'Auth\ForgotPasswordController@showLinkRequestForm'
]);

Route::post('/password/reset', [
	'as'	=> '',
	'uses'	=> 'Auth\ResetPasswordController@reset'
]);

Route::get('/password/reset/{token}', [
	'as'	=> 'password.reset',
	'uses'	=> 'Auth\ResetPasswordController@showResetForm'
]);


/****************************************************/
Route::get('/home', [
	'as'	=> 'home',
	'uses'	=> 'HomeController@index']);

Route::post('/home/acceso', [
	'as'	=> 'home.acceso',
	'uses'	=> 'HomeController@acceso',	
]);

