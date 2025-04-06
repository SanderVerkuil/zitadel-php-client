<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/security_settings.proto

namespace Zitadel\Settings\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2beta.SecuritySettings</code>
 */
class SecuritySettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.settings.v2beta.EmbeddedIframeSettings embedded_iframe = 1 [json_name = "embeddedIframe"];</code>
     */
    protected $embedded_iframe = null;
    /**
     * Generated from protobuf field <code>bool enable_impersonation = 2 [json_name = "enableImpersonation", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $enable_impersonation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Settings\V2beta\EmbeddedIframeSettings $embedded_iframe
     *     @type bool $enable_impersonation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2Beta\SecuritySettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v2beta.EmbeddedIframeSettings embedded_iframe = 1 [json_name = "embeddedIframe"];</code>
     * @return \Zitadel\Settings\V2beta\EmbeddedIframeSettings|null
     */
    public function getEmbeddedIframe()
    {
        return $this->embedded_iframe;
    }

    public function hasEmbeddedIframe()
    {
        return isset($this->embedded_iframe);
    }

    public function clearEmbeddedIframe()
    {
        unset($this->embedded_iframe);
    }

    /**
     * Generated from protobuf field <code>.zitadel.settings.v2beta.EmbeddedIframeSettings embedded_iframe = 1 [json_name = "embeddedIframe"];</code>
     * @param \Zitadel\Settings\V2beta\EmbeddedIframeSettings $var
     * @return $this
     */
    public function setEmbeddedIframe($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Settings\V2beta\EmbeddedIframeSettings::class);
        $this->embedded_iframe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enable_impersonation = 2 [json_name = "enableImpersonation", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getEnableImpersonation()
    {
        return $this->enable_impersonation;
    }

    /**
     * Generated from protobuf field <code>bool enable_impersonation = 2 [json_name = "enableImpersonation", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableImpersonation($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_impersonation = $var;

        return $this;
    }

}

