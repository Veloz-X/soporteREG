<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class TicketConversation extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = "ticket_conversation";

    public function ticket()
    {
        return $this->belongsTo('App\Ticket');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function attachments()
    {
        $mediaItems = $this->getMedia('ticket_conversation_attachments');
        $attachments = [];
        foreach($mediaItems  as $file){
            $attachments[] = array('url' => asset($file->getUrl()), 'file_type'=> $file->mime_type);
        }
        return $attachments;
    }
}
