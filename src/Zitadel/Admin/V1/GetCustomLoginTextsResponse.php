<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.GetCustomLoginTextsResponse</code>
 */
class GetCustomLoginTextsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.text.v1.LoginCustomText custom_text = 1 [json_name = "customText"];</code>
     */
    protected $custom_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Text\V1\LoginCustomText $custom_text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.text.v1.LoginCustomText custom_text = 1 [json_name = "customText"];</code>
     * @return \Zitadel\Text\V1\LoginCustomText|null
     */
    public function getCustomText()
    {
        return $this->custom_text;
    }

    public function hasCustomText()
    {
        return isset($this->custom_text);
    }

    public function clearCustomText()
    {
        unset($this->custom_text);
    }

    /**
     * Generated from protobuf field <code>.zitadel.text.v1.LoginCustomText custom_text = 1 [json_name = "customText"];</code>
     * @param \Zitadel\Text\V1\LoginCustomText $var
     * @return $this
     */
    public function setCustomText($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Text\V1\LoginCustomText::class);
        $this->custom_text = $var;

        return $this;
    }

}

