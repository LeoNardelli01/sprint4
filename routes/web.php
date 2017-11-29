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

/*ruta por defecto de laravel
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/faq', 'PagesController@faq');
Route::get('/login', 'PagesController@login');
Route::get('/registro', 'PagesController@registro');
Route::get('/productos', 'PagesController@productos');
Route::get('/user', 'PagesController@user');
Route::get('/admin', 'PagesController@admin');
