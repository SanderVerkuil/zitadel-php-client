<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/action.proto

namespace Zitadel\Action\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.action.v1.TriggerAction</code>
 */
class TriggerAction extends \Google\Protobuf\Internal\Message
{
    /**
     * id of the trigger type
     *
     * Generated from protobuf field <code>.zitadel.action.v1.TriggerType trigger_type = 1 [json_name = "triggerType"];</code>
     */
    protected $trigger_type = null;
    /**
     * Generated from protobuf field <code>repeated .zitadel.action.v1.Action actions = 2 [json_name = "actions"];</code>
     */
    private $actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Action\V1\TriggerType $trigger_type
     *           id of the trigger type
     *     @type array<\Zitadel\Action\V1\Action>|\Google\Protobuf\Internal\RepeatedField $actions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Action::initOnce();
        parent::__construct($data);
    }

    /**
     * id of the trigger type
     *
     * Generated from protobuf field <code>.zitadel.action.v1.TriggerType trigger_type = 1 [json_name = "triggerType"];</code>
     * @return \Zitadel\Action\V1\TriggerType|null
     */
    public function getTriggerType()
    {
        return $this->trigger_type;
    }

    public function hasTriggerType()
    {
        return isset($this->trigger_type);
    }

    public function clearTriggerType()
    {
        unset($this->trigger_type);
    }

    /**
     * id of the trigger type
     *
     * Generated from protobuf field <code>.zitadel.action.v1.TriggerType trigger_type = 1 [json_name = "triggerType"];</code>
     * @param \Zitadel\Action\V1\TriggerType $var
     * @return $this
     */
    public function setTriggerType($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Action\V1\TriggerType::class);
        $this->trigger_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.action.v1.Action actions = 2 [json_name = "actions"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.action.v1.Action actions = 2 [json_name = "actions"];</code>
     * @param array<\Zitadel\Action\V1\Action>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Action\V1\Action::class);
        $this->actions = $arr;

        return $this;
    }

}

