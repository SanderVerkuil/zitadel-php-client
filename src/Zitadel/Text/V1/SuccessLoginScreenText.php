<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/text.proto

namespace Zitadel\Text\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.text.v1.SuccessLoginScreenText</code>
 */
class SuccessLoginScreenText extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1 [json_name = "title", (.validate.rules) = {</code>
     */
    protected $title = '';
    /**
     * Text to describe that auto-redirect should happen after successful login
     *
     * Generated from protobuf field <code>string auto_redirect_description = 2 [json_name = "autoRedirectDescription", (.validate.rules) = {</code>
     */
    protected $auto_redirect_description = '';
    /**
     * Text to describe that the window can be closed after redirect
     *
     * Generated from protobuf field <code>string redirected_description = 3 [json_name = "redirectedDescription", (.validate.rules) = {</code>
     */
    protected $redirected_description = '';
    /**
     * Generated from protobuf field <code>string next_button_text = 4 [json_name = "nextButtonText", (.validate.rules) = {</code>
     */
    protected $next_button_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $auto_redirect_description
     *           Text to describe that auto-redirect should happen after successful login
     *     @type string $redirected_description
     *           Text to describe that the window can be closed after redirect
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
     * Text to describe that auto-redirect should happen after successful login
     *
     * Generated from protobuf field <code>string auto_redirect_description = 2 [json_name = "autoRedirectDescription", (.validate.rules) = {</code>
     * @return string
     */
    public function getAutoRedirectDescription()
    {
        return $this->auto_redirect_description;
    }

    /**
     * Text to describe that auto-redirect should happen after successful login
     *
     * Generated from protobuf field <code>string auto_redirect_description = 2 [json_name = "autoRedirectDescription", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAutoRedirectDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->auto_redirect_description = $var;

        return $this;
    }

    /**
     * Text to describe that the window can be closed after redirect
     *
     * Generated from protobuf field <code>string redirected_description = 3 [json_name = "redirectedDescription", (.validate.rules) = {</code>
     * @return string
     */
    public function getRedirectedDescription()
    {
        return $this->redirected_description;
    }

    /**
     * Text to describe that the window can be closed after redirect
     *
     * Generated from protobuf field <code>string redirected_description = 3 [json_name = "redirectedDescription", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectedDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirected_description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string next_button_text = 4 [json_name = "nextButtonText", (.validate.rules) = {</code>
     * @return string
     */
    public function getNextButtonText()
    {
        return $this->next_button_text;
    }

    /**
     * Generated from protobuf field <code>string next_button_text = 4 [json_name = "nextButtonText", (.validate.rules) = {</code>
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

