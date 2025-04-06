<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.VerifyPasskeyRegistrationRequest</code>
 */
class VerifyPasskeyRegistrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string passkey_id = 2 [json_name = "passkeyId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $passkey_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct public_key_credential = 3 [json_name = "publicKeyCredential", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $public_key_credential = null;
    /**
     * Generated from protobuf field <code>string passkey_name = 4 [json_name = "passkeyName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $passkey_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type string $passkey_id
     *     @type \Google\Protobuf\Struct $public_key_credential
     *     @type string $passkey_name
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
     * Generated from protobuf field <code>string passkey_id = 2 [json_name = "passkeyId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPasskeyId()
    {
        return $this->passkey_id;
    }

    /**
     * Generated from protobuf field <code>string passkey_id = 2 [json_name = "passkeyId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPasskeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->passkey_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct public_key_credential = 3 [json_name = "publicKeyCredential", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getPublicKeyCredential()
    {
        return $this->public_key_credential;
    }

    public function hasPublicKeyCredential()
    {
        return isset($this->public_key_credential);
    }

    public function clearPublicKeyCredential()
    {
        unset($this->public_key_credential);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct public_key_credential = 3 [json_name = "publicKeyCredential", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPublicKeyCredential($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->public_key_credential = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string passkey_name = 4 [json_name = "passkeyName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPasskeyName()
    {
        return $this->passkey_name;
    }

    /**
     * Generated from protobuf field <code>string passkey_name = 4 [json_name = "passkeyName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPasskeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->passkey_name = $var;

        return $this;
    }

}

