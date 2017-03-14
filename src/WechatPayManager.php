<?php

namespace Lod\WechatPay;
use InvalidArgumentException;

use Illuminate\Support\Manager;

class WechatPayManager extends Manager {


    public static function unifiedOrder(){
        return Libs\WxPayApi::unifiedOrder();
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
