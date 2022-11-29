<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tails', function () {
    return view('tails');
});
Route::get('/trip', function () {
    return view('trip');
});
Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/book1', function () {
    return view('book');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/react', function () {
    return view('layouts.app');
});
Route::get('/profile11', function () {
    return view('tailor');
});
Route::get('/home', function () {
    return view('auth.login');
});




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
