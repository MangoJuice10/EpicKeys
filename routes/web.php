<?php

use App\Http\Controllers\SessionController;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [SessionController::class, 'create']);
