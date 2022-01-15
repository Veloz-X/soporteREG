<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;

class CategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::select('id', 'name', 'parent_id')->findOrFail($id);
        return view('frontend.category', ['category' => $category, 'articles' => $category->categoryArticles()]);
    }
}
