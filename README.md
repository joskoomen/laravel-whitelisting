# YPA Laravel Maintenance

Package to add Laravel Storefront Maintenance mode to make sure the website is available for testing and fixing issues while other people see a maintenance page.


### Install
1. Add the `MaintenanceServiceProvider` to your app config
```
    ...
    
    /*
     * Package Service Providers...
     */
    Ypa\Laravel\Maintenance\MaintenanceServiceProvider::class,
        
    ...
```

2. run `php artisan vendor:publish` and find/select `ypa-maintenance`
   - This will add the middleware
   - This will copy the view and config file to your project
