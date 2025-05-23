<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/query.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.IncludeFilter</code>
 */
class IncludeFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines the include to query for.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.Condition include = 1 [json_name = "include", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $include = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\Action\V3alpha\Condition $include
     *           Defines the include to query for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines the include to query for.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.Condition include = 1 [json_name = "include", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Resources\Action\V3alpha\Condition|null
     */
    public function getInclude()
    {
        return $this->include;
    }

    public function hasInclude()
    {
        return isset($this->include);
    }

    public function clearInclude()
    {
        unset($this->include);
    }

    /**
     * Defines the include to query for.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.Condition include = 1 [json_name = "include", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Resources\Action\V3alpha\Condition $var
     * @return $this
     */
    public function setInclude($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\Condition::class);
        $this->include = $var;

        return $this;
    }

}

