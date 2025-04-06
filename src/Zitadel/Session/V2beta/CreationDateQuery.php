<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2beta/session.proto

namespace Zitadel\Session\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.session.v2beta.CreationDateQuery</code>
 */
class CreationDateQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_date = 1 [json_name = "creationDate"];</code>
     */
    protected $creation_date = null;
    /**
     * Generated from protobuf field <code>.zitadel.v1.TimestampQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $method = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $creation_date
     *     @type int $method
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2Beta\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_date = 1 [json_name = "creationDate"];</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_date = 1 [json_name = "creationDate"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->creation_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.TimestampQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.TimestampQueryMethod method = 2 [json_name = "method", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\V1\TimestampQueryMethod::class);
        $this->method = $var;

        return $this;
    }

}

