<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/giaHuy', [App\Http\Controllers\ControllerHuy::class, 'giaHuy']);
Route::get('/dangkhoa', [App\Http\Controllers\ControllerKhoa::class, 'dangKhoa']);