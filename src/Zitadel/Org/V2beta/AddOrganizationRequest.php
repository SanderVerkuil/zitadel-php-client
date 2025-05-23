<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/org/v2beta/org_service.proto

namespace Zitadel\Org\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.org.v2beta.AddOrganizationRequest</code>
 */
class AddOrganizationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated .zitadel.org.v2beta.AddOrganizationRequest.Admin admins = 2 [json_name = "admins"];</code>
     */
    private $admins;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type array<\Zitadel\Org\V2beta\AddOrganizationRequest\Admin>|\Google\Protobuf\Internal\RepeatedField $admins
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Org\V2Beta\OrgService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.org.v2beta.AddOrganizationRequest.Admin admins = 2 [json_name = "admins"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.org.v2beta.AddOrganizationRequest.Admin admins = 2 [json_name = "admins"];</code>
     * @param array<\Zitadel\Org\V2beta\AddOrganizationRequest\Admin>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdmins($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Org\V2beta\AddOrganizationRequest\Admin::class);
        $this->admins = $arr;

        return $this;
    }

}

