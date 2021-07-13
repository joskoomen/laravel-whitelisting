# Jos Koomen : Laravel Whitetlist

Package to add IP whitelisting to a Laravel application.


### Install
1. Add the `WhitelistServiceProvider` to your app config
```
    ...
    
    /*
     * Package Service Providers...
     */
    JosKoomen\Laravel\Whitelist\WhitelistServiceProvider::class,
        
    ...
```

2. run `php artisan vendor:publish` and find/select `jk-whitelist`
   - This will add the middleware
   - This will copy the view and config file to your project
