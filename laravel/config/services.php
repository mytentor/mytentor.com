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

    'facebook' => [
        'client_id' => '1989525331268927',
        'client_secret' => '0321e92fe00f597e490f41b57d5b6c2e',
        'redirect' => 'http://localhost:80/callback',
    ],


    'twitter' => [
        'client_id' => 'f9Edy2e0TAaKKtckjavJGWM1Q',
        'client_secret' => 'dDTuhuWSkeERCQLntGzC2EEywOzLfkuoq1wIyUasmQpcMmsEsB',
        'redirect' => '',
    ],

];
