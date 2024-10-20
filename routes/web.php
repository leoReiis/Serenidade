<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sepultado', function () {
    return view('sepultado');
});

Route::get('/jazigo', function () {
    return view('jazigo');
});
