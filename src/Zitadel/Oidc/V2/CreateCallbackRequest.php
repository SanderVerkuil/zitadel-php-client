<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/oidc/v2/oidc_service.proto

namespace Zitadel\Oidc\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.oidc.v2.CreateCallbackRequest</code>
 */
class CreateCallbackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string auth_request_id = 1 [json_name = "authRequestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $auth_request_id = '';
    protected $callback_kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $auth_request_id
     *     @type \Zitadel\Oidc\V2\Session $session
     *     @type \Zitadel\Oidc\V2\AuthorizationError $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Oidc\V2\OidcService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string auth_request_id = 1 [json_name = "authRequestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getAuthRequestId()
    {
        return $this->auth_request_id;
    }

    /**
     * Generated from protobuf field <code>string auth_request_id = 1 [json_name = "authRequestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAuthRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->auth_request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.oidc.v2.Session session = 2 [json_name = "session"];</code>
     * @return \Zitadel\Oidc\V2\Session|null
     */
    public function getSession()
    {
        return $this->readOneof(2);
    }

    public function hasSession()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.oidc.v2.Session session = 2 [json_name = "session"];</code>
     * @param \Zitadel\Oidc\V2\Session $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Oidc\V2\Session::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.oidc.v2.AuthorizationError error = 3 [json_name = "error", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Oidc\V2\AuthorizationError|null
     */
    public function getError()
    {
        return $this->readOneof(3);
    }

    public function hasError()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.oidc.v2.AuthorizationError error = 3 [json_name = "error", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Oidc\V2\AuthorizationError $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Oidc\V2\AuthorizationError::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackKind()
    {
        return $this->whichOneof("callback_kind");
    }

}

