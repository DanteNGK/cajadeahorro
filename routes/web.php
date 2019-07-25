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

$router->get('user/register', 'RegisterController@index');

$router->post('user/register', 'RegisterController@store')->name('user.register');

$router->get('login', 'Auth\LoginController@showLoginForm')->name('login');

$router->post('login', 'Auth\LoginController@login');

$router->post('register','Auth\RegisterController@register')->name('register');

$router->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

$router->get('home', 'HomeController@index')->name('home');

$router->post('logout', 'Auth\LoginController@logout')->name('logout');

$router->get('/', 'WelcomeController@index');

$router->get('profile', 'ProfileController@index')->name('profile');

$router->put('user/update', 'ProfileController@update')->name('user.update');
