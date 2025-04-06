<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/query.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.TargetNameFilter</code>
 */
class TargetNameFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines the name of the target to query for.
     *
     * Generated from protobuf field <code>string target_name = 1 [json_name = "targetName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $target_name = '';
    /**
     * Defines which text comparison method used for the name query.
     *
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.TextFilterMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $method = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_name
     *           Defines the name of the target to query for.
     *     @type int $method
     *           Defines which text comparison method used for the name query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines the name of the target to query for.
     *
     * Generated from protobuf field <code>string target_name = 1 [json_name = "targetName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getTargetName()
    {
        return $this->target_name;
    }

    /**
     * Defines the name of the target to query for.
     *
     * Generated from protobuf field <code>string target_name = 1 [json_name = "targetName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetName($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_name = $var;

        return $this;
    }

    /**
     * Defines which text comparison method used for the name query.
     *
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.TextFilterMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Defines which text comparison method used for the name query.
     *
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.TextFilterMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Resources\Object\V3alpha\TextFilterMethod::class);
        $this->method = $var;

        return $this;
    }

}

