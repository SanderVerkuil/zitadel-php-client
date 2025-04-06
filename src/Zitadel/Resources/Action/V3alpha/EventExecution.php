<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/execution.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.EventExecution</code>
 */
class EventExecution extends \Google\Protobuf\Internal\Message
{
    protected $condition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event
     *           Event name as condition.
     *     @type string $group
     *           Event group as condition, all events under this group.
     *     @type bool $all
     *           all events as condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * Event name as condition.
     *
     * Generated from protobuf field <code>string event = 1 [json_name = "event", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->readOneof(1);
    }

    public function hasEvent()
    {
        return $this->hasOneof(1);
    }

    /**
     * Event name as condition.
     *
     * Generated from protobuf field <code>string event = 1 [json_name = "event", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Event group as condition, all events under this group.
     *
     * Generated from protobuf field <code>string group = 2 [json_name = "group", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->readOneof(2);
    }

    public function hasGroup()
    {
        return $this->hasOneof(2);
    }

    /**
     * Event group as condition, all events under this group.
     *
     * Generated from protobuf field <code>string group = 2 [json_name = "group", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * all events as condition.
     *
     * Generated from protobuf field <code>bool all = 3 [json_name = "all", (.validate.rules) = {</code>
     * @return bool
     */
    public function getAll()
    {
        return $this->readOneof(3);
    }

    public function hasAll()
    {
        return $this->hasOneof(3);
    }

    /**
     * all events as condition.
     *
     * Generated from protobuf field <code>bool all = 3 [json_name = "all", (.validate.rules) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->whichOneof("condition");
    }

}

