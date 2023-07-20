<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
})->group(function () {
    Route::get('/pustaka', function () {
        return view('pustaka');
    })->name('pustaka');
})->group(function () {
    Route::get('/tulis', function () {
        return view('tulis');
    })->name('tulis');
})->group(function () {
    Route::get('/buku', function () {
        return view('buku');
    })->name('buku');
})->group(function () {
    Route::get('/jurnal', function () {
        return view('jurnal');
    })->name('jurnal');
})->group(function () {
    Route::get('/api', function () {
        return view('api');
    })->name('api');
})->group(function () {
    Route::resource('/tulisblogs', \App\Http\Controllers\Api\TulisblogController::class);
})
;
