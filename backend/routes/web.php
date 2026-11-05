<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/hello', fn () => ['message' => 'Hello from Laravel in Docker']);