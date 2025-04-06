<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp.proto

namespace Zitadel\Idp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.idp.v1.GitHubEnterpriseServerConfig</code>
 */
class GitHubEnterpriseServerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string authorization_endpoint = 2 [json_name = "authorizationEndpoint"];</code>
     */
    protected $authorization_endpoint = '';
    /**
     * Generated from protobuf field <code>string token_endpoint = 3 [json_name = "tokenEndpoint"];</code>
     */
    protected $token_endpoint = '';
    /**
     * Generated from protobuf field <code>string user_endpoint = 4 [json_name = "userEndpoint"];</code>
     */
    protected $user_endpoint = '';
    /**
     * Generated from protobuf field <code>repeated string scopes = 5 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $scopes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_id
     *     @type string $authorization_endpoint
     *     @type string $token_endpoint
     *     @type string $user_endpoint
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Idp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 1 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string authorization_endpoint = 2 [json_name = "authorizationEndpoint"];</code>
     * @return string
     */
    public function getAuthorizationEndpoint()
    {
        return $this->authorization_endpoint;
    }

    /**
     * Generated from protobuf field <code>string authorization_endpoint = 2 [json_name = "authorizationEndpoint"];</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizationEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorization_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token_endpoint = 3 [json_name = "tokenEndpoint"];</code>
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->token_endpoint;
    }

    /**
     * Generated from protobuf field <code>string token_endpoint = 3 [json_name = "tokenEndpoint"];</code>
     * @param string $var
     * @return $this
     */
    public function setTokenEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_endpoint = 4 [json_name = "userEndpoint"];</code>
     * @return string
     */
    public function getUserEndpoint()
    {
        return $this->user_endpoint;
    }

    /**
     * Generated from protobuf field <code>string user_endpoint = 4 [json_name = "userEndpoint"];</code>
     * @param string $var
     * @return $this
     */
    public function setUserEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 5 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 5 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

}

