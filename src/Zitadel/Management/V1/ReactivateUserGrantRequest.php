<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ReactivateUserGrantRequest</code>
 */
class ReactivateUserGrantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string grant_id = 2 [json_name = "grantId", (.validate.rules) = {</code>
     */
    protected $grant_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type string $grant_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 2 [json_name = "grantId", (.validate.rules) = {</code>
     * @return string
     */
    public function getGrantId()
    {
        return $this->grant_id;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 2 [json_name = "grantId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGrantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->grant_id = $var;

        return $this;
    }

}

