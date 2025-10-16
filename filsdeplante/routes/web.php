<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/vegetaux', function () {
    return view('vegetaux');
});

Route::get('/potager', function () {
    return view('potager');
});

Route::get('/guides', function () {
    return view('guides');
});

Route::get('/contact', function () {
    return view('contact');
});
