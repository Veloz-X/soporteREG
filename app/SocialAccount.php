<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = ['access_token'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
