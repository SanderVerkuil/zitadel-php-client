<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ListOrgMembersResponse</code>
 */
class ListOrgMembersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListDetails details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.member.v1.Member result = 2 [json_name = "result"];</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\V1\ListDetails $details
     *          list limitations and ordering
     *     @type array<\Zitadel\Member\V1\Member>|\Google\Protobuf\Internal\RepeatedField $result
     *          criteria the client is looking for
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListDetails details = 1 [json_name = "details"];</code>
     * @return \Zitadel\V1\ListDetails|null
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
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListDetails details = 1 [json_name = "details"];</code>
     * @param \Zitadel\V1\ListDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ListDetails::class);
        $this->details = $var;

        return $this;
    }

    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.member.v1.Member result = 2 [json_name = "result"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.member.v1.Member result = 2 [json_name = "result"];</code>
     * @param array<\Zitadel\Member\V1\Member>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Member\V1\Member::class);
        $this->result = $arr;

        return $this;
    }

}

