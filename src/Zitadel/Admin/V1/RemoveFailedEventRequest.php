<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.RemoveFailedEventRequest</code>
 */
class RemoveFailedEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string database = 1 [json_name = "database", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $database = '';
    /**
     * Generated from protobuf field <code>string view_name = 2 [json_name = "viewName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $view_name = '';
    /**
     * Generated from protobuf field <code>uint64 failed_sequence = 3 [json_name = "failedSequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $failed_sequence = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *     @type string $view_name
     *     @type int|string $failed_sequence
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string database = 1 [json_name = "database", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Generated from protobuf field <code>string database = 1 [json_name = "database", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string view_name = 2 [json_name = "viewName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getViewName()
    {
        return $this->view_name;
    }

    /**
     * Generated from protobuf field <code>string view_name = 2 [json_name = "viewName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setViewName($var)
    {
        GPBUtil::checkString($var, True);
        $this->view_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 failed_sequence = 3 [json_name = "failedSequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int|string
     */
    public function getFailedSequence()
    {
        return $this->failed_sequence;
    }

    /**
     * Generated from protobuf field <code>uint64 failed_sequence = 3 [json_name = "failedSequence", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailedSequence($var)
    {
        GPBUtil::checkUint64($var);
        $this->failed_sequence = $var;

        return $this;
    }

}

