<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/execution.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.ExecutionTargetType</code>
 */
class ExecutionTargetType extends \Google\Protobuf\Internal\Message
{
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target
     *           Unique identifier of existing target to call.
     *     @type \Zitadel\Resources\Action\V3alpha\Condition $include
     *           Unique identifier of existing execution to include targets of.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier of existing target to call.
     *
     * Generated from protobuf field <code>string target = 1 [json_name = "target"];</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->readOneof(1);
    }

    public function hasTarget()
    {
        return $this->hasOneof(1);
    }

    /**
     * Unique identifier of existing target to call.
     *
     * Generated from protobuf field <code>string target = 1 [json_name = "target"];</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Unique identifier of existing execution to include targets of.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.Condition include = 2 [json_name = "include"];</code>
     * @return \Zitadel\Resources\Action\V3alpha\Condition|null
     */
    public function getInclude()
    {
        return $this->readOneof(2);
    }

    public function hasInclude()
    {
        return $this->hasOneof(2);
    }

    /**
     * Unique identifier of existing execution to include targets of.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.Condition include = 2 [json_name = "include"];</code>
     * @param \Zitadel\Resources\Action\V3alpha\Condition $var
     * @return $this
     */
    public function setInclude($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\Condition::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}

