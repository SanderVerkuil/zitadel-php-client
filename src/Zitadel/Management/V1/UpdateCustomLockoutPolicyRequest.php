<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.UpdateCustomLockoutPolicyRequest</code>
 */
class UpdateCustomLockoutPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 max_password_attempts = 1 [json_name = "maxPasswordAttempts", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $max_password_attempts = 0;
    /**
     * Generated from protobuf field <code>uint32 max_otp_attempts = 2 [json_name = "maxOtpAttempts", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $max_otp_attempts = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_password_attempts
     *     @type int $max_otp_attempts
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 max_password_attempts = 1 [json_name = "maxPasswordAttempts", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getMaxPasswordAttempts()
    {
        return $this->max_password_attempts;
    }

    /**
     * Generated from protobuf field <code>uint32 max_password_attempts = 1 [json_name = "maxPasswordAttempts", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPasswordAttempts($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_password_attempts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_otp_attempts = 2 [json_name = "maxOtpAttempts", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getMaxOtpAttempts()
    {
        return $this->max_otp_attempts;
    }

    /**
     * Generated from protobuf field <code>uint32 max_otp_attempts = 2 [json_name = "maxOtpAttempts", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setMaxOtpAttempts($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_otp_attempts = $var;

        return $this;
    }

}

