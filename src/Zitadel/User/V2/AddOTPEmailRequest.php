<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.AddOTPEmailRequest</code>
 */
class AddOTPEmailRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

}

