<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::get('/mahasiswa/{nrp}', function (string $nrp) {
            return view('mahasiswa', ['nrp' => $nrp]);
        })->name('mahasiswa')
          ->where('nrp', '[0-9]{10}');

        Route::get('/agent/{tema?}', function (string $tema = 'General Assistant Agent') {
            return view('agent', ['tema' => $tema]);
        })->name('agent');

        Route::get('/hitung-ipk/{ip1}/{ip2}', function (float $ip1, float $ip2) {
            $rata = ($ip1 + $ip2) / 2;
            return view('kalkulator', compact('ip1', 'ip2', 'rata'));
        })->name('kalkulator')
          ->where(['ip1' => '[0-9.]+', 'ip2' => '[0-9.]+']);
    });