<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use App\Article;

use App\Category;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

// Create role
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;

class IndexController extends Controller
{
    public function index()
    {
        $articlesByCategory = Category::select('id','name')
            ->where('is_featured', 1)
            ->get()->map(function( $articles ){
                $articles['articles_count'] = $articles->categoryArticleCount();
                $articles['articles'] = $articles->recentArticles();
                return $articles;
            });
        
        // Load Featured articles
        $featuredArticles = Article::where('featured','=',1)->where('published','=','1')->select(['id','title']);
        $featuredArticles = $featuredArticles->take(9)->get();

        $tplData = [
            'articles_by_category' => $articlesByCategory,
            'featured_articles' => $featuredArticles
        ];
        return view('frontend.index', $tplData);
    }
}
