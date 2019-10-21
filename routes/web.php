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
Route::get('login','LoginController@getLogin')->middleware('LogedOut');
Route::post('login','LoginController@postLogin');
Route::get('/nguoidung','AdminController@indexNguoidung');

Route::group(['prefix'=>'xuongkhop','middleware'=>['LogedIn','AuthOrigin']],function(){
    Route::get('/','AdminController@index');
    Route::post('/add','AdminController@store');
    Route::post('/show','AdminController@show');
    Route::post('/store','AdminController@store');
    Route::post('/delete','AdminController@destroy');
    Route::post('/update','AdminController@update');
    Route::post('/import','AdminController@import');

    Route::get('/quangcao','QuangCaoController@index');
    Route::post('/quangcao/add','QuangCaoController@add');
    Route::post('/quangcao/delete','QuangCaoController@delete');
    Route::post('/quangcao/truncate','QuangCaoController@truncate');



});
