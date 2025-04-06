<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.GetAllowedLanguagesResponse</code>
 */
class GetAllowedLanguagesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string languages = 1 [json_name = "languages", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $languages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $languages
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string languages = 1 [json_name = "languages", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Generated from protobuf field <code>repeated string languages = 1 [json_name = "languages", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->languages = $arr;

        return $this;
    }

}

