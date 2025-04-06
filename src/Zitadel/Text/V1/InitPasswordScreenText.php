<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/text.proto

namespace Zitadel\Text\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.text.v1.InitPasswordScreenText</code>
 */
class InitPasswordScreenText extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string code_label = 3 [json_name = "codeLabel", (.validate.rules) = {</code>
     */
    protected $code_label = '';
    /**
     * Generated from protobuf field <code>string new_password_label = 4 [json_name = "newPasswordLabel", (.validate.rules) = {</code>
     */
    protected $new_password_label = '';
    /**
     * Generated from protobuf field <code>string new_password_confirm_label = 5 [json_name = "newPasswordConfirmLabel", (.validate.rules) = {</code>
     */
    protected $new_password_confirm_label = '';
    /**
     * Generated from protobuf field <code>string next_button_text = 6 [json_name = "nextButtonText", (.validate.rules) = {</code>
     */
    protected $next_button_text = '';
    /**
     * Generated from protobuf field <code>string resend_button_text = 7 [json_name = "resendButtonText", (.validate.rules) = {</code>
     */
    protected $resend_button_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type string $code_label
     *     @type string $new_password_label
     *     @type string $new_password_confirm_label
     *     @type string $next_button_text
     *     @type string $resend_button_text
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
     * Generated from protobuf field <code>string code_label = 3 [json_name = "codeLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getCodeLabel()
    {
        return $this->code_label;
    }

    /**
     * Generated from protobuf field <code>string code_label = 3 [json_name = "codeLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCodeLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->code_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string new_password_label = 4 [json_name = "newPasswordLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getNewPasswordLabel()
    {
        return $this->new_password_label;
    }

    /**
     * Generated from protobuf field <code>string new_password_label = 4 [json_name = "newPasswordLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNewPasswordLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_password_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string new_password_confirm_label = 5 [json_name = "newPasswordConfirmLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getNewPasswordConfirmLabel()
    {
        return $this->new_password_confirm_label;
    }

    /**
     * Generated from protobuf field <code>string new_password_confirm_label = 5 [json_name = "newPasswordConfirmLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNewPasswordConfirmLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_password_confirm_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string next_button_text = 6 [json_name = "nextButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getNextButtonText()
    {
        return $this->next_button_text;
    }

    /**
     * Generated from protobuf field <code>string next_button_text = 6 [json_name = "nextButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNextButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_button_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string resend_button_text = 7 [json_name = "resendButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getResendButtonText()
    {
        return $this->resend_button_text;
    }

    /**
     * Generated from protobuf field <code>string resend_button_text = 7 [json_name = "resendButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResendButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->resend_button_text = $var;

        return $this;
    }

}

