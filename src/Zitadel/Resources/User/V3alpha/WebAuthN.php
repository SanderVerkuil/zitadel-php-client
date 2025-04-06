<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/authenticator.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.WebAuthN</code>
 */
class WebAuthN extends \Google\Protobuf\Internal\Message
{
    /**
     * unique identifier of the WebAuthN authenticator.
     *
     * Generated from protobuf field <code>string web_auth_n_id = 1 [json_name = "webAuthNId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $web_auth_n_id = '';
    /**
     * Name of the WebAuthN authenticator. This is used for easier identification.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * State whether the WebAuthN registration has been completed.
     *
     * Generated from protobuf field <code>bool is_verified = 3 [json_name = "isVerified"];</code>
     */
    protected $is_verified = false;
    /**
     * States if the user has been verified during the registration. Authentication with this device
     * will be considered as multi-factor authentication (MFA) without the need to check a password
     * (typically known as Passkeys).
     * Without user verification it will be a second factor authentication (2FA), typically done
     * after a password check.
     * More on WebAuthN User Verification: https://www.w3.org/TR/webauthn/#user-verification
     *
     * Generated from protobuf field <code>bool user_verified = 4 [json_name = "userVerified"];</code>
     */
    protected $user_verified = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $web_auth_n_id
     *           unique identifier of the WebAuthN authenticator.
     *     @type string $name
     *           Name of the WebAuthN authenticator. This is used for easier identification.
     *     @type bool $is_verified
     *           State whether the WebAuthN registration has been completed.
     *     @type bool $user_verified
     *           States if the user has been verified during the registration. Authentication with this device
     *           will be considered as multi-factor authentication (MFA) without the need to check a password
     *           (typically known as Passkeys).
     *           Without user verification it will be a second factor authentication (2FA), typically done
     *           after a password check.
     *           More on WebAuthN User Verification: https://www.w3.org/TR/webauthn/#user-verification
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Authenticator::initOnce();
        parent::__construct($data);
    }

    /**
     * unique identifier of the WebAuthN authenticator.
     *
     * Generated from protobuf field <code>string web_auth_n_id = 1 [json_name = "webAuthNId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getWebAuthNId()
    {
        return $this->web_auth_n_id;
    }

    /**
     * unique identifier of the WebAuthN authenticator.
     *
     * Generated from protobuf field <code>string web_auth_n_id = 1 [json_name = "webAuthNId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWebAuthNId($var)
    {
        GPBUtil::checkString($var, True);
        $this->web_auth_n_id = $var;

        return $this;
    }

    /**
     * Name of the WebAuthN authenticator. This is used for easier identification.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the WebAuthN authenticator. This is used for easier identification.
     *
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
     * State whether the WebAuthN registration has been completed.
     *
     * Generated from protobuf field <code>bool is_verified = 3 [json_name = "isVerified"];</code>
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->is_verified;
    }

    /**
     * State whether the WebAuthN registration has been completed.
     *
     * Generated from protobuf field <code>bool is_verified = 3 [json_name = "isVerified"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->is_verified = $var;

        return $this;
    }

    /**
     * States if the user has been verified during the registration. Authentication with this device
     * will be considered as multi-factor authentication (MFA) without the need to check a password
     * (typically known as Passkeys).
     * Without user verification it will be a second factor authentication (2FA), typically done
     * after a password check.
     * More on WebAuthN User Verification: https://www.w3.org/TR/webauthn/#user-verification
     *
     * Generated from protobuf field <code>bool user_verified = 4 [json_name = "userVerified"];</code>
     * @return bool
     */
    public function getUserVerified()
    {
        return $this->user_verified;
    }

    /**
     * States if the user has been verified during the registration. Authentication with this device
     * will be considered as multi-factor authentication (MFA) without the need to check a password
     * (typically known as Passkeys).
     * Without user verification it will be a second factor authentication (2FA), typically done
     * after a password check.
     * More on WebAuthN User Verification: https://www.w3.org/TR/webauthn/#user-verification
     *
     * Generated from protobuf field <code>bool user_verified = 4 [json_name = "userVerified"];</code>
     * @param bool $var
     * @return $this
     */
    public function setUserVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->user_verified = $var;

        return $this;
    }

}

