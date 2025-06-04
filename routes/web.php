<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil/farizqi', [App\Http\Controllers\ProfilFarizqi::class, 'show'])
    ->name('profil.farizqi');
