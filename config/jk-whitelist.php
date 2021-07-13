<?php

/*
|--------------------------------------------------------------------------
| Jos Koomen Whitelist Mode
|--------------------------------------------------------------------------
|
| Package for adding whitelisted locations.
|
*/

return [

    /*
     |--------------------------------------------------------------------------
     | Whitelist Mode Active
     |--------------------------------------------------------------------------
     |
     | For live debug and test sessions
     |
     */

    'active' => env('JK_WHITELIST_ACTIVE', false),

    /*
    |--------------------------------------------------------------------------
    | Whitelist IP Addresses
    |--------------------------------------------------------------------------
    |
    | Comma separated IP addresses for whitelisting
    |
    */
    'whitelist' => env('JK_WHITELIST_IP_ADDRESSES', []),

];
