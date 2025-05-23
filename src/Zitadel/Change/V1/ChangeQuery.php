<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/change.proto

namespace Zitadel\Change\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.change.v1.ChangeQuery</code>
 */
class ChangeQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $sequence = 0;
    /**
     * Generated from protobuf field <code>uint32 limit = 2 [json_name = "limit", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $limit = 0;
    /**
     * Generated from protobuf field <code>bool asc = 3 [json_name = "asc", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $asc = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sequence
     *     @type int $limit
     *     @type bool $asc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Change::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 sequence = 1 [json_name = "sequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
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
     * Generated from protobuf field <code>uint32 limit = 2 [json_name = "limit", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>uint32 limit = 2 [json_name = "limit", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool asc = 3 [json_name = "asc", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getAsc()
    {
        return $this->asc;
    }

    /**
     * Generated from protobuf field <code>bool asc = 3 [json_name = "asc", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setAsc($var)
    {
        GPBUtil::checkBool($var);
        $this->asc = $var;

        return $this;
    }

}

