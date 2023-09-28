<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/collection', function () {
    return view('collection');
})->name('collection');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');
