<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.GetFlowResponse</code>
 */
class GetFlowResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.action.v1.Flow flow = 1 [json_name = "flow"];</code>
     */
    protected $flow = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Action\V1\Flow $flow
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.Flow flow = 1 [json_name = "flow"];</code>
     * @return \Zitadel\Action\V1\Flow|null
     */
    public function getFlow()
    {
        return $this->flow;
    }

    public function hasFlow()
    {
        return isset($this->flow);
    }

    public function clearFlow()
    {
        unset($this->flow);
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.Flow flow = 1 [json_name = "flow"];</code>
     * @param \Zitadel\Action\V1\Flow $var
     * @return $this
     */
    public function setFlow($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Action\V1\Flow::class);
        $this->flow = $var;

        return $this;
    }

}

