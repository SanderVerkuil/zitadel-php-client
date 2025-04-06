<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/user_service.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.StartWebAuthNRegistrationRequest</code>
 */
class StartWebAuthNRegistrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $instance = null;
    /**
     * Optionally expect the user to be in this organization.
     *
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Organization organization = 2 [json_name = "organization"];</code>
     */
    protected $organization = null;
    /**
     * unique identifier of the user.
     *
     * Generated from protobuf field <code>string id = 3 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.StartWebAuthNRegistration registration = 4 [json_name = "registration"];</code>
     */
    protected $registration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V3alpha\Instance $instance
     *     @type \Zitadel\Object\V3alpha\Organization $organization
     *           Optionally expect the user to be in this organization.
     *     @type string $id
     *           unique identifier of the user.
     *     @type \Zitadel\Resources\User\V3alpha\StartWebAuthNRegistration $registration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Object\V3alpha\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Object\V3alpha\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V3alpha\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * Optionally expect the user to be in this organization.
     *
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Organization organization = 2 [json_name = "organization"];</code>
     * @return \Zitadel\Object\V3alpha\Organization|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    public function hasOrganization()
    {
        return isset($this->organization);
    }

    public function clearOrganization()
    {
        unset($this->organization);
    }

    /**
     * Optionally expect the user to be in this organization.
     *
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Organization organization = 2 [json_name = "organization"];</code>
     * @param \Zitadel\Object\V3alpha\Organization $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V3alpha\Organization::class);
        $this->organization = $var;

        return $this;
    }

    /**
     * unique identifier of the user.
     *
     * Generated from protobuf field <code>string id = 3 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * unique identifier of the user.
     *
     * Generated from protobuf field <code>string id = 3 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.StartWebAuthNRegistration registration = 4 [json_name = "registration"];</code>
     * @return \Zitadel\Resources\User\V3alpha\StartWebAuthNRegistration|null
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    public function hasRegistration()
    {
        return isset($this->registration);
    }

    public function clearRegistration()
    {
        unset($this->registration);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.StartWebAuthNRegistration registration = 4 [json_name = "registration"];</code>
     * @param \Zitadel\Resources\User\V3alpha\StartWebAuthNRegistration $var
     * @return $this
     */
    public function setRegistration($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\User\V3alpha\StartWebAuthNRegistration::class);
        $this->registration = $var;

        return $this;
    }

}

