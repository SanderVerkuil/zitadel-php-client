<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.UpdateGitHubEnterpriseServerProviderRequest</code>
 */
class UpdateGitHubEnterpriseServerProviderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string client_id = 3 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $client_id = '';
    /**
     * client_secret will only be updated if provided
     *
     * Generated from protobuf field <code>string client_secret = 4 [json_name = "clientSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $client_secret = '';
    /**
     * Generated from protobuf field <code>string authorization_endpoint = 5 [json_name = "authorizationEndpoint", (.validate.rules) = {</code>
     */
    protected $authorization_endpoint = '';
    /**
     * Generated from protobuf field <code>string token_endpoint = 6 [json_name = "tokenEndpoint", (.validate.rules) = {</code>
     */
    protected $token_endpoint = '';
    /**
     * Generated from protobuf field <code>string user_endpoint = 7 [json_name = "userEndpoint", (.validate.rules) = {</code>
     */
    protected $user_endpoint = '';
    /**
     * Generated from protobuf field <code>repeated string scopes = 8 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $scopes;
    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 9 [json_name = "providerOptions"];</code>
     */
    protected $provider_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type string $client_id
     *     @type string $client_secret
     *           client_secret will only be updated if provided
     *     @type string $authorization_endpoint
     *     @type string $token_endpoint
     *     @type string $user_endpoint
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *     @type \Zitadel\Idp\V1\Options $provider_options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
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
     * Generated from protobuf field <code>string client_id = 3 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 3 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * client_secret will only be updated if provided
     *
     * Generated from protobuf field <code>string client_secret = 4 [json_name = "clientSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * client_secret will only be updated if provided
     *
     * Generated from protobuf field <code>string client_secret = 4 [json_name = "clientSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setClientSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string authorization_endpoint = 5 [json_name = "authorizationEndpoint", (.validate.rules) = {</code>
     * @return string
     */
    public function getAuthorizationEndpoint()
    {
        return $this->authorization_endpoint;
    }

    /**
     * Generated from protobuf field <code>string authorization_endpoint = 5 [json_name = "authorizationEndpoint", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string token_endpoint = 6 [json_name = "tokenEndpoint", (.validate.rules) = {</code>
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->token_endpoint;
    }

    /**
     * Generated from protobuf field <code>string token_endpoint = 6 [json_name = "tokenEndpoint", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string user_endpoint = 7 [json_name = "userEndpoint", (.validate.rules) = {</code>
     * @return string
     */
    public function getUserEndpoint()
    {
        return $this->user_endpoint;
    }

    /**
     * Generated from protobuf field <code>string user_endpoint = 7 [json_name = "userEndpoint", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>repeated string scopes = 8 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 8 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 9 [json_name = "providerOptions"];</code>
     * @return \Zitadel\Idp\V1\Options|null
     */
    public function getProviderOptions()
    {
        return $this->provider_options;
    }

    public function hasProviderOptions()
    {
        return isset($this->provider_options);
    }

    public function clearProviderOptions()
    {
        unset($this->provider_options);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 9 [json_name = "providerOptions"];</code>
     * @param \Zitadel\Idp\V1\Options $var
     * @return $this
     */
    public function setProviderOptions($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V1\Options::class);
        $this->provider_options = $var;

        return $this;
    }

}

