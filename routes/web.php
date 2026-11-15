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

Route::get('/engdub/', function () {
    return view('engdub');
});

Route::get('/animation/', function () {
    return view('animation');
});

Route::get('/music/', function () {
    return view('music');
});