<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/oidc/v2/oidc_service.proto

namespace Zitadel\Oidc\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.oidc.v2.GetAuthRequestRequest</code>
 */
class GetAuthRequestRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string auth_request_id = 1 [json_name = "authRequestId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $auth_request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $auth_request_id
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

}

