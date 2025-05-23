<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp.proto

namespace Zitadel\Idp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.idp.v1.JWTConfig</code>
 */
class JWTConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string jwt_endpoint = 1 [json_name = "jwtEndpoint", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $jwt_endpoint = '';
    /**
     * Generated from protobuf field <code>string issuer = 2 [json_name = "issuer", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>string keys_endpoint = 3 [json_name = "keysEndpoint", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $keys_endpoint = '';
    /**
     * Generated from protobuf field <code>string header_name = 4 [json_name = "headerName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $header_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $jwt_endpoint
     *     @type string $issuer
     *     @type string $keys_endpoint
     *     @type string $header_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Idp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string jwt_endpoint = 1 [json_name = "jwtEndpoint", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getJwtEndpoint()
    {
        return $this->jwt_endpoint;
    }

    /**
     * Generated from protobuf field <code>string jwt_endpoint = 1 [json_name = "jwtEndpoint", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string issuer = 2 [json_name = "issuer", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Generated from protobuf field <code>string issuer = 2 [json_name = "issuer", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string keys_endpoint = 3 [json_name = "keysEndpoint", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getKeysEndpoint()
    {
        return $this->keys_endpoint;
    }

    /**
     * Generated from protobuf field <code>string keys_endpoint = 3 [json_name = "keysEndpoint", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string header_name = 4 [json_name = "headerName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getHeaderName()
    {
        return $this->header_name;
    }

    /**
     * Generated from protobuf field <code>string header_name = 4 [json_name = "headerName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->header_name = $var;

        return $this;
    }

}

