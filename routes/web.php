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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/family','FamilyController@index')->name('family.index'); // 家族情報一覧を表示する
// Route::port('family/register','FamilyController@register'); // 家族情報を登録する
// Route::port('family/{id}/edit', 'FamilyController@edit'); // 家族情報を修正する
