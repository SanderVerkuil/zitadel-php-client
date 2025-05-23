<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/password.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2beta.SendPasswordResetLink</code>
 */
class SendPasswordResetLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.NotificationType notification_type = 1 [json_name = "notificationType"];</code>
     */
    protected $notification_type = 0;
    /**
     * Generated from protobuf field <code>optional string url_template = 2 [json_name = "urlTemplate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $url_template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $notification_type
     *     @type string $url_template
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\Password::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.NotificationType notification_type = 1 [json_name = "notificationType"];</code>
     * @return int
     */
    public function getNotificationType()
    {
        return $this->notification_type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.NotificationType notification_type = 1 [json_name = "notificationType"];</code>
     * @param int $var
     * @return $this
     */
    public function setNotificationType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\User\V2beta\NotificationType::class);
        $this->notification_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string url_template = 2 [json_name = "urlTemplate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUrlTemplate()
    {
        return isset($this->url_template) ? $this->url_template : '';
    }

    public function hasUrlTemplate()
    {
        return isset($this->url_template);
    }

    public function clearUrlTemplate()
    {
        unset($this->url_template);
    }

    /**
     * Generated from protobuf field <code>optional string url_template = 2 [json_name = "urlTemplate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUrlTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_template = $var;

        return $this;
    }

}

