<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/object/v2/object.proto

namespace Zitadel\Object\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.object.v2.Details</code>
 */
class Details extends \Google\Protobuf\Internal\Message
{
    /**
     *sequence represents the order of events. It's always counting
     * on read: the sequence of the last event reduced by the projection
     * on manipulation: the timestamp of the event(s) added by the manipulation
     *
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $sequence = 0;
    /**
     *change_date is the timestamp when the object was changed
     * on read: the timestamp of the last event reduced by the projection
     * on manipulation: the timestamp of the event(s) added by the manipulation
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp change_date = 2 [json_name = "changeDate"];</code>
     */
    protected $change_date = null;
    /**
     *resource_owner is the organization or instance_id an object belongs to
     *
     * Generated from protobuf field <code>string resource_owner = 3 [json_name = "resourceOwner", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $resource_owner = '';
    /**
     *creation_date is the timestamp where the first operation on the object was made
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_date = 4 [json_name = "creationDate"];</code>
     */
    protected $creation_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sequence
     *          sequence represents the order of events. It's always counting
     *           on read: the sequence of the last event reduced by the projection
     *           on manipulation: the timestamp of the event(s) added by the manipulation
     *     @type \Google\Protobuf\Timestamp $change_date
     *          change_date is the timestamp when the object was changed
     *           on read: the timestamp of the last event reduced by the projection
     *           on manipulation: the timestamp of the event(s) added by the manipulation
     *     @type string $resource_owner
     *          resource_owner is the organization or instance_id an object belongs to
     *     @type \Google\Protobuf\Timestamp $creation_date
     *          creation_date is the timestamp where the first operation on the object was made
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Object\V2\Object_::initOnce();
        parent::__construct($data);
    }

    /**
     *sequence represents the order of events. It's always counting
     * on read: the sequence of the last event reduced by the projection
     * on manipulation: the timestamp of the event(s) added by the manipulation
     *
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     *sequence represents the order of events. It's always counting
     * on read: the sequence of the last event reduced by the projection
     * on manipulation: the timestamp of the event(s) added by the manipulation
     *
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->sequence = $var;

        return $this;
    }

    /**
     *change_date is the timestamp when the object was changed
     * on read: the timestamp of the last event reduced by the projection
     * on manipulation: the timestamp of the event(s) added by the manipulation
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp change_date = 2 [json_name = "changeDate"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getChangeDate()
    {
        return $this->change_date;
    }

    public function hasChangeDate()
    {
        return isset($this->change_date);
    }

    public function clearChangeDate()
    {
        unset($this->change_date);
    }

    /**
     *change_date is the timestamp when the object was changed
     * on read: the timestamp of the last event reduced by the projection
     * on manipulation: the timestamp of the event(s) added by the manipulation
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp change_date = 2 [json_name = "changeDate"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setChangeDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->change_date = $var;

        return $this;
    }

    /**
     *resource_owner is the organization or instance_id an object belongs to
     *
     * Generated from protobuf field <code>string resource_owner = 3 [json_name = "resourceOwner", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getResourceOwner()
    {
        return $this->resource_owner;
    }

    /**
     *resource_owner is the organization or instance_id an object belongs to
     *
     * Generated from protobuf field <code>string resource_owner = 3 [json_name = "resourceOwner", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_owner = $var;

        return $this;
    }

    /**
     *creation_date is the timestamp where the first operation on the object was made
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_date = 4 [json_name = "creationDate"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    public function hasCreationDate()
    {
        return isset($this->creation_date);
    }

    public function clearCreationDate()
    {
        unset($this->creation_date);
    }

    /**
     *creation_date is the timestamp where the first operation on the object was made
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_date = 4 [json_name = "creationDate"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->creation_date = $var;

        return $this;
    }

}

