<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.UpdateUserGrantRequest</code>
 */
class UpdateUserGrantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string grant_id = 2 [json_name = "grantId", (.validate.rules) = {</code>
     */
    protected $grant_id = '';
    /**
     * Generated from protobuf field <code>repeated string role_keys = 3 [json_name = "roleKeys", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $role_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type string $grant_id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $role_keys
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string grant_id = 2 [json_name = "grantId", (.validate.rules) = {</code>
     * @return string
     */
    public function getGrantId()
    {
        return $this->grant_id;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 2 [json_name = "grantId", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>repeated string role_keys = 3 [json_name = "roleKeys", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoleKeys()
    {
        return $this->role_keys;
    }

    /**
     * Generated from protobuf field <code>repeated string role_keys = 3 [json_name = "roleKeys", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoleKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->role_keys = $arr;

        return $this;
    }

}

