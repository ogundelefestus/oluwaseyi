<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
    'client_id' => env('6a7ad6b90c6eeca83222'),         // Your GitHub Client ID
    'client_secret' => env('d74ea5042f8b1c574d5e41465cdf23d95550588a'), // Your GitHub Client Secret
    'redirect' => 'http://127.0.0.1:8000/callback/github',
      ],

    'google' => [
    'client_id' => env('356665125449-gob863j0kscqp5f2l9b4093gkg9lktq4.apps.googleusercontent.com'),         // Your GitHub Client ID
    'client_secret' => env('cqwp1J56ToewccKVM_HenjV-'), // Your GitHub Client Secret
    'redirect' => 'http://127.0.0.1:8000/callback/google',
],
    
    
   

];
