<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [

        'api_key' => 'AIzaSyD4Z983mSVSi00ZgRv0CPzz9N6GXZqdat0',
        'auth_domain' => 'laravelfirebase-b4cea.firebaseapp.com',
        'database_url' => 'https://laravelfirebase-b4cea-default-rtdb.firebaseio.com',
        'project_id' => 'laravelfirebase-b4cea',
        'storage_bucket' => 'laravelfirebase-b4cea.appspot.com',
        'messaging_sender_id' =>  '557740374279',
        'app_id' => '1:557740374279:web:9db7d7841789f8ad1c6da2',
        'measurement_id' => 'G-ZD7M263CPN',
    ],
];
