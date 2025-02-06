<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']) -> name('home');

Route::get('/about', function() {
    return view('about');
}) -> name('about');

Route::get('/contact', function() {
    return view('contact');
}) -> name('contact');;

// Route pour affichage de chaque post
Route::get('post/{postId}', [App\Http\Controllers\PostController::class, 'show']) -> name('post.show');;
