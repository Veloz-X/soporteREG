<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Articles search
        $q = $request->get('q');

        $articles = Article::select('id', 'title', 'content', 'created_at', 'rate_helpful', 'rate_total')
            ->where('id', (int)$q)
            ->orWhere('title','LIKE','%'.$q.'%')
            ->orWhere('content','LIKE','%'.$q.'%');


        $articles = ArticleResource::collection($articles->paginate(30));


        if (count ( $articles ) > 0)
            return view ( 'frontend.search' )->withArticles ( $articles )->withQuery ( $q );
 
        return view ( 'frontend.search' )->withQuery ( $q );
    }
}
