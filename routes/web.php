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

Route::get('/', 'homeController@loadtim');
Route::get('/', 'homeController@portofolioweb');
Route::get('/', 'homeController@portofolioapp');
Route::get('/', 'homeController@portofoliodesk');
Route::get('/portfolio/{id}', ['uses' =>'homeController@portofoliodetail']);

