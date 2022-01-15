<?php

namespace App\Channels;

use App\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Notifications\Notification;

class FCMChannel
{
    public function send($notifiable, Notification $notification)
    {
        // get notification message
        $message = $notification->toFCM($notification);

        // make sure FCM key is set or report error
        try{
            $serverKey = defaultSetting('FCM_server_key', false);
            if( !$serverKey ) throw new \Exception('Failed to send push notification, FCM server key not available');
        } catch(\Exception $e) {
            report($e);
            return false;
        }

        // Get user devices key
        $tokens = (array)$notifiable->pushNotificationTokens->pluck('token');

        if ( count($tokens) == 0) return false;

        $response = Http::withHeaders([
            'Authorization' => 'key='.$serverKey,
            'Content-Type'  => 'application/json'
        ])->post('https://fcm.googleapis.com/fcm/send', [
            "registration_ids" => $tokens,
            "notification" => [
                "title" => isset($message['title']) ? $message['title'] : null,
                "body" => isset($message['body']) ? $message['body'] : null,
            ]
        ]);
    
        try{
            $response->throw();
        } catch(\Exception $e){
            report($e); return false;
        }

        return true;
    }
}