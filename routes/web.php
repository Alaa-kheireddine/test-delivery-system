<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alaa', function(){
    return "test by alaa updated !!!!!!";
});