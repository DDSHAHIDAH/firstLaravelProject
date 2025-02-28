<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login'); // Make sure you have a login.blade.php inside resources/views/auth/
})->name('login');
