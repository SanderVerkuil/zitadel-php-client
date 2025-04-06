<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/text.proto

namespace Zitadel\Text\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.text.v1.UsernameChangeScreenText</code>
 */
class UsernameChangeScreenText extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string username_label = 3 [json_name = "usernameLabel", (.validate.rules) = {</code>
     */
    protected $username_label = '';
    /**
     * Generated from protobuf field <code>string cancel_button_text = 4 [json_name = "cancelButtonText", (.validate.rules) = {</code>
     */
    protected $cancel_button_text = '';
    /**
     * Generated from protobuf field <code>string next_button_text = 5 [json_name = "nextButtonText", (.validate.rules) = {</code>
     */
    protected $next_button_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $description
     *     @type string $username_label
     *     @type string $cancel_button_text
     *     @type string $next_button_text
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
     * Generated from protobuf field <code>string username_label = 3 [json_name = "usernameLabel", (.validate.rules) = {</code>
     * @return string
     */
    public function getUsernameLabel()
    {
        return $this->username_label;
    }

    /**
     * Generated from protobuf field <code>string username_label = 3 [json_name = "usernameLabel", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string cancel_button_text = 4 [json_name = "cancelButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getCancelButtonText()
    {
        return $this->cancel_button_text;
    }

    /**
     * Generated from protobuf field <code>string cancel_button_text = 4 [json_name = "cancelButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCancelButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->cancel_button_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string next_button_text = 5 [json_name = "nextButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getNextButtonText()
    {
        return $this->next_button_text;
    }

    /**
     * Generated from protobuf field <code>string next_button_text = 5 [json_name = "nextButtonText", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNextButtonText($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_button_text = $var;

        return $this;
    }

}

