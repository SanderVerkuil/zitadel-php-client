<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/settings_service.proto

namespace Zitadel\Settings\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2beta.GetDomainSettingsResponse</code>
 */
class GetDomainSettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>.zitadel.settings.v2beta.DomainSettings settings = 2 [json_name = "settings"];</code>
     */
    protected $settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2beta\Details $details
     *     @type \Zitadel\Settings\V2beta\DomainSettings $settings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2Beta\SettingsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2beta\Details|null
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
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2beta\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2beta\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v2beta.DomainSettings settings = 2 [json_name = "settings"];</code>
     * @return \Zitadel\Settings\V2beta\DomainSettings|null
     */
    public function getSettings()
    {
        return $this->settings;
    }

    public function hasSettings()
    {
        return isset($this->settings);
    }

    public function clearSettings()
    {
        unset($this->settings);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v2beta.DomainSettings settings = 2 [json_name = "settings"];</code>
     * @param \Zitadel\Settings\V2beta\DomainSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Settings\V2beta\DomainSettings::class);
        $this->settings = $var;

        return $this;
    }

}

