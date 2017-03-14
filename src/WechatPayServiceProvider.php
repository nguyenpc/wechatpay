<?php

namespace Lod\WechatPay;

use Illuminate\Support\ServiceProvider;


class WechatPayServiceProvider extends ServiceProvider {

    /**
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = true;
    //
    // /**
    // * Bootstrap the application events.
    // *
    // * @return void
    // */
    // public function boot()
    // {
    //     $this->package('Lod/WechatPay');
    // }

    /**
    * Register the service provider.
    *
    * @return void
    */
    public function register()
    {
        $this->app->singleton('Lod\WechatPay\WechatPayManager',  function($app) {
            return new WechatPayManager($app);
        });
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return array('Lod\WechatPay\WechatPayManager');
    }

}
