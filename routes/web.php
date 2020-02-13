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

Route::get('/', 'pagecontroller@showIndex');
Route::post('/blog', 'ArticleController@store');
Route::get('/blog/create', 'ArticleController@create');
Route::get('/blog/{slug}/edit', 'ArticleController@edit');
Route::get('/blog/{slug}/remove', 'ArticleController@destroy');
Route::put('/blog/{slug}', 'ArticleController@update');
Route::get('/blog/{slug}', 'ArticleController@show');
Route::get('/blog', 'ArticleController@showAll');
Route::get('/dashboard/monitor', 'pagecontroller@showMonitor');
Route::get('/dashboard/monitor/edit', 'monitorController@edit');
Route::get('/dashboard/{page}', 'pagecontroller@show');
Route::get('/{page}', 'pagecontroller@show');
