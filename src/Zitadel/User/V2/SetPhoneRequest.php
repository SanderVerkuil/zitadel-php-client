<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.SetPhoneRequest</code>
 */
class SetPhoneRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string phone = 2 [json_name = "phone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $phone = '';
    protected $verification;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type string $phone
     *     @type \Zitadel\User\V2\SendPhoneVerificationCode $send_code
     *     @type \Zitadel\User\V2\ReturnPhoneVerificationCode $return_code
     *     @type bool $is_verified
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone = 2 [json_name = "phone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 2 [json_name = "phone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>.zitadel.user.v2.SendPhoneVerificationCode send_code = 3 [json_name = "sendCode"];</code>
     * @return \Zitadel\User\V2\SendPhoneVerificationCode|null
     */
    public function getSendCode()
    {
        return $this->readOneof(3);
    }

    public function hasSendCode()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.SendPhoneVerificationCode send_code = 3 [json_name = "sendCode"];</code>
     * @param \Zitadel\User\V2\SendPhoneVerificationCode $var
     * @return $this
     */
    public function setSendCode($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\SendPhoneVerificationCode::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.ReturnPhoneVerificationCode return_code = 4 [json_name = "returnCode"];</code>
     * @return \Zitadel\User\V2\ReturnPhoneVerificationCode|null
     */
    public function getReturnCode()
    {
        return $this->readOneof(4);
    }

    public function hasReturnCode()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.ReturnPhoneVerificationCode return_code = 4 [json_name = "returnCode"];</code>
     * @param \Zitadel\User\V2\ReturnPhoneVerificationCode $var
     * @return $this
     */
    public function setReturnCode($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\ReturnPhoneVerificationCode::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_verified = 5 [json_name = "isVerified", (.validate.rules) = {</code>
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->readOneof(5);
    }

    public function hasIsVerified()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>bool is_verified = 5 [json_name = "isVerified", (.validate.rules) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getVerification()
    {
        return $this->whichOneof("verification");
    }

}

