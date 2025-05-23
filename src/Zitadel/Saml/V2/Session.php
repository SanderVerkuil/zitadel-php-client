<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/saml/v2/saml_service.proto

namespace Zitadel\Saml\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.saml.v2.Session</code>
 */
class Session extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the session, used to login the user. Connects the session to the SAML Request.
     *
     * Generated from protobuf field <code>string session_id = 1 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $session_id = '';
    /**
     * Token to verify the session is valid.
     *
     * Generated from protobuf field <code>string session_token = 2 [json_name = "sessionToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $session_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *           ID of the session, used to login the user. Connects the session to the SAML Request.
     *     @type string $session_token
     *           Token to verify the session is valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Saml\V2\SamlService::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the session, used to login the user. Connects the session to the SAML Request.
     *
     * Generated from protobuf field <code>string session_id = 1 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * ID of the session, used to login the user. Connects the session to the SAML Request.
     *
     * Generated from protobuf field <code>string session_id = 1 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Token to verify the session is valid.
     *
     * Generated from protobuf field <code>string session_token = 2 [json_name = "sessionToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSessionToken()
    {
        return $this->session_token;
    }

    /**
     * Token to verify the session is valid.
     *
     * Generated from protobuf field <code>string session_token = 2 [json_name = "sessionToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSessionToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_token = $var;

        return $this;
    }

}

