<?php

namespace Lod\WechatPay;

use Illuminate\Support\ServiceProvider;

class WeChatPayServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->package('lod\wechatpay');
    }

}
