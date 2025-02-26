<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('page.trangchu');
});

Route::get('onlyRoute', function () {
    echo 'Hello PNV';
});

Route::get('routeWithController', [MyController::class, 'hello']);

Route::get('routeWithController', [MyController::class, 'helloWithView']);

Route::get('test', [MyController::class, 'index']);

//form controller

Route::get('showForm', [SumController::class, 'showForm']);

Route::post('sum', [SumController::class, 'sum']);

//
Route::get('index', [PostController::class, 'index']);

Route::get('create', [PostController::class, 'create']);

//Route group
Route::prefix('test')->group(function () {
    Route::get('route1', function () {
        echo "Test route 1";
    });

    Route::get('route2', function () {
        echo "Test route 2";
    });
});

// singUp
Route::get('signUpForm', [SignUpController::class, 'index']);
Route::post('signUpForm', [SignUpController::class, 'displayInfor']);

//
Route::get('signUpForm', [SignUpController::class, 'displayInfor']);

//
Route::get('index', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('loai-san-pham', [PageController::class, 'getLoaiSp'])->name('loaisanpham');
Route::get('chi-tiet-san-pham', [PageController::class, 'getChitiet'])->name('chitietsanpham');
Route::get('lien-he', [PageController::class, 'getLienhe'])->name('lienhe');
Route::get('gioi-thieu', [PageController::class, 'getAbout'])->name('about');



