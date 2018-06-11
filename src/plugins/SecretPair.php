<?php
/**
 * Created by PhpStorm.
 * User: 何林海
 * Date: 2018\5\23 0023
 * Time: 10:29
 */
namespace EchoBallon\Yidun\Captcha\Plugins;


class SecretPair
{
    public $secret_id;
    public $secret_key;

    /**
     * 构造函数
     * @param $secret_id 密钥对id
     * @param $secret_key 密钥对key
     */
    public function __construct($secret_id, $secret_key) {
        $this->secret_id  = $secret_id;
        $this->secret_key = $secret_key;
    }
}