<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public $currentLanguage;
    
    public function __construct()
    {
        $this->currentLanguage = app()->getLocale();
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function articleTranslations()
    {
        return $this->hasMany('App\ArticleTranslation');
    }

    public function tags(Type $var = null)
    {
        return $this->belongsToMany('App\Tag');
    }

    public function relatedPostsByTag()
    {
        return Article::whereHas('tags', function ($query) {
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->where('id', '<>', $this->id)->get();
    }

    public function getSlugAttribute(): string
    {
        return str_slug($this->title);
    }

    public function getUrlAttribute(): string
    {
        return action('Frontend\ArticlesController@index', [$this->id, $this->slug]);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('published', function($query) {
            $query->where('published', 1);
        });
    }

    public function articleByLanguage()
    {
        return ArticleTranslation::select('title','content')
            ->where('article_id', $this->id)
            ->where('language', $this->currentLanguage)
            ->first();
    }

    public function transTitle()
    {
        $articleContent = $this->articleByLanguage();
        
        if( $articleContent ){ 
            return $articleContent->title;
        }

        return $this->title;
    }

    public function transContent()
    {
        $articleContent = $this->articleByLanguage();
        
        if( $articleContent ){ 
            return $articleContent->content;
        }

        return $this->content;
    }

}
