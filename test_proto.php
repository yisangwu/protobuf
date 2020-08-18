<?php

defined('DS') or define('DS', DIRECTORY_SEPARATOR);
/**
 * protobuf 测试, php
 * 
 * 编译proto文件，生成 php类
 * # protoc --\php_out=./proto_php  pack.proto
 */

require __DIR__ . DS . 'proto_php' .DS. 'GPBMetadata' . DS . 'Pack.php';
require __DIR__ . DS . 'proto_php' .DS. 'Pack' . DS . 'Base' . DS .'LoginReq.php';
require __DIR__ . DS . 'proto_php' .DS. 'Pack' . DS . 'Base' . DS . 'LoginType.php';


use Pack\Base\{LoginReq, LoginType};

$login_req = new LoginReq();

$login_req->setSig(md5(microtime(true)));
$login_req->setLoginType(LoginType::APPLE);
$login_req->setOpenid(sprintf('openid_%u', mt_rand(1000, 29520)));
$login_req->setChannel(sprintf('channel_00%u', mt_rand(1000, 29520)));
$login_req->setVersion(sprintf('V.%u.%u', mt_rand(1, 3), mt_rand(4, 20)));
$login_req->setDeviceId(sprintf('A00-B%s-C%s-D%s', mt_rand(1,6), mt_rand(8,70), mt_rand(100,237)));
$login_req->setMacId(str_pad('MAC', 20));
$login_req->setLoginNum(range(1,10));

// 序列化成二进制字符串
$data = $login_req->SerializeToString();


$login_rsp = new LoginReq();
// 二进制字符串反序列化
$login_rsp->mergeFromString($data);

echo 'sig: ', $login_rsp->getSig(), PHP_EOL;
echo 'login_type: ', $login_rsp->getLoginType(), PHP_EOL;
echo 'openid: ', $login_rsp->getOpenid(), PHP_EOL;
echo 'channel: ', $login_rsp->getChannel(), PHP_EOL;
echo 'version: ', $login_rsp->getVersion(), PHP_EOL;
echo 'device_id:', $login_rsp->getDeviceId(), PHP_EOL;

// repeated 类型的处理：
echo 'login_num size: ', count($login_rsp->getLoginNum()), PHP_EOL;

$login_num = [];
foreach ($login_rsp->getLoginNum() as $key => $value) {
    $login_num[] = $value;
}

echo 'login_num:', implode(',', $login_num), PHP_EOL;