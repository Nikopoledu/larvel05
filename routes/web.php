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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'tech'], function () {
  Route::get('/login', 'TechAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'TechAuth\LoginController@login');
  Route::post('/logout', 'TechAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'TechAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'TechAuth\RegisterController@register');

  Route::post('/password/email', 'TechAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'TechAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'TechAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'TechAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'company'], function () {
  Route::get('/login', 'CompanyAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CompanyAuth\LoginController@login');
  Route::post('/logout', 'CompanyAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CompanyAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CompanyAuth\RegisterController@register');

  Route::post('/password/email', 'CompanyAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CompanyAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CompanyAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CompanyAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'entity'], function () {
  Route::get('/login', 'EntityAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EntityAuth\LoginController@login');
  Route::post('/logout', 'EntityAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EntityAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EntityAuth\RegisterController@register');

  Route::post('/password/email', 'EntityAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EntityAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EntityAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EntityAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'ettuser'], function () {
  Route::get('/login', 'EttuserAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EttuserAuth\LoginController@login');
  Route::post('/logout', 'EttuserAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EttuserAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EttuserAuth\RegisterController@register');

  Route::post('/password/email', 'EttuserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EttuserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EttuserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EttuserAuth\ResetPasswordController@showResetForm');
});
