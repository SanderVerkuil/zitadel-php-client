<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/action.proto

namespace Zitadel\Action\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.action.v1.Flow</code>
 */
class Flow extends \Google\Protobuf\Internal\Message
{
    /**
     * id of the flow type
     *
     * Generated from protobuf field <code>.zitadel.action.v1.FlowType type = 1 [json_name = "type", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $type = null;
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>.zitadel.action.v1.FlowState state = 3 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>repeated .zitadel.action.v1.TriggerAction trigger_actions = 4 [json_name = "triggerActions"];</code>
     */
    private $trigger_actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Action\V1\FlowType $type
     *           id of the flow type
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type int $state
     *     @type array<\Zitadel\Action\V1\TriggerAction>|\Google\Protobuf\Internal\RepeatedField $trigger_actions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Action::initOnce();
        parent::__construct($data);
    }

    /**
     * id of the flow type
     *
     * Generated from protobuf field <code>.zitadel.action.v1.FlowType type = 1 [json_name = "type", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Action\V1\FlowType|null
     */
    public function getType()
    {
        return $this->type;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * id of the flow type
     *
     * Generated from protobuf field <code>.zitadel.action.v1.FlowType type = 1 [json_name = "type", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Action\V1\FlowType $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Action\V1\FlowType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     * @return \Zitadel\V1\ObjectDetails|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     * @param \Zitadel\V1\ObjectDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ObjectDetails::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.FlowState state = 3 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.FlowState state = 3 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Action\V1\FlowState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.action.v1.TriggerAction trigger_actions = 4 [json_name = "triggerActions"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTriggerActions()
    {
        return $this->trigger_actions;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.action.v1.TriggerAction trigger_actions = 4 [json_name = "triggerActions"];</code>
     * @param array<\Zitadel\Action\V1\TriggerAction>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTriggerActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Action\V1\TriggerAction::class);
        $this->trigger_actions = $arr;

        return $this;
    }

}

