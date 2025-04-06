<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/webkey/v3alpha/key.proto

namespace Zitadel\Resources\Webkey\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.webkey.v3alpha.GetWebKey</code>
 */
class GetWebKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>.zitadel.resources.webkey.v3alpha.WebKey config = 2 [json_name = "config"];</code>
     */
    protected $config = null;
    /**
     * Generated from protobuf field <code>.zitadel.resources.webkey.v3alpha.WebKeyState state = 3 [json_name = "state"];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\Object\V3alpha\Details $details
     *     @type \Zitadel\Resources\Webkey\V3alpha\WebKey $config
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Webkey\V3Alpha\Key::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Resources\Object\V3alpha\Details|null
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
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Resources\Object\V3alpha\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Object\V3alpha\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.webkey.v3alpha.WebKey config = 2 [json_name = "config"];</code>
     * @return \Zitadel\Resources\Webkey\V3alpha\WebKey|null
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
     * Generated from protobuf field <code>.zitadel.resources.webkey.v3alpha.WebKey config = 2 [json_name = "config"];</code>
     * @param \Zitadel\Resources\Webkey\V3alpha\WebKey $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Webkey\V3alpha\WebKey::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.webkey.v3alpha.WebKeyState state = 3 [json_name = "state"];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.webkey.v3alpha.WebKeyState state = 3 [json_name = "state"];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Resources\Webkey\V3alpha\WebKeyState::class);
        $this->state = $var;

        return $this;
    }

}

