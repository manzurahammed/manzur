<?php

namespace manzur\ahammed;

use Illuminate\Support\ServiceProvider;

class ahammedServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes/web.php';
		
		$this->loadViewsFrom(__DIR__.'/../views','todo');
		$this->publishes([
			__DIR__.'/migrations/2014_10_12_000000_create_employes_table.php' => base_path('database/migrations/2014_10_12_000000_create_employes_table.php'),
		]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('todo',function($app){
			return new Todo;
		});
    }
}