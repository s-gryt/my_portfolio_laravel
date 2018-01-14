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
    return view("home");
});

//Route::get('/admin/projects', function () {
//    return view("portfoliolist");
//});

Route::get('/admin/profile', function () {
    return view("profile");
});
Route::get('admin/search', 'SearchController@index');
Route::resource('admin/projects', 'ProjectsController');

