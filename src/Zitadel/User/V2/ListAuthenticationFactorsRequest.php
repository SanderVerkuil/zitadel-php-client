<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.ListAuthenticationFactorsRequest</code>
 */
class ListAuthenticationFactorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthFactors auth_factors = 2 [json_name = "authFactors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $auth_factors;
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthFactorState states = 3 [json_name = "states", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $states;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $auth_factors
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $states
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthFactors auth_factors = 2 [json_name = "authFactors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthFactors()
    {
        return $this->auth_factors;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthFactors auth_factors = 2 [json_name = "authFactors", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthFactors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Zitadel\User\V2\AuthFactors::class);
        $this->auth_factors = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthFactorState states = 3 [json_name = "states", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthFactorState states = 3 [json_name = "states", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Zitadel\User\V2\AuthFactorState::class);
        $this->states = $arr;

        return $this;
    }

}

