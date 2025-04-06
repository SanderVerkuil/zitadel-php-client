<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/query.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query for users with a specific state.
 *
 * Generated from protobuf message <code>zitadel.user.v2beta.LoginNameQuery</code>
 */
class LoginNameQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string login_name = 1 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_name = '';
    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.TextQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $method = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $login_name
     *     @type int $method
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string login_name = 1 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->login_name;
    }

    /**
     * Generated from protobuf field <code>string login_name = 1 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>.zitadel.object.v2beta.TextQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.TextQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Object\V2beta\TextQueryMethod::class);
        $this->method = $var;

        return $this;
    }

}

