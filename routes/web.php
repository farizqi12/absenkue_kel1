<?php

use App\Http\Controllers\Profil;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;

// routes/web.php
Route::get('/', [Login::class, 'showLoginForm'])->name('login');
Route::post('/login', [Login::class, 'login']);
Route::post('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/profil/farizqi', [App\Http\Controllers\Profil::class, 'showFarizqi'])
    ->name('profil.farizqi');


Route::middleware(['auth', 'only.kepala.sekolah'])->group(function () {
    Route::get('/dashboard', [Login::class, 'dashboard'])->middleware(middleware: 'auth');

});

Route::middleware(['auth', 'only.guru'])->group(function () {
    Route::get('/dashboard-guru', [Login::class, 'dashboardGuru'])->middleware('auth');

});