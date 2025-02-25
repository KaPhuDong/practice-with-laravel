<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\CovidController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signUpForm');
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

// Covid
Route::get('/covid', [CovidController::class, 'getData']);
