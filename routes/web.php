<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome'); // Landing Page
})->name('home');

Route::get('/usa', function () {
    return view('usa');
})->name('usa');

Route::get('/canada', function () {
    return view('canada');
})->name('canada');


Route::get('/', function () {
    return view('welcome');
});
