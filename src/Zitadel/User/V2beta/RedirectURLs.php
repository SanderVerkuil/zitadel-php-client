<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/idp.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2beta.RedirectURLs</code>
 */
class RedirectURLs extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string success_url = 1 [json_name = "successUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $success_url = '';
    /**
     * Generated from protobuf field <code>string failure_url = 2 [json_name = "failureUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $failure_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $success_url
     *     @type string $failure_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\Idp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string success_url = 1 [json_name = "successUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->success_url;
    }

    /**
     * Generated from protobuf field <code>string success_url = 1 [json_name = "successUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSuccessUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->success_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string failure_url = 2 [json_name = "failureUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getFailureUrl()
    {
        return $this->failure_url;
    }

    /**
     * Generated from protobuf field <code>string failure_url = 2 [json_name = "failureUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFailureUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_url = $var;

        return $this;
    }

}

