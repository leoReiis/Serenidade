<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/falecido', function () {
    return view('falecido');
});

Route::get('/jazigo', function () {
    return view('jazigo');
});

Route::get('/financeiro', function () {
    return view('financeiro');
});


Route::get('/consessao', function () {
    return view('consessao');
});

Route::get('/agenda', function () {
    return view('agenda');
});
