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

Route::get('/courses', 'App\Http\Controllers\CourseController@index')->name('courses');

// public pages ends

// i need to add the above public pages to home controller and re-route them acordingly

//pages on admin page

Route::get('/admin/courses/index', 'App\Http\Controllers\CourseController@courses')->name('admin.courses.index');
Route::get('/admin/courses/create', 'App\Http\Controllers\CourseController@create')->name('admin.courses.create');
Route::post('/admin/courses/store', 'App\Http\Controllers\CourseController@store')->name('admin.courses.store');
