<?php

use Illuminate\Support\Facades\Route;

Route::get('/chian', function () {
    return "Huỳnh Văn Chí An";
});

Route::get('/giaHuy', [App\Http\Controllers\ControllerHuy::class, 'giaHuy']);
Route::get('/dangkhoa', [App\Http\Controllers\ControllerKhoa::class, 'dangKhoa']);
Route::get('/minhnguyet', [App\Http\Controllers\ControllerNguyet::class, 'minhNguyet']);