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
Route::get('/ticketList',function(){
    return view('ticketList');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ticket',function(){
    return view('ticket');
});
