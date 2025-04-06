<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2/legal_settings.proto

namespace Zitadel\Settings\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2.LegalAndSupportSettings</code>
 */
class LegalAndSupportSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tos_link = 1 [json_name = "tosLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $tos_link = '';
    /**
     * Generated from protobuf field <code>string privacy_policy_link = 2 [json_name = "privacyPolicyLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $privacy_policy_link = '';
    /**
     * Generated from protobuf field <code>string help_link = 3 [json_name = "helpLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $help_link = '';
    /**
     * Generated from protobuf field <code>string support_email = 4 [json_name = "supportEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $support_email = '';
    /**
     * resource_owner_type returns if the setting is managed on the organization or on the instance
     *
     * Generated from protobuf field <code>.zitadel.settings.v2.ResourceOwnerType resource_owner_type = 5 [json_name = "resourceOwnerType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $resource_owner_type = 0;
    /**
     * Generated from protobuf field <code>string docs_link = 6 [json_name = "docsLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $docs_link = '';
    /**
     * Generated from protobuf field <code>string custom_link = 7 [json_name = "customLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $custom_link = '';
    /**
     * Generated from protobuf field <code>string custom_link_text = 8 [json_name = "customLinkText", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $custom_link_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tos_link
     *     @type string $privacy_policy_link
     *     @type string $help_link
     *     @type string $support_email
     *     @type int $resource_owner_type
     *           resource_owner_type returns if the setting is managed on the organization or on the instance
     *     @type string $docs_link
     *     @type string $custom_link
     *     @type string $custom_link_text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2\LegalSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tos_link = 1 [json_name = "tosLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getTosLink()
    {
        return $this->tos_link;
    }

    /**
     * Generated from protobuf field <code>string tos_link = 1 [json_name = "tosLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTosLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->tos_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privacy_policy_link = 2 [json_name = "privacyPolicyLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPrivacyPolicyLink()
    {
        return $this->privacy_policy_link;
    }

    /**
     * Generated from protobuf field <code>string privacy_policy_link = 2 [json_name = "privacyPolicyLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivacyPolicyLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->privacy_policy_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string help_link = 3 [json_name = "helpLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getHelpLink()
    {
        return $this->help_link;
    }

    /**
     * Generated from protobuf field <code>string help_link = 3 [json_name = "helpLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setHelpLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->help_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string support_email = 4 [json_name = "supportEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->support_email;
    }

    /**
     * Generated from protobuf field <code>string support_email = 4 [json_name = "supportEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSupportEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->support_email = $var;

        return $this;
    }

    /**
     * resource_owner_type returns if the setting is managed on the organization or on the instance
     *
     * Generated from protobuf field <code>.zitadel.settings.v2.ResourceOwnerType resource_owner_type = 5 [json_name = "resourceOwnerType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getResourceOwnerType()
    {
        return $this->resource_owner_type;
    }

    /**
     * resource_owner_type returns if the setting is managed on the organization or on the instance
     *
     * Generated from protobuf field <code>.zitadel.settings.v2.ResourceOwnerType resource_owner_type = 5 [json_name = "resourceOwnerType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setResourceOwnerType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Settings\V2\ResourceOwnerType::class);
        $this->resource_owner_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string docs_link = 6 [json_name = "docsLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDocsLink()
    {
        return $this->docs_link;
    }

    /**
     * Generated from protobuf field <code>string docs_link = 6 [json_name = "docsLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDocsLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->docs_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string custom_link = 7 [json_name = "customLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getCustomLink()
    {
        return $this->custom_link;
    }

    /**
     * Generated from protobuf field <code>string custom_link = 7 [json_name = "customLink", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCustomLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string custom_link_text = 8 [json_name = "customLinkText", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getCustomLinkText()
    {
        return $this->custom_link_text;
    }

    /**
     * Generated from protobuf field <code>string custom_link_text = 8 [json_name = "customLinkText", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCustomLinkText($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_link_text = $var;

        return $this;
    }

}

