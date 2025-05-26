<?php

use App\Http\Controllers\Localization\LocalizationController;
use App\Http\Controllers\SessionController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/localization/{locale}', LocalizationController::class)->name('localization');

Route::view('/', 'home')->name('home')
    ->middleware('auth');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout')->middleware('auth');
