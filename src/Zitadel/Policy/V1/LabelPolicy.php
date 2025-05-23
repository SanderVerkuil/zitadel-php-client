<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/policy.proto

namespace Zitadel\Policy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.policy.v1.LabelPolicy</code>
 */
class LabelPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * hex value for primary color
     *
     * Generated from protobuf field <code>string primary_color = 2 [json_name = "primaryColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $primary_color = '';
    /**
     * defines if the organization's admin changed the policy
     *
     * Generated from protobuf field <code>bool is_default = 4 [json_name = "isDefault", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $is_default = false;
    /**
     * hides the org suffix on the login form if the scope \"urn:zitadel:iam:org:domain:primary:{domainname}\" is set
     *
     * Generated from protobuf field <code>bool hide_login_name_suffix = 5 [json_name = "hideLoginNameSuffix", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $hide_login_name_suffix = false;
    /**
     * hex value for secondary color
     *
     * Generated from protobuf field <code>string warn_color = 6 [json_name = "warnColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $warn_color = '';
    /**
     * hex value for background color
     *
     * Generated from protobuf field <code>string background_color = 7 [json_name = "backgroundColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $background_color = '';
    /**
     * hex value for font color
     *
     * Generated from protobuf field <code>string font_color = 8 [json_name = "fontColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $font_color = '';
    /**
     * hex value for primary color dark theme
     *
     * Generated from protobuf field <code>string primary_color_dark = 9 [json_name = "primaryColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $primary_color_dark = '';
    /**
     * hex value for background color dark theme
     *
     * Generated from protobuf field <code>string background_color_dark = 10 [json_name = "backgroundColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $background_color_dark = '';
    /**
     * hex value for warning color dark theme
     *
     * Generated from protobuf field <code>string warn_color_dark = 11 [json_name = "warnColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $warn_color_dark = '';
    /**
     * hex value for font color dark theme
     *
     * Generated from protobuf field <code>string font_color_dark = 12 [json_name = "fontColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $font_color_dark = '';
    /**
     * Generated from protobuf field <code>bool disable_watermark = 13 [json_name = "disableWatermark"];</code>
     */
    protected $disable_watermark = false;
    /**
     * Generated from protobuf field <code>string logo_url = 14 [json_name = "logoUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $logo_url = '';
    /**
     * Generated from protobuf field <code>string icon_url = 15 [json_name = "iconUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $icon_url = '';
    /**
     * Generated from protobuf field <code>string logo_url_dark = 16 [json_name = "logoUrlDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $logo_url_dark = '';
    /**
     * Generated from protobuf field <code>string icon_url_dark = 17 [json_name = "iconUrlDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $icon_url_dark = '';
    /**
     * Generated from protobuf field <code>string font_url = 18 [json_name = "fontUrl"];</code>
     */
    protected $font_url = '';
    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.ThemeMode theme_mode = 19 [json_name = "themeMode"];</code>
     */
    protected $theme_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type string $primary_color
     *           hex value for primary color
     *     @type bool $is_default
     *           defines if the organization's admin changed the policy
     *     @type bool $hide_login_name_suffix
     *           hides the org suffix on the login form if the scope \"urn:zitadel:iam:org:domain:primary:{domainname}\" is set
     *     @type string $warn_color
     *           hex value for secondary color
     *     @type string $background_color
     *           hex value for background color
     *     @type string $font_color
     *           hex value for font color
     *     @type string $primary_color_dark
     *           hex value for primary color dark theme
     *     @type string $background_color_dark
     *           hex value for background color dark theme
     *     @type string $warn_color_dark
     *           hex value for warning color dark theme
     *     @type string $font_color_dark
     *           hex value for font color dark theme
     *     @type bool $disable_watermark
     *     @type string $logo_url
     *     @type string $icon_url
     *     @type string $logo_url_dark
     *     @type string $icon_url_dark
     *     @type string $font_url
     *     @type int $theme_mode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     * @return \Zitadel\V1\ObjectDetails|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     * @param \Zitadel\V1\ObjectDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ObjectDetails::class);
        $this->details = $var;

        return $this;
    }

    /**
     * hex value for primary color
     *
     * Generated from protobuf field <code>string primary_color = 2 [json_name = "primaryColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPrimaryColor()
    {
        return $this->primary_color;
    }

    /**
     * hex value for primary color
     *
     * Generated from protobuf field <code>string primary_color = 2 [json_name = "primaryColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * defines if the organization's admin changed the policy
     *
     * Generated from protobuf field <code>bool is_default = 4 [json_name = "isDefault", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->is_default;
    }

    /**
     * defines if the organization's admin changed the policy
     *
     * Generated from protobuf field <code>bool is_default = 4 [json_name = "isDefault", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->is_default = $var;

        return $this;
    }

    /**
     * hides the org suffix on the login form if the scope \"urn:zitadel:iam:org:domain:primary:{domainname}\" is set
     *
     * Generated from protobuf field <code>bool hide_login_name_suffix = 5 [json_name = "hideLoginNameSuffix", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getHideLoginNameSuffix()
    {
        return $this->hide_login_name_suffix;
    }

    /**
     * hides the org suffix on the login form if the scope \"urn:zitadel:iam:org:domain:primary:{domainname}\" is set
     *
     * Generated from protobuf field <code>bool hide_login_name_suffix = 5 [json_name = "hideLoginNameSuffix", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setHideLoginNameSuffix($var)
    {
        GPBUtil::checkBool($var);
        $this->hide_login_name_suffix = $var;

        return $this;
    }

    /**
     * hex value for secondary color
     *
     * Generated from protobuf field <code>string warn_color = 6 [json_name = "warnColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getWarnColor()
    {
        return $this->warn_color;
    }

    /**
     * hex value for secondary color
     *
     * Generated from protobuf field <code>string warn_color = 6 [json_name = "warnColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * hex value for background color
     *
     * Generated from protobuf field <code>string background_color = 7 [json_name = "backgroundColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->background_color;
    }

    /**
     * hex value for background color
     *
     * Generated from protobuf field <code>string background_color = 7 [json_name = "backgroundColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * hex value for font color
     *
     * Generated from protobuf field <code>string font_color = 8 [json_name = "fontColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getFontColor()
    {
        return $this->font_color;
    }

    /**
     * hex value for font color
     *
     * Generated from protobuf field <code>string font_color = 8 [json_name = "fontColor", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * hex value for primary color dark theme
     *
     * Generated from protobuf field <code>string primary_color_dark = 9 [json_name = "primaryColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPrimaryColorDark()
    {
        return $this->primary_color_dark;
    }

    /**
     * hex value for primary color dark theme
     *
     * Generated from protobuf field <code>string primary_color_dark = 9 [json_name = "primaryColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryColorDark($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_color_dark = $var;

        return $this;
    }

    /**
     * hex value for background color dark theme
     *
     * Generated from protobuf field <code>string background_color_dark = 10 [json_name = "backgroundColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getBackgroundColorDark()
    {
        return $this->background_color_dark;
    }

    /**
     * hex value for background color dark theme
     *
     * Generated from protobuf field <code>string background_color_dark = 10 [json_name = "backgroundColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackgroundColorDark($var)
    {
        GPBUtil::checkString($var, True);
        $this->background_color_dark = $var;

        return $this;
    }

    /**
     * hex value for warning color dark theme
     *
     * Generated from protobuf field <code>string warn_color_dark = 11 [json_name = "warnColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getWarnColorDark()
    {
        return $this->warn_color_dark;
    }

    /**
     * hex value for warning color dark theme
     *
     * Generated from protobuf field <code>string warn_color_dark = 11 [json_name = "warnColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWarnColorDark($var)
    {
        GPBUtil::checkString($var, True);
        $this->warn_color_dark = $var;

        return $this;
    }

    /**
     * hex value for font color dark theme
     *
     * Generated from protobuf field <code>string font_color_dark = 12 [json_name = "fontColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getFontColorDark()
    {
        return $this->font_color_dark;
    }

    /**
     * hex value for font color dark theme
     *
     * Generated from protobuf field <code>string font_color_dark = 12 [json_name = "fontColorDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFontColorDark($var)
    {
        GPBUtil::checkString($var, True);
        $this->font_color_dark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool disable_watermark = 13 [json_name = "disableWatermark"];</code>
     * @return bool
     */
    public function getDisableWatermark()
    {
        return $this->disable_watermark;
    }

    /**
     * Generated from protobuf field <code>bool disable_watermark = 13 [json_name = "disableWatermark"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableWatermark($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_watermark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 14 [json_name = "logoUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }

    /**
     * Generated from protobuf field <code>string logo_url = 14 [json_name = "logoUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string icon_url = 15 [json_name = "iconUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIconUrl()
    {
        return $this->icon_url;
    }

    /**
     * Generated from protobuf field <code>string icon_url = 15 [json_name = "iconUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIconUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string logo_url_dark = 16 [json_name = "logoUrlDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLogoUrlDark()
    {
        return $this->logo_url_dark;
    }

    /**
     * Generated from protobuf field <code>string logo_url_dark = 16 [json_name = "logoUrlDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLogoUrlDark($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo_url_dark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string icon_url_dark = 17 [json_name = "iconUrlDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIconUrlDark()
    {
        return $this->icon_url_dark;
    }

    /**
     * Generated from protobuf field <code>string icon_url_dark = 17 [json_name = "iconUrlDark", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIconUrlDark($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon_url_dark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string font_url = 18 [json_name = "fontUrl"];</code>
     * @return string
     */
    public function getFontUrl()
    {
        return $this->font_url;
    }

    /**
     * Generated from protobuf field <code>string font_url = 18 [json_name = "fontUrl"];</code>
     * @param string $var
     * @return $this
     */
    public function setFontUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->font_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.ThemeMode theme_mode = 19 [json_name = "themeMode"];</code>
     * @return int
     */
    public function getThemeMode()
    {
        return $this->theme_mode;
    }

    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.ThemeMode theme_mode = 19 [json_name = "themeMode"];</code>
     * @param int $var
     * @return $this
     */
    public function setThemeMode($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Policy\V1\ThemeMode::class);
        $this->theme_mode = $var;

        return $this;
    }

}

