<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user.proto

namespace Zitadel\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *UserStateQuery always equals
 *
 * Generated from protobuf message <code>zitadel.user.v1.StateQuery</code>
 */
class StateQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserState state = 1 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserState state = 1 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserState state = 1 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\User\V1\UserState::class);
        $this->state = $var;

        return $this;
    }

}

