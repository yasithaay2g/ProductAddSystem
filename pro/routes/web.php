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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>["auth"]],function () {

    Route::get('/user_dash', function () {
        return view('user.inc.bodyuser');
    });


    Route::get('/productshow', 'ProductController@index');
    Route::get('/product', 'ProductController@create');
    Route::post('/productcreate', 'ProductController@store');
    Route::get('/productedit/{id}','ProductController@edit');
    Route::put('/productupdate/{id}','ProductController@update');
    Route::delete('/productdelete/{id}','ProductController@delete');




});

Route::get('/', 'ProductController@p_home');


