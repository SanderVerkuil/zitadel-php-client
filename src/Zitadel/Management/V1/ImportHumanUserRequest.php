<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describe my Import Human User Request
 *
 * Generated from protobuf message <code>zitadel.management.v1.ImportHumanUserRequest</code>
 */
class ImportHumanUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_name = 1 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_name = '';
    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Profile profile = 2 [json_name = "profile", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     */
    protected $profile = null;
    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Email email = 3 [json_name = "email", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     */
    protected $email = null;
    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Phone phone = 4 [json_name = "phone"];</code>
     */
    protected $phone = null;
    /**
     * Generated from protobuf field <code>string password = 5 [json_name = "password"];</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.HashedPassword hashed_password = 6 [json_name = "hashedPassword"];</code>
     */
    protected $hashed_password = null;
    /**
     * Generated from protobuf field <code>bool password_change_required = 7 [json_name = "passwordChangeRequired", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $password_change_required = false;
    /**
     * Generated from protobuf field <code>bool request_passwordless_registration = 8 [json_name = "requestPasswordlessRegistration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $request_passwordless_registration = false;
    /**
     * Generated from protobuf field <code>string otp_code = 9 [json_name = "otpCode"];</code>
     */
    protected $otp_code = '';
    /**
     * Generated from protobuf field <code>repeated .zitadel.management.v1.ImportHumanUserRequest.IDP idps = 10 [json_name = "idps", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $idps;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_name
     *     @type \Zitadel\Management\V1\ImportHumanUserRequest\Profile $profile
     *     @type \Zitadel\Management\V1\ImportHumanUserRequest\Email $email
     *     @type \Zitadel\Management\V1\ImportHumanUserRequest\Phone $phone
     *     @type string $password
     *     @type \Zitadel\Management\V1\ImportHumanUserRequest\HashedPassword $hashed_password
     *     @type bool $password_change_required
     *     @type bool $request_passwordless_registration
     *     @type string $otp_code
     *     @type array<\Zitadel\Management\V1\ImportHumanUserRequest\IDP>|\Google\Protobuf\Internal\RepeatedField $idps
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_name = 1 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Generated from protobuf field <code>string user_name = 1 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Profile profile = 2 [json_name = "profile", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @return \Zitadel\Management\V1\ImportHumanUserRequest\Profile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Profile profile = 2 [json_name = "profile", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @param \Zitadel\Management\V1\ImportHumanUserRequest\Profile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Management\V1\ImportHumanUserRequest\Profile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Email email = 3 [json_name = "email", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @return \Zitadel\Management\V1\ImportHumanUserRequest\Email|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function hasEmail()
    {
        return isset($this->email);
    }

    public function clearEmail()
    {
        unset($this->email);
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Email email = 3 [json_name = "email", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @param \Zitadel\Management\V1\ImportHumanUserRequest\Email $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Management\V1\ImportHumanUserRequest\Email::class);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Phone phone = 4 [json_name = "phone"];</code>
     * @return \Zitadel\Management\V1\ImportHumanUserRequest\Phone|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function hasPhone()
    {
        return isset($this->phone);
    }

    public function clearPhone()
    {
        unset($this->phone);
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.Phone phone = 4 [json_name = "phone"];</code>
     * @param \Zitadel\Management\V1\ImportHumanUserRequest\Phone $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Management\V1\ImportHumanUserRequest\Phone::class);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 5 [json_name = "password"];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 5 [json_name = "password"];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.HashedPassword hashed_password = 6 [json_name = "hashedPassword"];</code>
     * @return \Zitadel\Management\V1\ImportHumanUserRequest\HashedPassword|null
     */
    public function getHashedPassword()
    {
        return $this->hashed_password;
    }

    public function hasHashedPassword()
    {
        return isset($this->hashed_password);
    }

    public function clearHashedPassword()
    {
        unset($this->hashed_password);
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.ImportHumanUserRequest.HashedPassword hashed_password = 6 [json_name = "hashedPassword"];</code>
     * @param \Zitadel\Management\V1\ImportHumanUserRequest\HashedPassword $var
     * @return $this
     */
    public function setHashedPassword($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Management\V1\ImportHumanUserRequest\HashedPassword::class);
        $this->hashed_password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool password_change_required = 7 [json_name = "passwordChangeRequired", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getPasswordChangeRequired()
    {
        return $this->password_change_required;
    }

    /**
     * Generated from protobuf field <code>bool password_change_required = 7 [json_name = "passwordChangeRequired", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setPasswordChangeRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->password_change_required = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool request_passwordless_registration = 8 [json_name = "requestPasswordlessRegistration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getRequestPasswordlessRegistration()
    {
        return $this->request_passwordless_registration;
    }

    /**
     * Generated from protobuf field <code>bool request_passwordless_registration = 8 [json_name = "requestPasswordlessRegistration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setRequestPasswordlessRegistration($var)
    {
        GPBUtil::checkBool($var);
        $this->request_passwordless_registration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string otp_code = 9 [json_name = "otpCode"];</code>
     * @return string
     */
    public function getOtpCode()
    {
        return $this->otp_code;
    }

    /**
     * Generated from protobuf field <code>string otp_code = 9 [json_name = "otpCode"];</code>
     * @param string $var
     * @return $this
     */
    public function setOtpCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->otp_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.management.v1.ImportHumanUserRequest.IDP idps = 10 [json_name = "idps", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdps()
    {
        return $this->idps;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.management.v1.ImportHumanUserRequest.IDP idps = 10 [json_name = "idps", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Zitadel\Management\V1\ImportHumanUserRequest\IDP>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Management\V1\ImportHumanUserRequest\IDP::class);
        $this->idps = $arr;

        return $this;
    }

}

