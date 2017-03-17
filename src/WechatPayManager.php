<?php

namespace Lod\WechatPay;
use InvalidArgumentException;
use Lod\WechatPay\Libs\WxPayApi;
use Illuminate\Support\Manager;

class WechatPayManager extends Manager {

    static protected $wxApi;
    public function __construct($app)
    {
        $config = $app['config']['services.wechatpay'];
        self::$wxApi = new WxPayApi(
            $config['app_id'],
            $config['mch_id'],
            $config['key'],
            $config['app_secret'],5, 6, 7);
    }

    public static function unifiedOrder($object){
        return self::$wxApi->unifiedOrder($object);
    }
    public static function bizpayurl($object){
        return self::$wxApi->bizpayurl($object);
    }

    public static function queryOrder($object){
        return self::$wxApi->orderQuery($object);
    }

    /**
    * Get the default driver name.
    *
    * @throws \InvalidArgumentException
    *
    * @return string
    */
    public function getDefaultDriver()
    {
        throw new InvalidArgumentException('No wechatpay driver was specified.');
    }
}
