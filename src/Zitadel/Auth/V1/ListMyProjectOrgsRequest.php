<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/auth.proto

namespace Zitadel\Auth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.auth.v1.ListMyProjectOrgsRequest</code>
 */
class ListMyProjectOrgsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListQuery query = 1 [json_name = "query"];</code>
     */
    protected $query = null;
    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.org.v1.OrgQuery queries = 2 [json_name = "queries"];</code>
     */
    private $queries;
    /**
     * States by which field the results are sorted.
     *
     * Generated from protobuf field <code>.zitadel.org.v1.OrgFieldName sorting_column = 3 [json_name = "sortingColumn"];</code>
     */
    protected $sorting_column = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\V1\ListQuery $query
     *          list limitations and ordering
     *     @type array<\Zitadel\Org\V1\OrgQuery>|\Google\Protobuf\Internal\RepeatedField $queries
     *          criteria the client is looking for
     *     @type int $sorting_column
     *           States by which field the results are sorted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListQuery query = 1 [json_name = "query"];</code>
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
     * Generated from protobuf field <code>.zitadel.v1.ListQuery query = 1 [json_name = "query"];</code>
     * @param \Zitadel\V1\ListQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ListQuery::class);
        $this->query = $var;

        return $this;
    }

    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.org.v1.OrgQuery queries = 2 [json_name = "queries"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueries()
    {
        return $this->queries;
    }

    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.org.v1.OrgQuery queries = 2 [json_name = "queries"];</code>
     * @param array<\Zitadel\Org\V1\OrgQuery>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Org\V1\OrgQuery::class);
        $this->queries = $arr;

        return $this;
    }

    /**
     * States by which field the results are sorted.
     *
     * Generated from protobuf field <code>.zitadel.org.v1.OrgFieldName sorting_column = 3 [json_name = "sortingColumn"];</code>
     * @return int
     */
    public function getSortingColumn()
    {
        return $this->sorting_column;
    }

    /**
     * States by which field the results are sorted.
     *
     * Generated from protobuf field <code>.zitadel.org.v1.OrgFieldName sorting_column = 3 [json_name = "sortingColumn"];</code>
     * @param int $var
     * @return $this
     */
    public function setSortingColumn($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Org\V1\OrgFieldName::class);
        $this->sorting_column = $var;

        return $this;
    }

}

