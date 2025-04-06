<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.AddCustomOrgIAMPolicyRequest</code>
 */
class AddCustomOrgIAMPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $org_id = '';
    /**
     * the username has to end with the domain of its organization (uniqueness is organization based)
     *
     * Generated from protobuf field <code>bool user_login_must_be_domain = 2 [json_name = "userLoginMustBeDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_login_must_be_domain = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type bool $user_login_must_be_domain
     *           the username has to end with the domain of its organization (uniqueness is organization based)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_id = $var;

        return $this;
    }

    /**
     * the username has to end with the domain of its organization (uniqueness is organization based)
     *
     * Generated from protobuf field <code>bool user_login_must_be_domain = 2 [json_name = "userLoginMustBeDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getUserLoginMustBeDomain()
    {
        return $this->user_login_must_be_domain;
    }

    /**
     * the username has to end with the domain of its organization (uniqueness is organization based)
     *
     * Generated from protobuf field <code>bool user_login_must_be_domain = 2 [json_name = "userLoginMustBeDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setUserLoginMustBeDomain($var)
    {
        GPBUtil::checkBool($var);
        $this->user_login_must_be_domain = $var;

        return $this;
    }

}

