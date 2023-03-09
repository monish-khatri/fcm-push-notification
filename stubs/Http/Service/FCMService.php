<?php

namespace MonishKhatri\FCM\Service;

use Illuminate\Support\Facades\Http;

class FCMService
{
    public static function send($tokens, $notification)
    {
        Http::acceptJson()
            ->withToken(config('fcm.token'))
            ->post(
                'https://fcm.googleapis.com/fcm/send',
            [
                'registration_ids' => $tokens,
                'notification' => $notification,
            ]
        );
    }
}
