<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/text.proto

namespace Zitadel\Text\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.text.v1.PasswordlessRegistrationScreenText</code>
 */
class PasswordlessRegistrationScreenText extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title", (.validate.rules) = {</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description", (.validate.rules) = {</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string token_name_label = 3 [json_name = "tokenNameLabel", (.validate.rules) = {</code>
     */
    protected $token_name_label = '';
    /**
     * Generated from protobuf field <code>string not_supported = 4 [json_name = "notSupported", (.validate.rules) = {</code>
     */
    protected $not_supported = '';
    /**
     * Generated from protobuf field <code>string register_token_button_text = 5 [json_name = "registerTokenButtonText", (.validate.rules) = {</code>
     */
    protected $register_token_button_text = '';
    /**
     * Generated from protobuf field <code>string error_retry = 6 [json_name = "errorRetry", (.validate.rules) = {</code>
     */
    protected $error_retry = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type string $token_name_label
     *     @type string $not_supported
     *     @type string $register_token_button_text
     *     @type string $error_retry
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Text::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title", (.validate.rules) = {</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string description = 2 [json_name = "description", (.validate.rules) = {</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 2 [json_name = "description", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token_name_label = 3 [json_name = "tokenNameLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getTokenNameLabel()
    {
        return $this->token_name_label;
    }

    /**
     * Generated from protobuf field <code>string token_name_label = 3 [json_name = "tokenNameLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTokenNameLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->token_name_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string not_supported = 4 [json_name = "notSupported", (.validate.rules) = {</code>
     * @return string
     */
    public function getNotSupported()
    {
        return $this->not_supported;
    }

    /**
     * Generated from protobuf field <code>string not_supported = 4 [json_name = "notSupported", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNotSupported($var)
    {
        GPBUtil::checkString($var, True);
        $this->not_supported = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string register_token_button_text = 5 [json_name = "registerTokenButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getRegisterTokenButtonText()
    {
        return $this->register_token_button_text;
    }

    /**
     * Generated from protobuf field <code>string register_token_button_text = 5 [json_name = "registerTokenButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRegisterTokenButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->register_token_button_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_retry = 6 [json_name = "errorRetry", (.validate.rules) = {</code>
     * @return string
     */
    public function getErrorRetry()
    {
        return $this->error_retry;
    }

    /**
     * Generated from protobuf field <code>string error_retry = 6 [json_name = "errorRetry", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setErrorRetry($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_retry = $var;

        return $this;
    }

}

