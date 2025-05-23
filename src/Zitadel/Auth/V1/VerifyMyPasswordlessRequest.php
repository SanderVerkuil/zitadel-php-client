<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/auth.proto

namespace Zitadel\Auth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.auth.v1.VerifyMyPasswordlessRequest</code>
 */
class VerifyMyPasswordlessRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.WebAuthNVerification verification = 1 [json_name = "verification", (.validate.rules) = {</code>
     */
    protected $verification = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\User\V1\WebAuthNVerification $verification
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.WebAuthNVerification verification = 1 [json_name = "verification", (.validate.rules) = {</code>
     * @return \Zitadel\User\V1\WebAuthNVerification|null
     */
    public function getVerification()
    {
        return $this->verification;
    }

    public function hasVerification()
    {
        return isset($this->verification);
    }

    public function clearVerification()
    {
        unset($this->verification);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.WebAuthNVerification verification = 1 [json_name = "verification", (.validate.rules) = {</code>
     * @param \Zitadel\User\V1\WebAuthNVerification $var
     * @return $this
     */
    public function setVerification($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V1\WebAuthNVerification::class);
        $this->verification = $var;

        return $this;
    }

}

