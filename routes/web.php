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

Route::get('/', 'PageController@index');

Route::get('/login', 'Auth\Auth0IndexController@login' )->name( 'login' );

Route::get('/profile', 'PageController@profile')->middleware('auth');

Route::get('/register', 'PageController@register');

Route::post('/registerUser', 'Auth\RegisterController@create');

Route::get('/example', function () {
    return view('tools.templateCall');
});


Route::get('/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');


Route::get( 'http://localhost/', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );



Route::get('/home', 'HomeController@index')->name('home');
