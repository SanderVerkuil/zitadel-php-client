<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/action_service.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.GetTargetRequest</code>
 */
class GetTargetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $instance = null;
    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V3alpha\Instance $instance
     *     @type string $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\ActionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Object\V3alpha\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Object\V3alpha\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V3alpha\Instance::class);
        $this->instance = $var;

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

}

