<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.AddGoogleProviderRequest</code>
 */
class AddGoogleProviderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Google will be used as default, if no name is provided
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string client_id = 2 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>string client_secret = 3 [json_name = "clientSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $client_secret = '';
    /**
     * Generated from protobuf field <code>repeated string scopes = 4 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $scopes;
    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 5 [json_name = "providerOptions"];</code>
     */
    protected $provider_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Google will be used as default, if no name is provided
     *     @type string $client_id
     *     @type string $client_secret
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *     @type \Zitadel\Idp\V1\Options $provider_options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Google will be used as default, if no name is provided
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Google will be used as default, if no name is provided
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
     * Generated from protobuf field <code>string client_secret = 3 [json_name = "clientSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Generated from protobuf field <code>string client_secret = 3 [json_name = "clientSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>repeated string scopes = 4 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 4 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 5 [json_name = "providerOptions"];</code>
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
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 5 [json_name = "providerOptions"];</code>
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

