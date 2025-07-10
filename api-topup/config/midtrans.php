<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Midtrans Server Key
    |--------------------------------------------------------------------------
    */
    'server_key' => env('MIDTRANS_SERVER_KEY', 'Mid-server-z6ywaF2fyRjlDy0VOvbnKGhC'),

    /*
    |--------------------------------------------------------------------------
    | Midtrans Client Key
    |--------------------------------------------------------------------------
    */
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'Mid-client-SQ1A7kvTdmdoXzgB'),

    /*
    |--------------------------------------------------------------------------
    | Midtrans Environment
    |--------------------------------------------------------------------------
    | false = sandbox
    | true = production
    */
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),

    /*
    |--------------------------------------------------------------------------
    | Midtrans Sanitization
    |--------------------------------------------------------------------------
    | Automatically sanitize request payload
    */
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),

    /*
    |--------------------------------------------------------------------------
    | Midtrans 3DS Transaction for Credit Card
    |--------------------------------------------------------------------------
    */
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];
