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
    'line' => [
	    'client_id' => env('LINE_KEY'),
	    'client_secret' => env('LINE_SECRET'),
	    'redirect' => env('LINE_REDIRECT_URI'),
    ],
    'facebook' => [
        'client_id' => '169657463796144',
        'client_secret' => 'cd19086a2d10359608b9d7d9a50a12e8',
        'redirect' => 'http://127.0.0.1:8000/qr/',
    ],
    'twitter' => [
        'client_id' => env('TW_KEY'),
        'client_secret' => env('TW_SECRET'),
        'redirect' => env('TW_REDIRECT_URI'),
    ],
    'instagram' => [
        'client_id' => env('INSTAGRAM_KEY'),
        'client_secret' => env('INSTAGRAM_SECRET'),
        'redirect' => env('INSTAGRAM_REDIRECT_URI'),
    ],
];
