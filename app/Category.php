<?php

namespace App;

use App\Article;
use App\ArticleTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['parent_id', 'name'];
    
    public function parent()
    {
        return $this->belongsTo('App\Category')->select('id','name');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function countTickets($all = false){
        $c = Ticket::where('category_id', $this->id);
        if($all) $c->withoutGlobalScope('own_ticket');
        return $c->count();
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    public function removeChildren()
    {
        return Category::where('parent_id', $this->id)->update(array('parent_id' => null));
    }

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function categoryArticles($locale = null){
        if( ! $locale ) $locale = config('app.locale');
        $articles = ArticleTranslation::select('id', 'article_id', 'title', 'content', 'updated_at')
        ->whereHas('article', function($query) use ($locale) {
            $query->select('id')->where('category_id', $this->id);
        })->where('language', $locale)->orderBy('id', 'desc')->paginate(30);
        return $articles;
    }

    public function recentArticles($locale = null)
    {
        if( ! $locale ) $locale = config('app.locale');

        $article = ArticleTranslation::select('id', 'article_id', 'title')->whereHas('article', function($query) use ($locale) {
            $query->select('id', 'title')->where('category_id', $this->id);
        })->where('language', $locale)->take(5)->get();

        return $article;
    }

    public function categoryArticleCount($locale = null)
    {
        if( ! $locale ) $locale = config('app.locale');

        $article = Article::whereHas('articleTranslations', function($query) use ($locale) {
            $query->where('language', $locale);
        })->where('category_id', $this->id)->count();

        return $article;
    }

    public function getSlugAttribute(): string
    {
        return str_slug($this->name);
    }

    public function getUrlAttribute(): string
    {
        return action('Frontend\CategoryController@index', [$this->id, $this->slug]);
    }


}
