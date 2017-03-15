<?php

namespace Lod\WechatPay\Libs;


abstract class AbstractProvider
{
    protected $appId;
    protected $mchId;
    protected $appKey;
    protected $appSecret;
    protected $sslCertPath;
    protected $sslKeyPath;
    protected $reportLevenl = 1;
    protected $curlProxyHost = '0.0.0.0';
    protected $curlProxyPost = 0;
    protected $notifyUrl;

    public function __construct($appId, $mchId, $appKey, $appSecret, $sslCertPath, $sslKeyPath, $notifyUrl)
    {
        $this->appId = $appId;
        $this->mchId = $mchId;
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->sslCertPath = $sslCertPath;
        $this->sslKeyPath = $sslKeyPath;
        $this->notifyUrl = $notifyUrl;
    }

}
