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

Auth::routes();

Route::get('/poster', 'PosterController@index');
Route::get('/poster/campaign/covid', 'PosterController@getPoster');
Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('reports', 'ReportController');
Route::get('/reports',function() {
   return view('reports.index');
});
Route::post('/reports/show','ReportController@show');
Route::get('/reports/show',function() {
   return redirect()->back();
});
