<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\SessionController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

Route::get('/localization/{locale}', LocalizationController::class)->name('localization');

Route::view('/', 'home');

Route::get('/login', Login::class);
Route::get('/register', Register::class);
