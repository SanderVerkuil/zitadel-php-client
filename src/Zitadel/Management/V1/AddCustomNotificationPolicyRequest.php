<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddCustomNotificationPolicyRequest</code>
 */
class AddCustomNotificationPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool password_change = 1 [json_name = "passwordChange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $password_change = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $password_change
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool password_change = 1 [json_name = "passwordChange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getPasswordChange()
    {
        return $this->password_change;
    }

    /**
     * Generated from protobuf field <code>bool password_change = 1 [json_name = "passwordChange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setPasswordChange($var)
    {
        GPBUtil::checkBool($var);
        $this->password_change = $var;

        return $this;
    }

}

