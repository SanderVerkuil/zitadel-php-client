<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/text.proto

namespace Zitadel\Text\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.text.v1.ExternalUserNotFoundScreenText</code>
 */
class ExternalUserNotFoundScreenText extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string link_button_text = 3 [json_name = "linkButtonText", (.validate.rules) = {</code>
     */
    protected $link_button_text = '';
    /**
     * Generated from protobuf field <code>string auto_register_button_text = 4 [json_name = "autoRegisterButtonText", (.validate.rules) = {</code>
     */
    protected $auto_register_button_text = '';
    /**
     * Generated from protobuf field <code>string tos_and_privacy_label = 5 [json_name = "tosAndPrivacyLabel", (.validate.rules) = {</code>
     */
    protected $tos_and_privacy_label = '';
    /**
     * Generated from protobuf field <code>string tos_confirm = 6 [json_name = "tosConfirm", (.validate.rules) = {</code>
     */
    protected $tos_confirm = '';
    /**
     * Generated from protobuf field <code>string tos_link_text = 7 [json_name = "tosLinkText", (.validate.rules) = {</code>
     */
    protected $tos_link_text = '';
    /**
     * Generated from protobuf field <code>string privacy_link_text = 8 [json_name = "privacyLinkText", (.validate.rules) = {</code>
     */
    protected $privacy_link_text = '';
    /**
     * Generated from protobuf field <code>string privacy_confirm = 10 [json_name = "privacyConfirm", (.validate.rules) = {</code>
     */
    protected $privacy_confirm = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type string $link_button_text
     *     @type string $auto_register_button_text
     *     @type string $tos_and_privacy_label
     *     @type string $tos_confirm
     *     @type string $tos_link_text
     *     @type string $privacy_link_text
     *     @type string $privacy_confirm
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
     * Generated from protobuf field <code>string link_button_text = 3 [json_name = "linkButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getLinkButtonText()
    {
        return $this->link_button_text;
    }

    /**
     * Generated from protobuf field <code>string link_button_text = 3 [json_name = "linkButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLinkButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->link_button_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string auto_register_button_text = 4 [json_name = "autoRegisterButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getAutoRegisterButtonText()
    {
        return $this->auto_register_button_text;
    }

    /**
     * Generated from protobuf field <code>string auto_register_button_text = 4 [json_name = "autoRegisterButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAutoRegisterButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->auto_register_button_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tos_and_privacy_label = 5 [json_name = "tosAndPrivacyLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getTosAndPrivacyLabel()
    {
        return $this->tos_and_privacy_label;
    }

    /**
     * Generated from protobuf field <code>string tos_and_privacy_label = 5 [json_name = "tosAndPrivacyLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTosAndPrivacyLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->tos_and_privacy_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tos_confirm = 6 [json_name = "tosConfirm", (.validate.rules) = {</code>
     * @return string
     */
    public function getTosConfirm()
    {
        return $this->tos_confirm;
    }

    /**
     * Generated from protobuf field <code>string tos_confirm = 6 [json_name = "tosConfirm", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTosConfirm($var)
    {
        GPBUtil::checkString($var, True);
        $this->tos_confirm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tos_link_text = 7 [json_name = "tosLinkText", (.validate.rules) = {</code>
     * @return string
     */
    public function getTosLinkText()
    {
        return $this->tos_link_text;
    }

    /**
     * Generated from protobuf field <code>string tos_link_text = 7 [json_name = "tosLinkText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTosLinkText($var)
    {
        GPBUtil::checkString($var, True);
        $this->tos_link_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privacy_link_text = 8 [json_name = "privacyLinkText", (.validate.rules) = {</code>
     * @return string
     */
    public function getPrivacyLinkText()
    {
        return $this->privacy_link_text;
    }

    /**
     * Generated from protobuf field <code>string privacy_link_text = 8 [json_name = "privacyLinkText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivacyLinkText($var)
    {
        GPBUtil::checkString($var, True);
        $this->privacy_link_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privacy_confirm = 10 [json_name = "privacyConfirm", (.validate.rules) = {</code>
     * @return string
     */
    public function getPrivacyConfirm()
    {
        return $this->privacy_confirm;
    }

    /**
     * Generated from protobuf field <code>string privacy_confirm = 10 [json_name = "privacyConfirm", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivacyConfirm($var)
    {
        GPBUtil::checkString($var, True);
        $this->privacy_confirm = $var;

        return $this;
    }

}

