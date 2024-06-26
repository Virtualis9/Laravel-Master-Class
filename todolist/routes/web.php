<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/hello', function () {
    return 'hello';
});

Route::get('/xxx', function () {
    return redirect('/greet');
});

Route::get('/greet/{name}', function ($name) {
    return 'hello ' . $name . '!';
});

Route::fallback(function () {
    return 'this worked';
});
