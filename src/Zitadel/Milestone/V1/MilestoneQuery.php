<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/milestone/v1/milestone.proto

namespace Zitadel\Milestone\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.milestone.v1.MilestoneQuery</code>
 */
class MilestoneQuery extends \Google\Protobuf\Internal\Message
{
    protected $query;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Milestone\V1\IsReachedQuery $is_reached_query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Milestone\V1\Milestone::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.milestone.v1.IsReachedQuery is_reached_query = 1 [json_name = "isReachedQuery"];</code>
     * @return \Zitadel\Milestone\V1\IsReachedQuery|null
     */
    public function getIsReachedQuery()
    {
        return $this->readOneof(1);
    }

    public function hasIsReachedQuery()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.zitadel.milestone.v1.IsReachedQuery is_reached_query = 1 [json_name = "isReachedQuery"];</code>
     * @param \Zitadel\Milestone\V1\IsReachedQuery $var
     * @return $this
     */
    public function setIsReachedQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Milestone\V1\IsReachedQuery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->whichOneof("query");
    }

}

