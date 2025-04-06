<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/query.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.StateFilter</code>
 */
class StateFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines the state to query for.
     *
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.State state = 1 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Defines the state to query for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines the state to query for.
     *
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.State state = 1 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Defines the state to query for.
     *
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.State state = 1 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Resources\User\V3alpha\State::class);
        $this->state = $var;

        return $this;
    }

}

