<?php

use Illuminate\Support\Facades\Route;

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

    Route::resource('/artikels', \App\Http\Controllers\ArtikelController::class);
    Route::get('/artikels/review/{id}', '\App\Http\Controllers\ArtikelController@review')->name('artikels.review');
    Route::get('/artikels/review/2/{id}', '\App\Http\Controllers\ArtikelController@review2')->name('artikels.review2');
    Route::get('/artikels/review/3/{id}', '\App\Http\Controllers\ArtikelController@review3')->name('artikels.review3');
    Route::post('/convert-to-pdf', '\App\Http\Controllers\ArtikelController@convertToPDF')->name('artikels.convert');
    Route::post('/convert-to-pdf/2/', '\App\Http\Controllers\ArtikelController@convertToPDF2')->name('artikels.convert2');
    Route::get('/kirimartikel/{id}', '\App\Http\Controllers\ArtikelController@kirimartikel')->name('artikels.kirimartikel');

    Route::resource('/beritas', \App\Http\Controllers\BeritaController::class);

    // Tim Review
    Route::get('tim/review', '\App\Http\Controllers\ReviewController@timreview')->name('timreview');
    Route::get('tim/review/artikel', '\App\Http\Controllers\ReviewController@timreviewArtikel')->name('timreview.artikels');
    Route::get('tim/review/artikel/{id}', '\App\Http\Controllers\ReviewController@timreviewArtikelReview')->name('timreview.artikels.review');
    Route::put('tim/simpanreview/artikel/{id}', '\App\Http\Controllers\ReviewController@timreviewArtikelStore')->name('timreview.artikels.store');

});