<?php
namespace Lod\WechatPay\Facades;


use Illuminate\Support\Facades\Facade;

class WechatPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Lod\WechatPay\WechatPayManager';
    }
}
