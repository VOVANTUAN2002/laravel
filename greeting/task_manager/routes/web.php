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

// Tạo 1 nhóm route với tiền tố customer

Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        //hiển thị danh sách khách hàng
        echo 'hiển thị danh sách khách hàng';
        return view('modules.customer.index');
    });
    Route::get('create', function () {
        //hiển thị foem tạo khách hàng
    });
    Route::post('store', function () {
        //xử lý lưu dữ liêu tạo khách hàng thông qua phương thức post
    });
    Route::get('{id}/show', function () {
        //hiển thị thông tin chi tiết kahchs hành có mã định danh id
    });
    Route::get('{id}/edit', function () {
        // hiển thị form chỉnh sửa thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });
    Route::delete('{id}', function () {
        // xóa thông tin dữ liệu khách hàng
    });
});
