<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings.proto

namespace Zitadel\Settings\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v1.TwilioConfig</code>
 */
class TwilioConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sid = 1 [json_name = "sid"];</code>
     */
    protected $sid = '';
    /**
     * Generated from protobuf field <code>string sender_number = 2 [json_name = "senderNumber"];</code>
     */
    protected $sender_number = '';
    /**
     * Generated from protobuf field <code>string verify_service_sid = 3 [json_name = "verifyServiceSid"];</code>
     */
    protected $verify_service_sid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sid
     *     @type string $sender_number
     *     @type string $verify_service_sid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sid = 1 [json_name = "sid"];</code>
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Generated from protobuf field <code>string sid = 1 [json_name = "sid"];</code>
     * @param string $var
     * @return $this
     */
    public function setSid($var)
    {
        GPBUtil::checkString($var, True);
        $this->sid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sender_number = 2 [json_name = "senderNumber"];</code>
     * @return string
     */
    public function getSenderNumber()
    {
        return $this->sender_number;
    }

    /**
     * Generated from protobuf field <code>string sender_number = 2 [json_name = "senderNumber"];</code>
     * @param string $var
     * @return $this
     */
    public function setSenderNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string verify_service_sid = 3 [json_name = "verifyServiceSid"];</code>
     * @return string
     */
    public function getVerifyServiceSid()
    {
        return $this->verify_service_sid;
    }

    /**
     * Generated from protobuf field <code>string verify_service_sid = 3 [json_name = "verifyServiceSid"];</code>
     * @param string $var
     * @return $this
     */
    public function setVerifyServiceSid($var)
    {
        GPBUtil::checkString($var, True);
        $this->verify_service_sid = $var;

        return $this;
    }

}

