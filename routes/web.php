<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/home/', function () {
    return view('main');
});

Route::get('/about/', function () {
    return view('about');
});

Route::get('/english-dub/', function () {
    return view('englishdub');
});