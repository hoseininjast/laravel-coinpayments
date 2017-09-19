<?php

use Kevupton\LaravelCoinpayments\Models\Log;

return array(

    // prefix to each of the tables in the database
    'database_prefix' => 'cp_',

    'merchant_id' => getenv('COINPAYMENTS_MERCHANT_ID'),

    // Your API public key associated with your coinpayments account
    'public_key' => getenv('COINPAYMENTS_PUBLIC_KEY'),

    // Your API private key associated with your coinpayments account
    'private_key' => getenv('COINPAYMENTS_PRIVATE_KEY'),

    // This is used to verify that an IPN is from us, use a good random string nobody can guess.
    'ipn_secret' => getenv('COINPAYMENTS_IPN_SECRET'),

    // URL for your IPN callbacks. If not set it will use the IPN URL in your Edit Settings page if you have one set.
    'ipn_url' => getenv('COINPAYMENTS_IPN_URL'),

    // The format of response to return, json or xml. (default: json)
    'format' => getenv('COINPAYMENTS_API_FORMAT', 'json'),

    // ALL logs all requests, ERROR logs only errors, and NONE never
    'log_level' => Log::LEVEL_ERROR,
);
