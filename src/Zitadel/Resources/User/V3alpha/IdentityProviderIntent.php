<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/authenticator.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.IdentityProviderIntent</code>
 */
class IdentityProviderIntent extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the identity provider (IDP) intent.
     *
     * Generated from protobuf field <code>string idp_intent_id = 1 [json_name = "idpIntentId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $idp_intent_id = '';
    /**
     * Token of the identity provider (IDP) intent.
     *
     * Generated from protobuf field <code>string idp_intent_token = 2 [json_name = "idpIntentToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $idp_intent_token = '';
    /**
     * If the user was already federated and linked to a ZITADEL user, it's id will be returned.
     *
     * Generated from protobuf field <code>optional string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $idp_intent_id
     *           ID of the identity provider (IDP) intent.
     *     @type string $idp_intent_token
     *           Token of the identity provider (IDP) intent.
     *     @type string $user_id
     *           If the user was already federated and linked to a ZITADEL user, it's id will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Authenticator::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the identity provider (IDP) intent.
     *
     * Generated from protobuf field <code>string idp_intent_id = 1 [json_name = "idpIntentId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIdpIntentId()
    {
        return $this->idp_intent_id;
    }

    /**
     * ID of the identity provider (IDP) intent.
     *
     * Generated from protobuf field <code>string idp_intent_id = 1 [json_name = "idpIntentId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIdpIntentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->idp_intent_id = $var;

        return $this;
    }

    /**
     * Token of the identity provider (IDP) intent.
     *
     * Generated from protobuf field <code>string idp_intent_token = 2 [json_name = "idpIntentToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIdpIntentToken()
    {
        return $this->idp_intent_token;
    }

    /**
     * Token of the identity provider (IDP) intent.
     *
     * Generated from protobuf field <code>string idp_intent_token = 2 [json_name = "idpIntentToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIdpIntentToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->idp_intent_token = $var;

        return $this;
    }

    /**
     * If the user was already federated and linked to a ZITADEL user, it's id will be returned.
     *
     * Generated from protobuf field <code>optional string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return isset($this->user_id) ? $this->user_id : '';
    }

    public function hasUserId()
    {
        return isset($this->user_id);
    }

    public function clearUserId()
    {
        unset($this->user_id);
    }

    /**
     * If the user was already federated and linked to a ZITADEL user, it's id will be returned.
     *
     * Generated from protobuf field <code>optional string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

}

