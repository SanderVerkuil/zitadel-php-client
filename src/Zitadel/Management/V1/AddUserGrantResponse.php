<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddUserGrantResponse</code>
 */
class AddUserGrantResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_grant_id = 1 [json_name = "userGrantId"];</code>
     */
    protected $user_grant_id = '';
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     */
    protected $details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_grant_id
     *     @type \Zitadel\V1\ObjectDetails $details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_grant_id = 1 [json_name = "userGrantId"];</code>
     * @return string
     */
    public function getUserGrantId()
    {
        return $this->user_grant_id;
    }

    /**
     * Generated from protobuf field <code>string user_grant_id = 1 [json_name = "userGrantId"];</code>
     * @param string $var
     * @return $this
     */
    public function setUserGrantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_grant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     * @return \Zitadel\V1\ObjectDetails|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     * @param \Zitadel\V1\ObjectDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ObjectDetails::class);
        $this->details = $var;

        return $this;
    }

}

