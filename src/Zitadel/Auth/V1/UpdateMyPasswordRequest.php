<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/auth.proto

namespace Zitadel\Auth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.auth.v1.UpdateMyPasswordRequest</code>
 */
class UpdateMyPasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string old_password = 1 [json_name = "oldPassword", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $old_password = '';
    /**
     * Generated from protobuf field <code>string new_password = 2 [json_name = "newPassword", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $new_password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $old_password
     *     @type string $new_password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string old_password = 1 [json_name = "oldPassword", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getOldPassword()
    {
        return $this->old_password;
    }

    /**
     * Generated from protobuf field <code>string old_password = 1 [json_name = "oldPassword", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOldPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->old_password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string new_password = 2 [json_name = "newPassword", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getNewPassword()
    {
        return $this->new_password;
    }

    /**
     * Generated from protobuf field <code>string new_password = 2 [json_name = "newPassword", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_password = $var;

        return $this;
    }

}

