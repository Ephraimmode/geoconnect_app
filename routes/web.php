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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');

// public pages start
Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/cart', function() {
    return view('cart');
})->name('cart');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/courses', function() {
    return view('courses');
})->name('courses');

// public pages ends

// i need to add the above public pages to home controller and re-route them acordingly
