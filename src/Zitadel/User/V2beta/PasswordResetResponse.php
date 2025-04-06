<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/user_service.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2beta.PasswordResetResponse</code>
 */
class PasswordResetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * in case the medium was set to return_code, the code will be returned
     *
     * Generated from protobuf field <code>optional string verification_code = 2 [json_name = "verificationCode"];</code>
     */
    protected $verification_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2beta\Details $details
     *     @type string $verification_code
     *           in case the medium was set to return_code, the code will be returned
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2beta\Details|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2beta\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2beta\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * in case the medium was set to return_code, the code will be returned
     *
     * Generated from protobuf field <code>optional string verification_code = 2 [json_name = "verificationCode"];</code>
     * @return string
     */
    public function getVerificationCode()
    {
        return isset($this->verification_code) ? $this->verification_code : '';
    }

    public function hasVerificationCode()
    {
        return isset($this->verification_code);
    }

    public function clearVerificationCode()
    {
        unset($this->verification_code);
    }

    /**
     * in case the medium was set to return_code, the code will be returned
     *
     * Generated from protobuf field <code>optional string verification_code = 2 [json_name = "verificationCode"];</code>
     * @param string $var
     * @return $this
     */
    public function setVerificationCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->verification_code = $var;

        return $this;
    }

}

