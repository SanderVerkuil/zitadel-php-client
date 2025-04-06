<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.GetSMTPConfigByIdResponse</code>
 */
class GetSMTPConfigByIdResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMTPConfig smtp_config = 1 [json_name = "smtpConfig"];</code>
     */
    protected $smtp_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Settings\V1\SMTPConfig $smtp_config
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMTPConfig smtp_config = 1 [json_name = "smtpConfig"];</code>
     * @return \Zitadel\Settings\V1\SMTPConfig|null
     */
    public function getSmtpConfig()
    {
        return $this->smtp_config;
    }

    public function hasSmtpConfig()
    {
        return isset($this->smtp_config);
    }

    public function clearSmtpConfig()
    {
        unset($this->smtp_config);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMTPConfig smtp_config = 1 [json_name = "smtpConfig"];</code>
     * @param \Zitadel\Settings\V1\SMTPConfig $var
     * @return $this
     */
    public function setSmtpConfig($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Settings\V1\SMTPConfig::class);
        $this->smtp_config = $var;

        return $this;
    }

}

