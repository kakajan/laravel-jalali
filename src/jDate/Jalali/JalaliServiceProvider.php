<?php namespace jDate\Jalali;

use Illuminate\Support\ServiceProvider;

class JalaliServiceProvider extends ServiceProvider {

	 /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;
 
  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('kakajan/laravel-jalali');
  }
 
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
      $this->app->singleton(jDate::class, function ($app)
  		{
  		  return new jDate;
	});
      $this->app->booting(function()
      {
          $loader = \Illuminate\Foundation\AliasLoader::getInstance();
          $loader->alias('jDate', 'jDate\Jalali\jDate');
	});
	
      $this->app->singleton(jDateTime::class, function ($app)
  		{
  		  return new jDateTime;
	});
      $this->app->booting(function()
      {
          $loader = \Illuminate\Foundation\AliasLoader::getInstance();
          $loader->alias('jDateTime', 'jDate\Jalali\jDateTime');
	});


  }
 
  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array('jalali','jDateTime');
  }

}
