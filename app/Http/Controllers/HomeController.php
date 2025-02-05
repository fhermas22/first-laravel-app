<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        // return view('home');
        $categories = Category::all();

        // $posts = Post::orderBy('id', 'desc') -> get();
        $posts = Post::latest() -> get();

        return view('home', ['noscategories' => $categories, 'posts' => $posts]);
    }
}
