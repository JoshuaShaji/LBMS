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
Route::get('/users/{id?}', function ($id='no data passed') {
    return view('users',["user"=>$id]);
});
Route::view('/reg','reg');
Route::view('/log','login');
Route::post('/submit','Registration@save');
Route::post('/login','Log@logg');
Route::get('db','Users@index');
Route::view('/student','student');
Route::view('/staff','staff');
Route::post('/logout','Log@lout');
Route::view('/lib','lib');
Route::view('/addb','addbook');
Route::post('/addbk','AddBook@add');