<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.UpdateJWTProviderRequest</code>
 */
class UpdateJWTProviderRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string issuer = 3 [json_name = "issuer", (.validate.rules) = {</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>string jwt_endpoint = 4 [json_name = "jwtEndpoint", (.validate.rules) = {</code>
     */
    protected $jwt_endpoint = '';
    /**
     * Generated from protobuf field <code>string keys_endpoint = 5 [json_name = "keysEndpoint", (.validate.rules) = {</code>
     */
    protected $keys_endpoint = '';
    /**
     * Generated from protobuf field <code>string header_name = 6 [json_name = "headerName", (.validate.rules) = {</code>
     */
    protected $header_name = '';
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
     *     @type string $id
     *     @type string $name
     *     @type string $issuer
     *     @type string $jwt_endpoint
     *     @type string $keys_endpoint
     *     @type string $header_name
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
     * Generated from protobuf field <code>string issuer = 3 [json_name = "issuer", (.validate.rules) = {</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Generated from protobuf field <code>string issuer = 3 [json_name = "issuer", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string jwt_endpoint = 4 [json_name = "jwtEndpoint", (.validate.rules) = {</code>
     * @return string
     */
    public function getJwtEndpoint()
    {
        return $this->jwt_endpoint;
    }

    /**
     * Generated from protobuf field <code>string jwt_endpoint = 4 [json_name = "jwtEndpoint", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setJwtEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->jwt_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string keys_endpoint = 5 [json_name = "keysEndpoint", (.validate.rules) = {</code>
     * @return string
     */
    public function getKeysEndpoint()
    {
        return $this->keys_endpoint;
    }

    /**
     * Generated from protobuf field <code>string keys_endpoint = 5 [json_name = "keysEndpoint", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKeysEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->keys_endpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string header_name = 6 [json_name = "headerName", (.validate.rules) = {</code>
     * @return string
     */
    public function getHeaderName()
    {
        return $this->header_name;
    }

    /**
     * Generated from protobuf field <code>string header_name = 6 [json_name = "headerName", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->header_name = $var;

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

