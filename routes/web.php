<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/laravel', function () {
    return view('welcome');
});

// Route::view('/', 'welcome');

Route::get('/second', function() {
    return view('second');
});

// Route::get('/home', [HomeController::class, 'home']->name('home'));
// $url = route('home');
// return redirect()->route('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) -> name('home');

Route::get('/about', function() {
    return view('about');
}) -> name('about');

Route::get('/contact', function() {
    return view('contact');
}) -> name('contact');;
