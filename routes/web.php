<?php

use Illuminate\Support\Facades\Route;

// Route for Home
Route::get('/', function () {
    return view('app'); 
});

// Route for About
Route::get('/about', function () {
    return view('app'); 
});
