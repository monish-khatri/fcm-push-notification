<?php

namespace MonishKhatri\FCM\Service;

use Illuminate\Support\Facades\Http;

class FCMService
{
    private $body;
    private $color;
    private $data = null;
    private $deviceTokens = [];
    private $icon;
    private $image;
    private $sound = 'default';
    private $title;
    private $notificationType;
    private $vibration = 300;
    private $vibrate = false;

    /**
     * Send Notifications
     */
    public function send(): void
    {
        Http::acceptJson()
            ->withToken(config('fcm.token'))
            ->post(
                'https://fcm.googleapis.com/fcm/send',
                [
                    'registration_ids' => $this->deviceTokens,
                    'notification' => [
                        'title' => $this->title,
                        'body' => $this->body,
                        'sound' => $this->sound,
                        'largeIcon' => $this->icon,
                        'image' => $this->image,
                        'color' => $this->color,
                        'vibrate' => $this->vibrate,
                        'vibration' => $this->vibration,
                        'notificationType' => $this->notificationType,
                    ],
                    'data' => $this->data,
                ]
            );
    }

    /**
     * Set notification body
     */
    public function setBody(string $body): object
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Set notification color
     */
    public function setColor(string $color): object
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Set data
     */
    public function setData(string $key, mixed $value): object
    {
        $this->data[$key] = $value;
        return $this;
    }

    /**
     * Set Device Tokens
     */
    public function setDeviceTokens(array $deviceTokens): object
    {
        $this->deviceTokens = $deviceTokens;
        return $this;
    }

    /**
     * Set notification icon
     */
    public function setIcon(string $icon): object
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Set notification image
     */
    public function setImage(string $image): object
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Set notification type
     */
    public function setNotificationType(int $type): object
    {
        $this->notificationType = $type;
        return $this;
    }

    /**
     * Set notification sound
     */
    public function setSound(string $sound): object
    {
        $this->sound = $sound;
        return $this;
    }

    /**
     * Set notification title
     */
    public function setTitle(string $title): object
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Set notification vibrate
     */
    public function setVibrate(bool $bool = false): object
    {
        $this->vibrate = $bool;
        return $this;
    }

    /**
     * Set notification vibration
     */
    public function setVibration(int $vibration = 300): object
    {
        $this->vibration = $vibration;
        return $this;
    }
}
