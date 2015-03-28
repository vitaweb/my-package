<?php namespace Vitaweb\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /*
    |--------------------------------------------------------------------------
    | register & boot
    |--------------------------------------------------------------------------
    |
    | include a routes file, register bindings in the IoC container,
    | attach to events, or anything else you wish to do.
    |
    */

	/**
	 * Register the service provider.
     *
     * Called immediately when ServiceProvider is loaded
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    /**
     * Boot the service provider.
     *
     * Called right before a request is routed.
     *
     * If actions in your service provider rely on another service provider already being registered,
     * or you are overriding services bound by another provider, you should use the boot method.
     *
     * @return void
     */
    public function boot()
    {
        // tell Laravel to handle the autoloading of the config files, assets & other resources for our package)
        $this->package('vitaweb', 'my-package');
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
