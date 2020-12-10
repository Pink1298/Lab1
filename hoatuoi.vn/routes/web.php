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

# Đăng ký Route
Route::get('/hello', 'ExampleController@xinchao');
Route::get('/testlayout', 'TestController@testlayout');
Route::get('/admin/loai/index', 'Backend\LoaiController@index') -> name('admin.loai.index');
Route::get('/admin/loai/create', 'Backend\LoaiController@create') -> name('admin.loai.create');
Route::post('/admin/loai/create', 'Backend\LoaiController@store') -> name('admin.loai.store');
Route::get('/admin/loai/edit/{id}', 'Backend\LoaiController@edit') -> name('admin.loai.edit');
Route::put('/admin/loai/edit/{id}', 'Backend\LoaiController@update') -> name('admin.loai.update');

