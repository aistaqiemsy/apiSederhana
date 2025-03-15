<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input/baru', function () {
    return view('input');
});

Route::get('/pengguna/login', [PostController::class, 'login']);

Route::get('/post/edit/{id}', [PostController::class, 'tampilEdit']);

Route::get('/post/perbarui/{id}', [PostController::class, 'perbaruiData']);