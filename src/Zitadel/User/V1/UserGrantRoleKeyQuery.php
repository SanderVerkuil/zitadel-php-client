<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user.proto

namespace Zitadel\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v1.UserGrantRoleKeyQuery</code>
 */
class UserGrantRoleKeyQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string role_key = 1 [json_name = "roleKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $role_key = '';
    /**
     * Generated from protobuf field <code>.zitadel.v1.TextQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $method = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $role_key
     *     @type int $method
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string role_key = 1 [json_name = "roleKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getRoleKey()
    {
        return $this->role_key;
    }

    /**
     * Generated from protobuf field <code>string role_key = 1 [json_name = "roleKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRoleKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->role_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.TextQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.TextQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\V1\TextQueryMethod::class);
        $this->method = $var;

        return $this;
    }

}

