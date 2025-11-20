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

Route::get('/trip-media', function () {
    return view('website.trip-media');
});
Route::get('/trip-detail', function () {
    return view('website.trip-detail');
});
Route::get('/pricing', function () {
    return view('website.pricing');
});
Route::get('/Installments', function () {
    return view('website.Installments');
});
Route::get('/add-Installments', function () {
    return view('website.add-Installments');
});
Route::get('/Additional-Activities', function () {
    return view('website.Additional-Activities');
});
Route::get('/Add-Additional-Activities', function () {
    return view('website.Add-Additional-Activities');
});
Route::get('/Trip-Plan', function () {
    return view('website.Trip-Plan');
});
Route::get('/Add-Trip-Plan', function () {
    return view('website.Add-Trip-Plan');
});
Route::get('/Itinerary', function () {
    return view('website.Itinerary');
});
Route::get('/Add-Itinerary', function () {
    return view('website.Add-Itinerary');
});
Route::get('/Calculator', function () {
    return view('website.Calculator');
});
Route::get('/Total-Analysis', function () {
    return view('website.Total-Analysis');
});
Route::get('/Total-Analysis', function () {
    return view('website.Total-Analysis');
});
Route::get('/General-info', function () {
    return view('website.General-info');
});
Route::get('/Expenses', function () {
    return view('website.Expenses');
});
Route::get('/Add-Expenses', function () {
    return view('website.Add-Expenses');
});
Route::get('/Pricing-Options', function () {
    return view('website.Pricing-Options');
});
Route::get('/Profit-Goals', function () {
    return view('website.Profit-Goals');
});
Route::get('/Student-Breakdown', function () {
    return view('website.Student-Breakdown');
});


 
