<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name','id'];
    
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

    public function getSlugAttribute(): string
    {
        return str_slug($this->name);
    }

    public function getUrlAttribute(): string
    {
        return action('Frontend\TagController@index', [$this->id, $this->slug]);
    }
}
