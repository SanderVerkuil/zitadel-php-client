<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddAppleProviderRequest</code>
 */
class AddAppleProviderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Apple will be used as default, if no name is provided
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string client_id = 2 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string team_id = 3 [json_name = "teamId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $team_id = '';
    /**
     * Generated from protobuf field <code>string key_id = 4 [json_name = "keyId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $key_id = '';
    /**
     * Generated from protobuf field <code>bytes private_key = 5 [json_name = "privateKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $private_key = '';
    /**
     * Generated from protobuf field <code>repeated string scopes = 6 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $scopes;
    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 7 [json_name = "providerOptions"];</code>
     */
    protected $provider_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Apple will be used as default, if no name is provided
     *     @type string $client_id
     *     @type string $team_id
     *     @type string $key_id
     *     @type string $private_key
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *     @type \Zitadel\Idp\V1\Options $provider_options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Apple will be used as default, if no name is provided
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Apple will be used as default, if no name is provided
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string client_id = 2 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 2 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string team_id = 3 [json_name = "teamId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * Generated from protobuf field <code>string team_id = 3 [json_name = "teamId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTeamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->team_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key_id = 4 [json_name = "keyId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * Generated from protobuf field <code>string key_id = 4 [json_name = "keyId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes private_key = 5 [json_name = "privateKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Generated from protobuf field <code>bytes private_key = 5 [json_name = "privateKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->private_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 6 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 6 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 7 [json_name = "providerOptions"];</code>
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
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 7 [json_name = "providerOptions"];</code>
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

