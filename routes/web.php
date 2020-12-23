<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/article','ArticleController@showList');

//記事一覧
Route::get('/test','TestController@showList')->name('test');
// form request 
Route::post('/add', 'TestController@add')->name('add');
//詳細:{{$test ->id}}をcontrollerに渡す
Route::get('test/{id}','TestController@showDetail',)->name('detail');
// comment保存
Route::post('test/{id)', 'DetailController@commentAdd')->name('commentAdd');
// comment削除
Route::post('test/delete/{id}', 'DetailController@Delete')->name('delete');