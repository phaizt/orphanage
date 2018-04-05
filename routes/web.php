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


Route::get('/wp-login', 'Auth\LoginController@showLoginForm')->name('wp-login');
/*route for frontend*/
Route::get('/', 'Frontend\FeMissionController@index')->name('homepage');
//Route::get('/mission', 'Frontend\FeMissionController@index')->name('mission');

/*end route frontend*/

/*route for admini site*/
Route::group(['prefix' => 'wp-admin','middleware' => ['auth','web']], function () {
	Route::get('/', 'Backend\BeDashboardController@index');
});

