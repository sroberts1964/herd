<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/seasons', function () {
    return view('seasons');
});

Route::get('/competitions', function () {
    return view('competitions');
});
