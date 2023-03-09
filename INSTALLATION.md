## [Laravel FCM Push Notification Installation Guide](https://packagist.org/packages/monish-khatri/fcm-push-notification)
<p>
    <a href="https://packagist.org/packages/monish-khatri/fcm-push-notification">
        <img src="https://img.shields.io/packagist/dt/monish-khatri/fcm-push-notification" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/monish-khatri/fcm-push-notification">
        <img src="https://img.shields.io/packagist/v/monish-khatri/fcm-push-notification" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/monish-khatri/fcm-push-notification">
        <img src="https://img.shields.io/packagist/l/monish-khatri/fcm-push-notification" alt="License">
    </a>
    <a href="https://packagist.org/packages/monish-khatri/fcm-push-notification">
        <img src="https://img.shields.io/packagist/stars/monish-khatri/fcm-push-notification" alt="License">
    </a>
</p>

### Follow the below steps to install fcm push notification package
- Install the package using
  - `composer require monish-khatri/fcm-push-notification`
- You can publish the package config file
  - `php artisan vendor:publish --provider="MonishKhatri\FCM\FCMServiceProvider" --tag="config"`
- Add `FCM_TOKEN` in `.env` file
- You can send Notification Simply with below code:
    -
    ```
    use MonishKhatri\FCM\Service\FCMService;
    FCMService::send(
        <DEVICE_FCM_TOKEN>,
        [
            'title' => 'your title',
            'body' => 'your body',
            'image' => 'image_url',
        ]
    );
    ```