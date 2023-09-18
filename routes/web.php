<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('homePage');

Route::get('/list', function () {
    return view('listing');
})->name('list');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
