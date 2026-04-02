<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/login', function () {
    return view('frontend.pages.login');
});
Route::get('/admin', function () {
    return view('backend.pages.dashboard');
});
