<?php

use App\Models\Genre;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'genres' => Genre::limit(10)->get(),
    ]);
});
