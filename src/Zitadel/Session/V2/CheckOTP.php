<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/session_service.proto

namespace Zitadel\Session\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.session.v2.CheckOTP</code>
 */
class CheckOTP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string code = 1 [json_name = "code", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2\SessionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string code = 1 [json_name = "code", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 1 [json_name = "code", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

}

