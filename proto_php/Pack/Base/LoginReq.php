<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: pack.proto

namespace Pack\Base;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pack.base.LoginReq</code>
 */
class LoginReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sig = 1;</code>
     */
    protected $sig = '';
    /**
     * Generated from protobuf field <code>.pack.base.LoginType login_type = 2;</code>
     */
    protected $login_type = 0;
    /**
     * Generated from protobuf field <code>string openid = 3;</code>
     */
    protected $openid = '';
    /**
     * Generated from protobuf field <code>string channel = 4;</code>
     */
    protected $channel = '';
    /**
     * Generated from protobuf field <code>string version = 5;</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>string device_id = 6;</code>
     */
    protected $device_id = '';
    /**
     * Generated from protobuf field <code>string mac_id = 7;</code>
     */
    protected $mac_id = '';
    /**
     * Generated from protobuf field <code>repeated int32 login_num = 8;</code>
     */
    private $login_num;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sig
     *     @type int $login_type
     *     @type string $openid
     *     @type string $channel
     *     @type string $version
     *     @type string $device_id
     *     @type string $mac_id
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $login_num
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Pack::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sig = 1;</code>
     * @return string
     */
    public function getSig()
    {
        return $this->sig;
    }

    /**
     * Generated from protobuf field <code>string sig = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSig($var)
    {
        GPBUtil::checkString($var, True);
        $this->sig = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.pack.base.LoginType login_type = 2;</code>
     * @return int
     */
    public function getLoginType()
    {
        return $this->login_type;
    }

    /**
     * Generated from protobuf field <code>.pack.base.LoginType login_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLoginType($var)
    {
        GPBUtil::checkEnum($var, \Pack\Base\LoginType::class);
        $this->login_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string openid = 3;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Generated from protobuf field <code>string openid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenid($var)
    {
        GPBUtil::checkString($var, True);
        $this->openid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channel = 4;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Generated from protobuf field <code>string channel = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string version = 5;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string device_id = 6;</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * Generated from protobuf field <code>string device_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mac_id = 7;</code>
     * @return string
     */
    public function getMacId()
    {
        return $this->mac_id;
    }

    /**
     * Generated from protobuf field <code>string mac_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setMacId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mac_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 login_num = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLoginNum()
    {
        return $this->login_num;
    }

    /**
     * Generated from protobuf field <code>repeated int32 login_num = 8;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLoginNum($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->login_num = $arr;

        return $this;
    }

}
