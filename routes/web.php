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

ob_start('ob_gzhandler');
Route::resource('/', 'FE\HomepageController');
Route::resource('/mission', 'FE\MissionController');
Route::resource('/news', 'FE\NewsController');
Route::resource('/help', 'FE\HelpController');
Route::resource('/contact', 'FE\ContactController');
