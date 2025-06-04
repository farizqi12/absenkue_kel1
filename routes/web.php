<?php

use App\Http\Controllers\Profil;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil/farizqi', [App\Http\Controllers\Profil::class, 'showFarizqi'])
    ->name('profil.farizqi');


Route::middleware(['auth', 'only.kepala.sekolah'])->group(function () {
});

Route::middleware(['auth', 'only.guru'])->group(function () {
});