<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/branding_settings.proto

namespace Zitadel\Settings\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2beta.Theme</code>
 */
class Theme extends \Google\Protobuf\Internal\Message
{
    /**
     * hex value for primary color
     *
     * Generated from protobuf field <code>string primary_color = 1 [json_name = "primaryColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $primary_color = '';
    /**
     * hex value for background color
     *
     * Generated from protobuf field <code>string background_color = 2 [json_name = "backgroundColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $background_color = '';
    /**
     * hex value for warning color
     *
     * Generated from protobuf field <code>string warn_color = 3 [json_name = "warnColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $warn_color = '';
    /**
     * hex value for font color
     *
     * Generated from protobuf field <code>string font_color = 4 [json_name = "fontColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $font_color = '';
    /**
     * url where the logo is served
     *
     * Generated from protobuf field <code>string logo_url = 5 [json_name = "logoUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $logo_url = '';
    /**
     * url where the icon is served
     *
     * Generated from protobuf field <code>string icon_url = 6 [json_name = "iconUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $icon_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $primary_color
     *           hex value for primary color
     *     @type string $background_color
     *           hex value for background color
     *     @type string $warn_color
     *           hex value for warning color
     *     @type string $font_color
     *           hex value for font color
     *     @type string $logo_url
     *           url where the logo is served
     *     @type string $icon_url
     *           url where the icon is served
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2Beta\BrandingSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * hex value for primary color
     *
     * Generated from protobuf field <code>string primary_color = 1 [json_name = "primaryColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPrimaryColor()
    {
        return $this->primary_color;
    }

    /**
     * hex value for primary color
     *
     * Generated from protobuf field <code>string primary_color = 1 [json_name = "primaryColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_color = $var;

        return $this;
    }

    /**
     * hex value for background color
     *
     * Generated from protobuf field <code>string background_color = 2 [json_name = "backgroundColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->background_color;
    }

    /**
     * hex value for background color
     *
     * Generated from protobuf field <code>string background_color = 2 [json_name = "backgroundColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackgroundColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->background_color = $var;

        return $this;
    }

    /**
     * hex value for warning color
     *
     * Generated from protobuf field <code>string warn_color = 3 [json_name = "warnColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getWarnColor()
    {
        return $this->warn_color;
    }

    /**
     * hex value for warning color
     *
     * Generated from protobuf field <code>string warn_color = 3 [json_name = "warnColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWarnColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->warn_color = $var;

        return $this;
    }

    /**
     * hex value for font color
     *
     * Generated from protobuf field <code>string font_color = 4 [json_name = "fontColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getFontColor()
    {
        return $this->font_color;
    }

    /**
     * hex value for font color
     *
     * Generated from protobuf field <code>string font_color = 4 [json_name = "fontColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFontColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->font_color = $var;

        return $this;
    }

    /**
     * url where the logo is served
     *
     * Generated from protobuf field <code>string logo_url = 5 [json_name = "logoUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * url where the logo is served
     *
     * Generated from protobuf field <code>string logo_url = 5 [json_name = "logoUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLogoUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo_url = $var;

        return $this;
    }

    /**
     * url where the icon is served
     *
     * Generated from protobuf field <code>string icon_url = 6 [json_name = "iconUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIconUrl()
    {
        return $this->icon_url;
    }

    /**
     * url where the icon is served
     *
     * Generated from protobuf field <code>string icon_url = 6 [json_name = "iconUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIconUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon_url = $var;

        return $this;
    }

}

