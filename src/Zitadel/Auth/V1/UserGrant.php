<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/auth.proto

namespace Zitadel\Auth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.auth.v1.UserGrant</code>
 */
class UserGrant extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $org_id = '';
    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $project_id = '';
    /**
     * Generated from protobuf field <code>string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * Deprecated: user role_keys
     *
     * Generated from protobuf field <code>repeated string roles = 4 [json_name = "roles", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $roles;
    /**
     * Generated from protobuf field <code>string org_name = 5 [json_name = "orgName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $org_name = '';
    /**
     * Generated from protobuf field <code>string grant_id = 6 [json_name = "grantId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $grant_id = '';
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 7 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>string org_domain = 8 [json_name = "orgDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $org_domain = '';
    /**
     * Generated from protobuf field <code>string project_name = 9 [json_name = "projectName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $project_name = '';
    /**
     * Generated from protobuf field <code>string project_grant_id = 10 [json_name = "projectGrantId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $project_grant_id = '';
    /**
     * Generated from protobuf field <code>repeated string role_keys = 11 [json_name = "roleKeys", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $role_keys;
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.Type user_type = 12 [json_name = "userType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_type = 0;
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserGrantState state = 13 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type string $project_id
     *     @type string $user_id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $roles
     *           Deprecated: user role_keys
     *     @type string $org_name
     *     @type string $grant_id
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type string $org_domain
     *     @type string $project_name
     *     @type string $project_grant_id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $role_keys
     *     @type int $user_type
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Auth::initOnce();
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
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Deprecated: user role_keys
     *
     * Generated from protobuf field <code>repeated string roles = 4 [json_name = "roles", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Deprecated: user role_keys
     *
     * Generated from protobuf field <code>repeated string roles = 4 [json_name = "roles", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string org_name = 5 [json_name = "orgName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getOrgName()
    {
        return $this->org_name;
    }

    /**
     * Generated from protobuf field <code>string org_name = 5 [json_name = "orgName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOrgName($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 6 [json_name = "grantId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getGrantId()
    {
        return $this->grant_id;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 6 [json_name = "grantId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGrantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->grant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 7 [json_name = "details"];</code>
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
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 7 [json_name = "details"];</code>
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
     * Generated from protobuf field <code>string org_domain = 8 [json_name = "orgDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getOrgDomain()
    {
        return $this->org_domain;
    }

    /**
     * Generated from protobuf field <code>string org_domain = 8 [json_name = "orgDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOrgDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project_name = 9 [json_name = "projectName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * Generated from protobuf field <code>string project_name = 9 [json_name = "projectName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project_grant_id = 10 [json_name = "projectGrantId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getProjectGrantId()
    {
        return $this->project_grant_id;
    }

    /**
     * Generated from protobuf field <code>string project_grant_id = 10 [json_name = "projectGrantId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProjectGrantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_grant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string role_keys = 11 [json_name = "roleKeys", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoleKeys()
    {
        return $this->role_keys;
    }

    /**
     * Generated from protobuf field <code>repeated string role_keys = 11 [json_name = "roleKeys", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoleKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->role_keys = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.Type user_type = 12 [json_name = "userType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.Type user_type = 12 [json_name = "userType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setUserType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\User\V1\Type::class);
        $this->user_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserGrantState state = 13 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserGrantState state = 13 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\User\V1\UserGrantState::class);
        $this->state = $var;

        return $this;
    }

}

