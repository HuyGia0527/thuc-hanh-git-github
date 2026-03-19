<?php

use Illuminate\Support\Facades\Route;

Route::get('/baongoc', function () {
    return 'Trần Bảo Ngọc';
});
Route::get('/chian', function () {
    return "Huỳnh Văn Chí An";
});

Route::get('/giaHuy', [App\Http\Controllers\ControllerHuy::class, 'giaHuy']);
Route::get('/dangkhoa', [App\Http\Controllers\ControllerKhoa::class, 'dangKhoa']);

Route::get('/thuthao', [App\Http\Controllers\ControllerThao::class, 'thuThao']);
Route::get('/minhnguyet', [App\Http\Controllers\ControllerNguyet::class, 'minhNguyet']);
Route::get('/theloai', [App\Http\Controllers\ControllerKhoa::class, 'theLoai']);


Route::get('/movies-long', [App\Http\Controllers\MovieController::class, 'getLongMovies']);
