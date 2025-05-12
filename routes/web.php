<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $injection = "hello world";

    return view('home', ["hello_world" => $injection]);
});

Route::get('/artisan', function () {
    return view('artisan');
});