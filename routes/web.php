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

    Route::get('/pustaka', function () {
        return view('pustaka');
    })->name('pustaka');

    Route::get('/tulis', function () {
        return view('tulis');
    })->name('tulis');

    Route::get('/buku', function () {
        return view('buku');
    })->name('buku');

    Route::get('/jurnal', function () {
        return view('jurnal');
    })->name('jurnal');

    Route::get('/api', function () {
        return view('api');
    })->name('api');

    Route::resource('/blog/n/tulisblogs', \App\Http\Controllers\Api\TulisblogController::class);

    Route::post('/blog/{id}/like', '\App\Http\Controllers\Api\TulisblogController@like')->name('blog.like');

    Route::delete('/blog/{id}/like', '\App\Http\Controllers\Api\TulisblogController@like')->name('blog.unlike');

    Route::resource('/jurnals', \App\Http\Controllers\JurnalController::class);
    Route::get('/jurnals/review/{id}', '\App\Http\Controllers\JurnalController@review')->name('jurnals.review');
    Route::get('/jurnals/tim/review', '\App\Http\Controllers\JurnalController@timreview')->name('jurnals.timreview');
    Route::get('/jurnals/belum/review', '\App\Http\Controllers\JurnalController@belumreview')->name('jurnals.belumreview');
    Route::get('/jurnals/belum/review/{id}', '\App\Http\Controllers\JurnalController@belumreview2')->name('jurnals.belumreview2');
    Route::put('jurnals/belum/hasilreview/{id}', '\App\Http\Controllers\JurnalController@storebelumreview2')->name('jurnals.storebelumreview2');
    Route::get('jurnals/lihatdata/{id}', '\App\Http\Controllers\JurnalController@lihatdata')->name('jurnals.lihatdata');

});