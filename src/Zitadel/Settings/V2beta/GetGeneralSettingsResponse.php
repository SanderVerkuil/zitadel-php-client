<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/settings_service.proto

namespace Zitadel\Settings\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2beta.GetGeneralSettingsResponse</code>
 */
class GetGeneralSettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string default_org_id = 1 [json_name = "defaultOrgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $default_org_id = '';
    /**
     * Generated from protobuf field <code>string default_language = 2 [json_name = "defaultLanguage", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $default_language = '';
    /**
     * Generated from protobuf field <code>repeated string supported_languages = 3 [json_name = "supportedLanguages", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $supported_languages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $default_org_id
     *     @type string $default_language
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $supported_languages
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2Beta\SettingsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string default_org_id = 1 [json_name = "defaultOrgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDefaultOrgId()
    {
        return $this->default_org_id;
    }

    /**
     * Generated from protobuf field <code>string default_org_id = 1 [json_name = "defaultOrgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_org_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_language = 2 [json_name = "defaultLanguage", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->default_language;
    }

    /**
     * Generated from protobuf field <code>string default_language = 2 [json_name = "defaultLanguage", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_language = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string supported_languages = 3 [json_name = "supportedLanguages", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedLanguages()
    {
        return $this->supported_languages;
    }

    /**
     * Generated from protobuf field <code>repeated string supported_languages = 3 [json_name = "supportedLanguages", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->supported_languages = $arr;

        return $this;
    }

}

