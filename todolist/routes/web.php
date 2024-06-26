<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/hello', function () {
    return 'hello';
});

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name) {
    return 'hello ' . $name . '!';
});
