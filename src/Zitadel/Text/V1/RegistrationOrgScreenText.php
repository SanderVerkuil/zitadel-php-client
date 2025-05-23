<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/text.proto

namespace Zitadel\Text\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.text.v1.RegistrationOrgScreenText</code>
 */
class RegistrationOrgScreenText extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string orgname_label = 3 [json_name = "orgnameLabel", (.validate.rules) = {</code>
     */
    protected $orgname_label = '';
    /**
     * Generated from protobuf field <code>string firstname_label = 4 [json_name = "firstnameLabel", (.validate.rules) = {</code>
     */
    protected $firstname_label = '';
    /**
     * Generated from protobuf field <code>string lastname_label = 5 [json_name = "lastnameLabel", (.validate.rules) = {</code>
     */
    protected $lastname_label = '';
    /**
     * Generated from protobuf field <code>string username_label = 6 [json_name = "usernameLabel", (.validate.rules) = {</code>
     */
    protected $username_label = '';
    /**
     * Generated from protobuf field <code>string email_label = 7 [json_name = "emailLabel", (.validate.rules) = {</code>
     */
    protected $email_label = '';
    /**
     * Generated from protobuf field <code>string password_label = 9 [json_name = "passwordLabel", (.validate.rules) = {</code>
     */
    protected $password_label = '';
    /**
     * Generated from protobuf field <code>string password_confirm_label = 10 [json_name = "passwordConfirmLabel", (.validate.rules) = {</code>
     */
    protected $password_confirm_label = '';
    /**
     * Generated from protobuf field <code>string tos_and_privacy_label = 11 [json_name = "tosAndPrivacyLabel", (.validate.rules) = {</code>
     */
    protected $tos_and_privacy_label = '';
    /**
     * Generated from protobuf field <code>string tos_confirm = 12 [json_name = "tosConfirm", (.validate.rules) = {</code>
     */
    protected $tos_confirm = '';
    /**
     * Generated from protobuf field <code>string tos_link_text = 14 [json_name = "tosLinkText", (.validate.rules) = {</code>
     */
    protected $tos_link_text = '';
    /**
     * Generated from protobuf field <code>string privacy_confirm = 15 [json_name = "privacyConfirm", (.validate.rules) = {</code>
     */
    protected $privacy_confirm = '';
    /**
     * Generated from protobuf field <code>string privacy_link_text = 17 [json_name = "privacyLinkText", (.validate.rules) = {</code>
     */
    protected $privacy_link_text = '';
    /**
     * Generated from protobuf field <code>string save_button_text = 19 [json_name = "saveButtonText", (.validate.rules) = {</code>
     */
    protected $save_button_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type string $orgname_label
     *     @type string $firstname_label
     *     @type string $lastname_label
     *     @type string $username_label
     *     @type string $email_label
     *     @type string $password_label
     *     @type string $password_confirm_label
     *     @type string $tos_and_privacy_label
     *     @type string $tos_confirm
     *     @type string $tos_link_text
     *     @type string $privacy_confirm
     *     @type string $privacy_link_text
     *     @type string $save_button_text
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
     * Generated from protobuf field <code>string orgname_label = 3 [json_name = "orgnameLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getOrgnameLabel()
    {
        return $this->orgname_label;
    }

    /**
     * Generated from protobuf field <code>string orgname_label = 3 [json_name = "orgnameLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOrgnameLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->orgname_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string firstname_label = 4 [json_name = "firstnameLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getFirstnameLabel()
    {
        return $this->firstname_label;
    }

    /**
     * Generated from protobuf field <code>string firstname_label = 4 [json_name = "firstnameLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFirstnameLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->firstname_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lastname_label = 5 [json_name = "lastnameLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getLastnameLabel()
    {
        return $this->lastname_label;
    }

    /**
     * Generated from protobuf field <code>string lastname_label = 5 [json_name = "lastnameLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLastnameLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->lastname_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username_label = 6 [json_name = "usernameLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getUsernameLabel()
    {
        return $this->username_label;
    }

    /**
     * Generated from protobuf field <code>string username_label = 6 [json_name = "usernameLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUsernameLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->username_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email_label = 7 [json_name = "emailLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getEmailLabel()
    {
        return $this->email_label;
    }

    /**
     * Generated from protobuf field <code>string email_label = 7 [json_name = "emailLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEmailLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password_label = 9 [json_name = "passwordLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getPasswordLabel()
    {
        return $this->password_label;
    }

    /**
     * Generated from protobuf field <code>string password_label = 9 [json_name = "passwordLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPasswordLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->password_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password_confirm_label = 10 [json_name = "passwordConfirmLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getPasswordConfirmLabel()
    {
        return $this->password_confirm_label;
    }

    /**
     * Generated from protobuf field <code>string password_confirm_label = 10 [json_name = "passwordConfirmLabel", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPasswordConfirmLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->password_confirm_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tos_and_privacy_label = 11 [json_name = "tosAndPrivacyLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getTosAndPrivacyLabel()
    {
        return $this->tos_and_privacy_label;
    }

    /**
     * Generated from protobuf field <code>string tos_and_privacy_label = 11 [json_name = "tosAndPrivacyLabel", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string tos_confirm = 12 [json_name = "tosConfirm", (.validate.rules) = {</code>
     * @return string
     */
    public function getTosConfirm()
    {
        return $this->tos_confirm;
    }

    /**
     * Generated from protobuf field <code>string tos_confirm = 12 [json_name = "tosConfirm", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string tos_link_text = 14 [json_name = "tosLinkText", (.validate.rules) = {</code>
     * @return string
     */
    public function getTosLinkText()
    {
        return $this->tos_link_text;
    }

    /**
     * Generated from protobuf field <code>string tos_link_text = 14 [json_name = "tosLinkText", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string privacy_confirm = 15 [json_name = "privacyConfirm", (.validate.rules) = {</code>
     * @return string
     */
    public function getPrivacyConfirm()
    {
        return $this->privacy_confirm;
    }

    /**
     * Generated from protobuf field <code>string privacy_confirm = 15 [json_name = "privacyConfirm", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivacyConfirm($var)
    {
        GPBUtil::checkString($var, True);
        $this->privacy_confirm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privacy_link_text = 17 [json_name = "privacyLinkText", (.validate.rules) = {</code>
     * @return string
     */
    public function getPrivacyLinkText()
    {
        return $this->privacy_link_text;
    }

    /**
     * Generated from protobuf field <code>string privacy_link_text = 17 [json_name = "privacyLinkText", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string save_button_text = 19 [json_name = "saveButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getSaveButtonText()
    {
        return $this->save_button_text;
    }

    /**
     * Generated from protobuf field <code>string save_button_text = 19 [json_name = "saveButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSaveButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->save_button_text = $var;

        return $this;
    }

}

