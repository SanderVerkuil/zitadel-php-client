<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.SetCustomInviteUserMessageTextRequest</code>
 */
class SetCustomInviteUserMessageTextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string language = 1 [json_name = "language", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $language = '';
    /**
     * Generated from protobuf field <code>string title = 2 [json_name = "title", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string pre_header = 3 [json_name = "preHeader", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $pre_header = '';
    /**
     * Generated from protobuf field <code>string subject = 4 [json_name = "subject", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $subject = '';
    /**
     * Generated from protobuf field <code>string greeting = 5 [json_name = "greeting", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $greeting = '';
    /**
     * Generated from protobuf field <code>string text = 6 [json_name = "text", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $text = '';
    /**
     * Generated from protobuf field <code>string button_text = 7 [json_name = "buttonText", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $button_text = '';
    /**
     * Generated from protobuf field <code>string footer_text = 8 [json_name = "footerText", (.validate.rules) = {</code>
     */
    protected $footer_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language
     *     @type string $title
     *     @type string $pre_header
     *     @type string $subject
     *     @type string $greeting
     *     @type string $text
     *     @type string $button_text
     *     @type string $footer_text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string language = 1 [json_name = "language", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Generated from protobuf field <code>string language = 1 [json_name = "language", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 2 [json_name = "title", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2 [json_name = "title", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string pre_header = 3 [json_name = "preHeader", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPreHeader()
    {
        return $this->pre_header;
    }

    /**
     * Generated from protobuf field <code>string pre_header = 3 [json_name = "preHeader", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPreHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->pre_header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subject = 4 [json_name = "subject", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Generated from protobuf field <code>string subject = 4 [json_name = "subject", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string greeting = 5 [json_name = "greeting", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * Generated from protobuf field <code>string greeting = 5 [json_name = "greeting", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGreeting($var)
    {
        GPBUtil::checkString($var, True);
        $this->greeting = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string text = 6 [json_name = "text", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 6 [json_name = "text", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string button_text = 7 [json_name = "buttonText", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getButtonText()
    {
        return $this->button_text;
    }

    /**
     * Generated from protobuf field <code>string button_text = 7 [json_name = "buttonText", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->button_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string footer_text = 8 [json_name = "footerText", (.validate.rules) = {</code>
     * @return string
     */
    public function getFooterText()
    {
        return $this->footer_text;
    }

    /**
     * Generated from protobuf field <code>string footer_text = 8 [json_name = "footerText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFooterText($var)
    {
        GPBUtil::checkString($var, True);
        $this->footer_text = $var;

        return $this;
    }

}

