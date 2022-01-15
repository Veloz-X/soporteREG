<?php

namespace App\Http\Controllers\Frontend;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;

class TagController extends Controller
{
    public function index($id)
    {
        // Load articles by given tag id
        $tag = Tag::select('id', 'name')->findOrFail($id);
        $tag->setRelation('articles', $tag->articles()->orderBy('id', 'desc')->paginate(30));
     
        return view('frontend.tag', ['tag' => $tag->name, 'articles' => ArticleResource::collection($tag->articles)]);
    }
}