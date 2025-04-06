<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/session_service.proto

namespace Zitadel\Session\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.session.v2.Checks</code>
 */
class Checks extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckUser user = 1 [json_name = "user", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckPassword password = 2 [json_name = "password", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $password = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckWebAuthN web_auth_n = 3 [json_name = "webAuthN", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $web_auth_n = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckIDPIntent idp_intent = 4 [json_name = "idpIntent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $idp_intent = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckTOTP totp = 5 [json_name = "totp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $totp = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckOTP otp_sms = 6 [json_name = "otpSms", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $otp_sms = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckOTP otp_email = 7 [json_name = "otpEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $otp_email = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Session\V2\CheckUser $user
     *     @type \Zitadel\Session\V2\CheckPassword $password
     *     @type \Zitadel\Session\V2\CheckWebAuthN $web_auth_n
     *     @type \Zitadel\Session\V2\CheckIDPIntent $idp_intent
     *     @type \Zitadel\Session\V2\CheckTOTP $totp
     *     @type \Zitadel\Session\V2\CheckOTP $otp_sms
     *     @type \Zitadel\Session\V2\CheckOTP $otp_email
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2\SessionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckUser user = 1 [json_name = "user", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Session\V2\CheckUser|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckUser user = 1 [json_name = "user", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Session\V2\CheckUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\CheckUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckPassword password = 2 [json_name = "password", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Session\V2\CheckPassword|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function hasPassword()
    {
        return isset($this->password);
    }

    public function clearPassword()
    {
        unset($this->password);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckPassword password = 2 [json_name = "password", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Session\V2\CheckPassword $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\CheckPassword::class);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckWebAuthN web_auth_n = 3 [json_name = "webAuthN", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Session\V2\CheckWebAuthN|null
     */
    public function getWebAuthN()
    {
        return $this->web_auth_n;
    }

    public function hasWebAuthN()
    {
        return isset($this->web_auth_n);
    }

    public function clearWebAuthN()
    {
        unset($this->web_auth_n);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckWebAuthN web_auth_n = 3 [json_name = "webAuthN", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Session\V2\CheckWebAuthN $var
     * @return $this
     */
    public function setWebAuthN($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\CheckWebAuthN::class);
        $this->web_auth_n = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckIDPIntent idp_intent = 4 [json_name = "idpIntent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Session\V2\CheckIDPIntent|null
     */
    public function getIdpIntent()
    {
        return $this->idp_intent;
    }

    public function hasIdpIntent()
    {
        return isset($this->idp_intent);
    }

    public function clearIdpIntent()
    {
        unset($this->idp_intent);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckIDPIntent idp_intent = 4 [json_name = "idpIntent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Session\V2\CheckIDPIntent $var
     * @return $this
     */
    public function setIdpIntent($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\CheckIDPIntent::class);
        $this->idp_intent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckTOTP totp = 5 [json_name = "totp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Session\V2\CheckTOTP|null
     */
    public function getTotp()
    {
        return $this->totp;
    }

    public function hasTotp()
    {
        return isset($this->totp);
    }

    public function clearTotp()
    {
        unset($this->totp);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckTOTP totp = 5 [json_name = "totp", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Session\V2\CheckTOTP $var
     * @return $this
     */
    public function setTotp($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\CheckTOTP::class);
        $this->totp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckOTP otp_sms = 6 [json_name = "otpSms", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Session\V2\CheckOTP|null
     */
    public function getOtpSms()
    {
        return $this->otp_sms;
    }

    public function hasOtpSms()
    {
        return isset($this->otp_sms);
    }

    public function clearOtpSms()
    {
        unset($this->otp_sms);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckOTP otp_sms = 6 [json_name = "otpSms", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Session\V2\CheckOTP $var
     * @return $this
     */
    public function setOtpSms($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\CheckOTP::class);
        $this->otp_sms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckOTP otp_email = 7 [json_name = "otpEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Session\V2\CheckOTP|null
     */
    public function getOtpEmail()
    {
        return $this->otp_email;
    }

    public function hasOtpEmail()
    {
        return isset($this->otp_email);
    }

    public function clearOtpEmail()
    {
        unset($this->otp_email);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.session.v2.CheckOTP otp_email = 7 [json_name = "otpEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Session\V2\CheckOTP $var
     * @return $this
     */
    public function setOtpEmail($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\CheckOTP::class);
        $this->otp_email = $var;

        return $this;
    }

}

