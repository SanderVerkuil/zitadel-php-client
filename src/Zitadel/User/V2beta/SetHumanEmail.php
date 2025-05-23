<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/email.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2beta.SetHumanEmail</code>
 */
class SetHumanEmail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1 [json_name = "email", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $email = '';
    protected $verification;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *     @type \Zitadel\User\V2beta\SendEmailVerificationCode $send_code
     *     @type \Zitadel\User\V2beta\ReturnEmailVerificationCode $return_code
     *     @type bool $is_verified
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\Email::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email = 1 [json_name = "email", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 1 [json_name = "email", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SendEmailVerificationCode send_code = 2 [json_name = "sendCode"];</code>
     * @return \Zitadel\User\V2beta\SendEmailVerificationCode|null
     */
    public function getSendCode()
    {
        return $this->readOneof(2);
    }

    public function hasSendCode()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SendEmailVerificationCode send_code = 2 [json_name = "sendCode"];</code>
     * @param \Zitadel\User\V2beta\SendEmailVerificationCode $var
     * @return $this
     */
    public function setSendCode($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\SendEmailVerificationCode::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.ReturnEmailVerificationCode return_code = 3 [json_name = "returnCode"];</code>
     * @return \Zitadel\User\V2beta\ReturnEmailVerificationCode|null
     */
    public function getReturnCode()
    {
        return $this->readOneof(3);
    }

    public function hasReturnCode()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.ReturnEmailVerificationCode return_code = 3 [json_name = "returnCode"];</code>
     * @param \Zitadel\User\V2beta\ReturnEmailVerificationCode $var
     * @return $this
     */
    public function setReturnCode($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\ReturnEmailVerificationCode::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_verified = 4 [json_name = "isVerified", (.validate.rules) = {</code>
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->readOneof(4);
    }

    public function hasIsVerified()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>bool is_verified = 4 [json_name = "isVerified", (.validate.rules) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

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

