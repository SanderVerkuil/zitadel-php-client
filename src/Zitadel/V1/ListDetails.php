<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/object.proto

namespace Zitadel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.v1.ListDetails</code>
 */
class ListDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 total_result = 1 [json_name = "totalResult", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $total_result = 0;
    /**
     * Generated from protobuf field <code>uint64 processed_sequence = 2 [json_name = "processedSequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $processed_sequence = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp view_timestamp = 3 [json_name = "viewTimestamp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $view_timestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total_result
     *     @type int|string $processed_sequence
     *     @type \Google\Protobuf\Timestamp $view_timestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Object_::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 total_result = 1 [json_name = "totalResult", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int|string
     */
    public function getTotalResult()
    {
        return $this->total_result;
    }

    /**
     * Generated from protobuf field <code>uint64 total_result = 1 [json_name = "totalResult", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>uint64 processed_sequence = 2 [json_name = "processedSequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int|string
     */
    public function getProcessedSequence()
    {
        return $this->processed_sequence;
    }

    /**
     * Generated from protobuf field <code>uint64 processed_sequence = 2 [json_name = "processedSequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setProcessedSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->processed_sequence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp view_timestamp = 3 [json_name = "viewTimestamp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getViewTimestamp()
    {
        return $this->view_timestamp;
    }

    public function hasViewTimestamp()
    {
        return isset($this->view_timestamp);
    }

    public function clearViewTimestamp()
    {
        unset($this->view_timestamp);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp view_timestamp = 3 [json_name = "viewTimestamp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setViewTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->view_timestamp = $var;

        return $this;
    }

}

