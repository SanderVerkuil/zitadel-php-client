<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ListUsersResponse</code>
 */
class ListUsersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.v1.ListDetails details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserFieldName sorting_column = 2 [json_name = "sortingColumn"];</code>
     */
    protected $sorting_column = 0;
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v1.User result = 3 [json_name = "result"];</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\V1\ListDetails $details
     *     @type int $sorting_column
     *     @type array<\Zitadel\User\V1\User>|\Google\Protobuf\Internal\RepeatedField $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
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
     * Generated from protobuf field <code>.zitadel.user.v1.UserFieldName sorting_column = 2 [json_name = "sortingColumn"];</code>
     * @return int
     */
    public function getSortingColumn()
    {
        return $this->sorting_column;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserFieldName sorting_column = 2 [json_name = "sortingColumn"];</code>
     * @param int $var
     * @return $this
     */
    public function setSortingColumn($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\User\V1\UserFieldName::class);
        $this->sorting_column = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v1.User result = 3 [json_name = "result"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v1.User result = 3 [json_name = "result"];</code>
     * @param array<\Zitadel\User\V1\User>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\User\V1\User::class);
        $this->result = $arr;

        return $this;
    }

}

