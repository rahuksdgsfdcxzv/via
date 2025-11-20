<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});
Route::get('/forgot', function () {
    return view('forgot');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/onboarding', function () {
    return view('onboarding');
});

Route::get('/emailverify', function () {
    return view('emailverify');
});

Route::get('/tripview', function () {
    return view('tripview');
});

Route::get('/tripdetail', function () {
    return view('tripdetail');
});

Route::get('/bookingdetail', function () {
    return view('bookingdetail');
});