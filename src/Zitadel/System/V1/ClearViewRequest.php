<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/system.proto

namespace Zitadel\System\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.system.v1.ClearViewRequest</code>
 */
class ClearViewRequest extends \Google\Protobuf\Internal\Message
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *     @type string $view_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\System::initOnce();
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

}

