<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/object/v3alpha/object.proto

namespace Zitadel\Resources\Object\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.object.v3alpha.ListDetails</code>
 */
class ListDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 applied_limit = 1 [json_name = "appliedLimit", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $applied_limit = 0;
    /**
     * Generated from protobuf field <code>uint64 total_result = 2 [json_name = "totalResult", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $total_result = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3 [json_name = "timestamp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $timestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $applied_limit
     *     @type int|string $total_result
     *     @type \Google\Protobuf\Timestamp $timestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Object\V3Alpha\Object_::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 applied_limit = 1 [json_name = "appliedLimit", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int|string
     */
    public function getAppliedLimit()
    {
        return $this->applied_limit;
    }

    /**
     * Generated from protobuf field <code>uint64 applied_limit = 1 [json_name = "appliedLimit", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setAppliedLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->applied_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 total_result = 2 [json_name = "totalResult", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int|string
     */
    public function getTotalResult()
    {
        return $this->total_result;
    }

    /**
     * Generated from protobuf field <code>uint64 total_result = 2 [json_name = "totalResult", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalResult($var)
    {
        GPBUtil::checkUint64($var);
        $this->total_result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3 [json_name = "timestamp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3 [json_name = "timestamp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

}

