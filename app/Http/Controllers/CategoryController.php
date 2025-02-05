<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id) {

        $category = Category::with('posts') -> findOrFail($id);

        return view('category', compact('category'));
    }
}
