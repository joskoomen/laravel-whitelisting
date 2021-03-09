<?php

/*
|--------------------------------------------------------------------------
| Ypa Maintenance Mode
|--------------------------------------------------------------------------
|
| YPA Package for disabling Maintenance mode for whitelisted locations.
|
*/

return [

    /*
     |--------------------------------------------------------------------------
     | Maintenance Mode Active
     |--------------------------------------------------------------------------
     |
     | For live debug and test sessions
     |
     */

    'active' => env('YPA_MAINTENANCE_ACTIVE', false),

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Whitelist
    |--------------------------------------------------------------------------
    |
    | Comma separated IP addresses for maintenance mode whitelisting
    |
    */
    'whitelist' => env('APP_MAINTENANCE_WHITELIST', []),

];
