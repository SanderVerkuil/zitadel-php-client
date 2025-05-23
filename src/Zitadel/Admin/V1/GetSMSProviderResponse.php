<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.GetSMSProviderResponse</code>
 */
class GetSMSProviderResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMSProvider config = 1 [json_name = "config"];</code>
     */
    protected $config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Settings\V1\SMSProvider $config
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMSProvider config = 1 [json_name = "config"];</code>
     * @return \Zitadel\Settings\V1\SMSProvider|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMSProvider config = 1 [json_name = "config"];</code>
     * @param \Zitadel\Settings\V1\SMSProvider $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Settings\V1\SMSProvider::class);
        $this->config = $var;

        return $this;
    }

}

