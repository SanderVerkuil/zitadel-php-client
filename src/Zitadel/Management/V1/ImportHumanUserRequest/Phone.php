<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1\ImportHumanUserRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ImportHumanUserRequest.Phone</code>
 */
class Phone extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string phone = 1 [json_name = "phone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $phone = '';
    /**
     * Generated from protobuf field <code>bool is_phone_verified = 2 [json_name = "isPhoneVerified"];</code>
     */
    protected $is_phone_verified = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone
     *     @type bool $is_phone_verified
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string phone = 1 [json_name = "phone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 1 [json_name = "phone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_phone_verified = 2 [json_name = "isPhoneVerified"];</code>
     * @return bool
     */
    public function getIsPhoneVerified()
    {
        return $this->is_phone_verified;
    }

    /**
     * Generated from protobuf field <code>bool is_phone_verified = 2 [json_name = "isPhoneVerified"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPhoneVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->is_phone_verified = $var;

        return $this;
    }

}

