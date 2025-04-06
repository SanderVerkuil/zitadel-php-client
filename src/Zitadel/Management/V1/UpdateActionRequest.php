<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.UpdateActionRequest</code>
 */
class UpdateActionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string script = 3 [json_name = "script", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $script = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 4 [json_name = "timeout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $timeout = null;
    /**
     * Generated from protobuf field <code>bool allowed_to_fail = 5 [json_name = "allowedToFail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $allowed_to_fail = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type string $script
     *     @type \Google\Protobuf\Duration $timeout
     *     @type bool $allowed_to_fail
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string script = 3 [json_name = "script", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Generated from protobuf field <code>string script = 3 [json_name = "script", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->script = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 4 [json_name = "timeout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 4 [json_name = "timeout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool allowed_to_fail = 5 [json_name = "allowedToFail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getAllowedToFail()
    {
        return $this->allowed_to_fail;
    }

    /**
     * Generated from protobuf field <code>bool allowed_to_fail = 5 [json_name = "allowedToFail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowedToFail($var)
    {
        GPBUtil::checkBool($var);
        $this->allowed_to_fail = $var;

        return $this;
    }

}

