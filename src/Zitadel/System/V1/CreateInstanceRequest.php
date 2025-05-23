<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/system.proto

namespace Zitadel\System\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.system.v1.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string instance_name = 1 [json_name = "instanceName", (.validate.rules) = {</code>
     */
    protected $instance_name = '';
    /**
     * Generated from protobuf field <code>string first_org_name = 2 [json_name = "firstOrgName", (.validate.rules) = {</code>
     */
    protected $first_org_name = '';
    /**
     * Generated from protobuf field <code>string custom_domain = 3 [json_name = "customDomain", (.validate.rules) = {</code>
     */
    protected $custom_domain = '';
    /**
     * Generated from protobuf field <code>string default_language = 6 [json_name = "defaultLanguage", (.validate.rules) = {</code>
     */
    protected $default_language = '';
    protected $owner;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_name
     *     @type string $first_org_name
     *     @type string $custom_domain
     *     @type \Zitadel\System\V1\CreateInstanceRequest\Human $human
     *           oneof field for the user managing the instance
     *     @type \Zitadel\System\V1\CreateInstanceRequest\Machine $machine
     *     @type string $default_language
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\System::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string instance_name = 1 [json_name = "instanceName", (.validate.rules) = {</code>
     * @return string
     */
    public function getInstanceName()
    {
        return $this->instance_name;
    }

    /**
     * Generated from protobuf field <code>string instance_name = 1 [json_name = "instanceName", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string first_org_name = 2 [json_name = "firstOrgName", (.validate.rules) = {</code>
     * @return string
     */
    public function getFirstOrgName()
    {
        return $this->first_org_name;
    }

    /**
     * Generated from protobuf field <code>string first_org_name = 2 [json_name = "firstOrgName", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFirstOrgName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_org_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string custom_domain = 3 [json_name = "customDomain", (.validate.rules) = {</code>
     * @return string
     */
    public function getCustomDomain()
    {
        return $this->custom_domain;
    }

    /**
     * Generated from protobuf field <code>string custom_domain = 3 [json_name = "customDomain", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCustomDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_domain = $var;

        return $this;
    }

    /**
     * oneof field for the user managing the instance
     *
     * Generated from protobuf field <code>.zitadel.system.v1.CreateInstanceRequest.Human human = 4 [json_name = "human"];</code>
     * @return \Zitadel\System\V1\CreateInstanceRequest\Human|null
     */
    public function getHuman()
    {
        return $this->readOneof(4);
    }

    public function hasHuman()
    {
        return $this->hasOneof(4);
    }

    /**
     * oneof field for the user managing the instance
     *
     * Generated from protobuf field <code>.zitadel.system.v1.CreateInstanceRequest.Human human = 4 [json_name = "human"];</code>
     * @param \Zitadel\System\V1\CreateInstanceRequest\Human $var
     * @return $this
     */
    public function setHuman($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\System\V1\CreateInstanceRequest\Human::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.system.v1.CreateInstanceRequest.Machine machine = 5 [json_name = "machine"];</code>
     * @return \Zitadel\System\V1\CreateInstanceRequest\Machine|null
     */
    public function getMachine()
    {
        return $this->readOneof(5);
    }

    public function hasMachine()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.zitadel.system.v1.CreateInstanceRequest.Machine machine = 5 [json_name = "machine"];</code>
     * @param \Zitadel\System\V1\CreateInstanceRequest\Machine $var
     * @return $this
     */
    public function setMachine($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\System\V1\CreateInstanceRequest\Machine::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_language = 6 [json_name = "defaultLanguage", (.validate.rules) = {</code>
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->default_language;
    }

    /**
     * Generated from protobuf field <code>string default_language = 6 [json_name = "defaultLanguage", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_language = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->whichOneof("owner");
    }

}

