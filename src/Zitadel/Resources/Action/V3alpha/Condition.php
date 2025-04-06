<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/execution.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    protected $condition_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\Action\V3alpha\RequestExecution $request
     *           Condition-type to execute if a request on the defined API point happens.
     *     @type \Zitadel\Resources\Action\V3alpha\ResponseExecution $response
     *           Condition-type to execute on response if a request on the defined API point happens.
     *     @type \Zitadel\Resources\Action\V3alpha\FunctionExecution $function
     *           Condition-type to execute if function is used, replaces actions v1.
     *     @type \Zitadel\Resources\Action\V3alpha\EventExecution $event
     *           Condition-type to execute if an event is created in the system.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * Condition-type to execute if a request on the defined API point happens.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.RequestExecution request = 1 [json_name = "request"];</code>
     * @return \Zitadel\Resources\Action\V3alpha\RequestExecution|null
     */
    public function getRequest()
    {
        return $this->readOneof(1);
    }

    public function hasRequest()
    {
        return $this->hasOneof(1);
    }

    /**
     * Condition-type to execute if a request on the defined API point happens.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.RequestExecution request = 1 [json_name = "request"];</code>
     * @param \Zitadel\Resources\Action\V3alpha\RequestExecution $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\RequestExecution::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Condition-type to execute on response if a request on the defined API point happens.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.ResponseExecution response = 2 [json_name = "response"];</code>
     * @return \Zitadel\Resources\Action\V3alpha\ResponseExecution|null
     */
    public function getResponse()
    {
        return $this->readOneof(2);
    }

    public function hasResponse()
    {
        return $this->hasOneof(2);
    }

    /**
     * Condition-type to execute on response if a request on the defined API point happens.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.ResponseExecution response = 2 [json_name = "response"];</code>
     * @param \Zitadel\Resources\Action\V3alpha\ResponseExecution $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\ResponseExecution::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Condition-type to execute if function is used, replaces actions v1.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.FunctionExecution function = 3 [json_name = "function"];</code>
     * @return \Zitadel\Resources\Action\V3alpha\FunctionExecution|null
     */
    public function getFunction()
    {
        return $this->readOneof(3);
    }

    public function hasFunction()
    {
        return $this->hasOneof(3);
    }

    /**
     * Condition-type to execute if function is used, replaces actions v1.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.FunctionExecution function = 3 [json_name = "function"];</code>
     * @param \Zitadel\Resources\Action\V3alpha\FunctionExecution $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\FunctionExecution::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Condition-type to execute if an event is created in the system.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.EventExecution event = 4 [json_name = "event"];</code>
     * @return \Zitadel\Resources\Action\V3alpha\EventExecution|null
     */
    public function getEvent()
    {
        return $this->readOneof(4);
    }

    public function hasEvent()
    {
        return $this->hasOneof(4);
    }

    /**
     * Condition-type to execute if an event is created in the system.
     *
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.EventExecution event = 4 [json_name = "event"];</code>
     * @param \Zitadel\Resources\Action\V3alpha\EventExecution $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\EventExecution::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConditionType()
    {
        return $this->whichOneof("condition_type");
    }

}

