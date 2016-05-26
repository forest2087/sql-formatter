<?php namespace FW\SqlFormatter;

use Illuminate\Support\ServiceProvider;
use SqlFormatter;

class SqlFormatterServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('SqlFormatter', function ($app)
        {
            return new SqlFormatter();
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['SqlFormatter'];
    }

}
