<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() {
        // return view('home');
        $noscategories = Category::all();

        // $posts = Post::orderBy('id', 'desc') -> get();
        // $posts = Post::latest() -> get();
        // $posts = Post::where('category_id', request('category_id')) -> latest() -> get();
        $posts = Post::when(request('category_id'), function($query) {
            $query -> where('category_id', request('category_id'));
        })->latest()->get();

        // return view('home', ['noscategories' => $categories, 'posts' => $posts]);
        return view('home', compact('noscategories', 'posts'));
    }
}
