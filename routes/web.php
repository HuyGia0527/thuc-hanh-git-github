<?php
use App\Http\Controllers\MovieController;
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
Route::get('/doanhthu', [App\Http\Controllers\ControllerThao::class, 'doanhThu']);

Route::get('/minhnguyet', [App\Http\Controllers\ControllerNguyet::class, 'minhNguyet']);
Route::get('/theloai', [App\Http\Controllers\ControllerKhoa::class, 'theLoai']);

<<<<<<< HEAD

Route::get('/movies-long', [App\Http\Controllers\MovieController::class, 'getLongMovies']);
Route::get('/top-10-phim', [App\Http\Controllers\Top10Controller::class, 'top10bophim']);
=======
Route::get('/movieCanada', [App\Http\Controllers\ControllerNguyet::class, 'movieCanada']);
>>>>>>> origin/minhnguyet
