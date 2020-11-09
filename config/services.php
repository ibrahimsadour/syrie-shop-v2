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
    'google' => [
        'client_id' => '928571224000-up51omoik6ngp6lrefnrlrpsahlav9b8.apps.googleusercontent.com',
        'client_secret' => 'blTRwmepYn_VgtFbKb5I3z50',
        'redirect' => 'http://localhost:8000/user/login-attempt/callback/google',
    ],

    'facebook' => [
        'client_id' => '282452596418616',
        'client_secret' => '70a721a8a069a93fd813074c36d82fa4',
        'redirect' => 'http://localhost:8000/user/login-attempt/callback/facebook',
    ],
    'linkedin' => [
        'client_id' => '77gvql509ro51i',
        'client_secret' => 'Qnw1gUR0j3YsvsQu',
        'redirect' => 'https://sadour.nl/auth/login/callback/linkedin',
    ],

];
