<?php

namespace App;

use App\Traits\HasMeta;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Ticket extends Model implements Auditable, HasMedia
{
    use \OwenIt\Auditing\Auditable, SoftDeletes, InteractsWithMedia, HasMeta;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function assignedTo()
    {
        return $this->belongsTo('App\User','assigned_to','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function conversations()
    {
        return $this->hasMany('App\TicketConversation');
    }

    public function latestReply() {
        return $this->hasOne('App\TicketConversation')->latest();
    }

    public static function categories()
    {
        return Category::select('id','name', 'parent_id','thumbnail')->where('has_ticket', 1)->orderBy('id', 'desc')->get();
    } 

    public function attachments()
    {
        $mediaItems = $this->getMedia('attachments');
        $attachments = [];
        foreach($mediaItems  as $file){
            $attachments[] = array('url' => asset($file->getUrl()), 'file_type'=> $file->mime_type);
        }
        return $attachments;
    }

    public static function assignTo(){
        $agent = User::select(DB::raw("users.id, count(tickets.id) as 'tickets_count'"))
            ->role(['agent','non-restricted_agent'])
            ->where('users.id', '!=', Auth::user()->id)
            ->leftJoin('tickets', 'users.id', 'tickets.assigned_to')
            ->groupBy('id')
            ->orderBy('tickets_count', 'ASC')
            ->first();
        return $agent ? $agent->id : false;
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('own_ticket', function($query) {
            $query->where('tickets.user_id', Auth::user()->id)->orWhere('tickets.assigned_to', Auth::user()->id);
        });
    }
}
