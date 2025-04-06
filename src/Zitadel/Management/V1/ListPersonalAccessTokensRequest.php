<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ListPersonalAccessTokensRequest</code>
 */
class ListPersonalAccessTokensRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     */
    protected $user_id = '';
    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListQuery query = 2 [json_name = "query"];</code>
     */
    protected $query = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type \Zitadel\V1\ListQuery $query
     *          list limitations and ordering
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
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListQuery query = 2 [json_name = "query"];</code>
     * @return \Zitadel\V1\ListQuery|null
     */
    public function getQuery()
    {
        return $this->query;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListQuery query = 2 [json_name = "query"];</code>
     * @param \Zitadel\V1\ListQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ListQuery::class);
        $this->query = $var;

        return $this;
    }

}

