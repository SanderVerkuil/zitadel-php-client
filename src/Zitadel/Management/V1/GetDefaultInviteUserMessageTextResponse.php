<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.GetDefaultInviteUserMessageTextResponse</code>
 */
class GetDefaultInviteUserMessageTextResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.text.v1.MessageCustomText custom_text = 1 [json_name = "customText"];</code>
     */
    protected $custom_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Text\V1\MessageCustomText $custom_text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.text.v1.MessageCustomText custom_text = 1 [json_name = "customText"];</code>
     * @return \Zitadel\Text\V1\MessageCustomText|null
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
     * Generated from protobuf field <code>.zitadel.text.v1.MessageCustomText custom_text = 1 [json_name = "customText"];</code>
     * @param \Zitadel\Text\V1\MessageCustomText $var
     * @return $this
     */
    public function setCustomText($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Text\V1\MessageCustomText::class);
        $this->custom_text = $var;

        return $this;
    }

}

