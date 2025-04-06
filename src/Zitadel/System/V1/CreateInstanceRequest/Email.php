<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/system.proto

namespace Zitadel\System\V1\CreateInstanceRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.system.v1.CreateInstanceRequest.Email</code>
 */
class Email extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1 [json_name = "email", (.validate.rules) = {</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>bool is_email_verified = 2 [json_name = "isEmailVerified"];</code>
     */
    protected $is_email_verified = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *     @type bool $is_email_verified
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\System::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email = 1 [json_name = "email", (.validate.rules) = {</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 1 [json_name = "email", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_email_verified = 2 [json_name = "isEmailVerified"];</code>
     * @return bool
     */
    public function getIsEmailVerified()
    {
        return $this->is_email_verified;
    }

    /**
     * Generated from protobuf field <code>bool is_email_verified = 2 [json_name = "isEmailVerified"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEmailVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->is_email_verified = $var;

        return $this;
    }

}

