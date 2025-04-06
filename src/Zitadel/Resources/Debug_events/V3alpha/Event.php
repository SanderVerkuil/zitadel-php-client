<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/debug_events/v3alpha/event.proto

namespace Zitadel\Resources\Debug_events\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.debug_events.v3alpha.Event</code>
 */
class Event extends \Google\Protobuf\Internal\Message
{
    protected $event;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\Debug_events\V3alpha\AddedEvent $add
     *     @type \Zitadel\Resources\Debug_events\V3alpha\ChangedEvent $change
     *     @type \Zitadel\Resources\Debug_events\V3alpha\RemovedEvent $remove
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\DebugEvents\V3Alpha\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.debug_events.v3alpha.AddedEvent add = 1 [json_name = "add"];</code>
     * @return \Zitadel\Resources\Debug_events\V3alpha\AddedEvent|null
     */
    public function getAdd()
    {
        return $this->readOneof(1);
    }

    public function hasAdd()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.debug_events.v3alpha.AddedEvent add = 1 [json_name = "add"];</code>
     * @param \Zitadel\Resources\Debug_events\V3alpha\AddedEvent $var
     * @return $this
     */
    public function setAdd($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Debug_events\V3alpha\AddedEvent::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.debug_events.v3alpha.ChangedEvent change = 2 [json_name = "change"];</code>
     * @return \Zitadel\Resources\Debug_events\V3alpha\ChangedEvent|null
     */
    public function getChange()
    {
        return $this->readOneof(2);
    }

    public function hasChange()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.debug_events.v3alpha.ChangedEvent change = 2 [json_name = "change"];</code>
     * @param \Zitadel\Resources\Debug_events\V3alpha\ChangedEvent $var
     * @return $this
     */
    public function setChange($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Debug_events\V3alpha\ChangedEvent::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.debug_events.v3alpha.RemovedEvent remove = 3 [json_name = "remove"];</code>
     * @return \Zitadel\Resources\Debug_events\V3alpha\RemovedEvent|null
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    public function hasRemove()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.debug_events.v3alpha.RemovedEvent remove = 3 [json_name = "remove"];</code>
     * @param \Zitadel\Resources\Debug_events\V3alpha\RemovedEvent $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Debug_events\V3alpha\RemovedEvent::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->whichOneof("event");
    }

}

