<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main_page');
});

Route::get('/sub', function () {
    return view('sub_menu');
});

Route::get('/konsultasi-perpajakan', function () {
    return view('Whatsapp');
})->name('sub.konsultasi');

Route::get('/pendaftaran-NPWP', function () {
    return view('sub_pendaftaranNPWP');
})->name('sub.pendaftaranNPWP');

Route::get('/kode-biling', function () {
    return view('sub_kodeBiling');
})->name('sub.kodeBiling');
