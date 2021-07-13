<?php namespace JosKoomen\Laravel\Whitelist;

use Illuminate\Support\ServiceProvider;

class WhitelistServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $package_name = 'jk-whitelist';

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->handleConfigs();
        $this->handleViews();
        $this->handleMiddleware();
    }

    private function handleConfigs()
    {
        $configPath = __DIR__ . '/../config/'.$this->package_name.'.php';

        $this->publishes([
            $configPath => config_path($this->package_name.'.php')
        ], $this->package_name);

        $this->mergeConfigFrom($configPath, $this->package_name);
    }


    private function handleViews()
    {
        $viewsPath = __DIR__ . '/../views';

        $this->loadViewsFrom($viewsPath, $this->package_name);

        $this->publishes([
            $viewsPath => resource_path('views/vendor/'.$this->package_name),
        ], $this->package_name);
    }

    private function handleMiddleware()
    {
        $this->app['router']->pushMiddlewareToGroup('web', WhitelistMiddleware::class);
    }
}
