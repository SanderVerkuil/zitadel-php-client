<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/session.proto

namespace Zitadel\Session\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.session.v2.UserFactor</code>
 */
class UserFactor extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp verified_at = 1 [json_name = "verifiedAt", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $verified_at = null;
    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string login_name = 3 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_name = '';
    /**
     * Generated from protobuf field <code>string display_name = 4 [json_name = "displayName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>string organization_id = 6 [json_name = "organizationId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $organization_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $verified_at
     *     @type string $id
     *     @type string $login_name
     *     @type string $display_name
     *     @type string $organization_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp verified_at = 1 [json_name = "verifiedAt", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVerifiedAt()
    {
        return $this->verified_at;
    }

    public function hasVerifiedAt()
    {
        return isset($this->verified_at);
    }

    public function clearVerifiedAt()
    {
        unset($this->verified_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp verified_at = 1 [json_name = "verifiedAt", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVerifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->verified_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string login_name = 3 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->login_name;
    }

    /**
     * Generated from protobuf field <code>string login_name = 3 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string display_name = 4 [json_name = "displayName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Generated from protobuf field <code>string display_name = 4 [json_name = "displayName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string organization_id = 6 [json_name = "organizationId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Generated from protobuf field <code>string organization_id = 6 [json_name = "organizationId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->organization_id = $var;

        return $this;
    }

}

