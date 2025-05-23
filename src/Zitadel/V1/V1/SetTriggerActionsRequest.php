<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/v1.proto

namespace Zitadel\V1\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.v1.v1.SetTriggerActionsRequest</code>
 */
class SetTriggerActionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.v1.v1.FlowType flow_type = 1 [json_name = "flowType"];</code>
     */
    protected $flow_type = 0;
    /**
     * Generated from protobuf field <code>.zitadel.v1.v1.TriggerType trigger_type = 2 [json_name = "triggerType"];</code>
     */
    protected $trigger_type = 0;
    /**
     * Generated from protobuf field <code>repeated string action_ids = 3 [json_name = "actionIds"];</code>
     */
    private $action_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $flow_type
     *     @type int $trigger_type
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $action_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\V1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.v1.FlowType flow_type = 1 [json_name = "flowType"];</code>
     * @return int
     */
    public function getFlowType()
    {
        return $this->flow_type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.v1.FlowType flow_type = 1 [json_name = "flowType"];</code>
     * @param int $var
     * @return $this
     */
    public function setFlowType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\V1\V1\FlowType::class);
        $this->flow_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.v1.TriggerType trigger_type = 2 [json_name = "triggerType"];</code>
     * @return int
     */
    public function getTriggerType()
    {
        return $this->trigger_type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.v1.TriggerType trigger_type = 2 [json_name = "triggerType"];</code>
     * @param int $var
     * @return $this
     */
    public function setTriggerType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\V1\V1\TriggerType::class);
        $this->trigger_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string action_ids = 3 [json_name = "actionIds"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActionIds()
    {
        return $this->action_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string action_ids = 3 [json_name = "actionIds"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->action_ids = $arr;

        return $this;
    }

}

