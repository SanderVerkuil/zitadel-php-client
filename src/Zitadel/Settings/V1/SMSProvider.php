<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings.proto

namespace Zitadel\Settings\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v1.SMSProvider</code>
 */
class SMSProvider extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMSProviderConfigState state = 3 [json_name = "state"];</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>string description = 6 [json_name = "description"];</code>
     */
    protected $description = '';
    protected $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type string $id
     *     @type int $state
     *     @type string $description
     *     @type \Zitadel\Settings\V1\TwilioConfig $twilio
     *     @type \Zitadel\Settings\V1\HTTPConfig $http
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     * @return \Zitadel\V1\ObjectDetails|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     * @param \Zitadel\V1\ObjectDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ObjectDetails::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMSProviderConfigState state = 3 [json_name = "state"];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.SMSProviderConfigState state = 3 [json_name = "state"];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Settings\V1\SMSProviderConfigState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 6 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 6 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.TwilioConfig twilio = 4 [json_name = "twilio"];</code>
     * @return \Zitadel\Settings\V1\TwilioConfig|null
     */
    public function getTwilio()
    {
        return $this->readOneof(4);
    }

    public function hasTwilio()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.TwilioConfig twilio = 4 [json_name = "twilio"];</code>
     * @param \Zitadel\Settings\V1\TwilioConfig $var
     * @return $this
     */
    public function setTwilio($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Settings\V1\TwilioConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.HTTPConfig http = 5 [json_name = "http"];</code>
     * @return \Zitadel\Settings\V1\HTTPConfig|null
     */
    public function getHttp()
    {
        return $this->readOneof(5);
    }

    public function hasHttp()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v1.HTTPConfig http = 5 [json_name = "http"];</code>
     * @param \Zitadel\Settings\V1\HTTPConfig $var
     * @return $this
     */
    public function setHttp($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Settings\V1\HTTPConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->whichOneof("config");
    }

}

