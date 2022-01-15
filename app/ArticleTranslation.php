<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    protected $fillable = ['article_id','language'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }

    public function getSlugAttribute(): string
    {
        return str_slug($this->title);
    }

    public function getUrlAttribute(): string
    {
        return action('Frontend\ArticlesController@index', [$this->article_id, $this->slug]);
    }

}
