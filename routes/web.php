<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/* PRODUCT */
Route::view('/product', 'product');
Route::view('/product/iwb', 'product.iwb');
Route::view('/product/digital-signage', 'product.digital-signage');
Route::view('/product/kiosk', 'product.kiosk');

/* OTHER PAGES */
Route::view('/service', 'service');
Route::view('/blog', 'blog');
Route::view('/about', 'about');
Route::view('/partner', 'partner');
Route::view('/contact', 'contact');
Route::view('/demo', 'demo');
