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
Route::delete('/admin/loai/delete/{id}', 'Backend\LoaiController@destroy') -> name('admin.loai.destroy');
Route::get('/admin/loai/print', 'Backend\LoaiController@print')->name('admin.loai.print');
Route::get('/admin/loai/excel', 'Backend\LoaiController@excel')->name('admin.loai.excel');


Route::get('/admin/sanpham/print', 'Backend\SanPhamController@print')->name('admin.sanpham.print');
Route::get('/admin/sanpham/excel', 'Backend\SanPhamController@excel')->name('admin.sanpham.excel');
Route::get('/admin/sanpham/pdf', 'Backend\SanPhamController@pdf')->name('admin.sanpham.pdf');
Route::resource('/admin/sanpham', 'Backend\SanPhamController', ['as' => 'admin']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');
Route::get('/testbcrypt', function () {
    return bcrypt('123456');
});
