<?php namespace Ginger\Gin;

use Illuminate\Support\ServiceProvider;

class GinServiceProvider extends ServiceProvider {

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
	 
    public function boot()
    {
        $this->package('Ginger/Gin');
    }	 
	 
    public function register()
    {
      $this->app['Gin'] = $this->app->share(function($app)
      {
        return new Gin;
      });

      $this->app->booting(function()
      {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Gin', 'Ginger\Gin\Facades\Gin');
      });     
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('Gin');
	}

}
