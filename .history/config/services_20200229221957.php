<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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
        'key' => env('AKIAQZTX2SVABV3IKWVY'),
        'secret' => env('BFtw7MOhjiEkSstEedjsjBFaY+UPBxCY8ef14L9jUG9i'),
        'region' => env('ap-south-1', 'ap-south-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'sendgrid' => [
        'api_key' => env('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'),
    ],

    'paytm-wallet' => [
        'env' => 'production', // values : (local | production)
        'merchant_id' => 'XKlvBb05798173116343',
        'merchant_key' => 'hQjyCMBs!@__jPw_',
        'merchant_website' => 'WEBSTAGING',
        'channel' => 'WEB',
        'industry_type' => 'Retail',
    ],

];
