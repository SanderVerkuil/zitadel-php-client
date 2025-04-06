<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ListOrgIDPsRequest</code>
 */
class ListOrgIDPsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.v1.ListQuery query = 1 [json_name = "query"];</code>
     */
    protected $query = null;
    /**
     *the field the result is sorted
     *
     * Generated from protobuf field <code>.zitadel.idp.v1.IDPFieldName sorting_column = 2 [json_name = "sortingColumn"];</code>
     */
    protected $sorting_column = 0;
    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.management.v1.IDPQuery queries = 3 [json_name = "queries"];</code>
     */
    private $queries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\V1\ListQuery $query
     *          list limitations and ordering
     *     @type int $sorting_column
     *          the field the result is sorted
     *     @type array<\Zitadel\Management\V1\IDPQuery>|\Google\Protobuf\Internal\RepeatedField $queries
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
     *the field the result is sorted
     *
     * Generated from protobuf field <code>.zitadel.idp.v1.IDPFieldName sorting_column = 2 [json_name = "sortingColumn"];</code>
     * @return int
     */
    public function getSortingColumn()
    {
        return $this->sorting_column;
    }

    /**
     *the field the result is sorted
     *
     * Generated from protobuf field <code>.zitadel.idp.v1.IDPFieldName sorting_column = 2 [json_name = "sortingColumn"];</code>
     * @param int $var
     * @return $this
     */
    public function setSortingColumn($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Idp\V1\IDPFieldName::class);
        $this->sorting_column = $var;

        return $this;
    }

    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.management.v1.IDPQuery queries = 3 [json_name = "queries"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueries()
    {
        return $this->queries;
    }

    /**
     *criteria the client is looking for
     *
     * Generated from protobuf field <code>repeated .zitadel.management.v1.IDPQuery queries = 3 [json_name = "queries"];</code>
     * @param array<\Zitadel\Management\V1\IDPQuery>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Management\V1\IDPQuery::class);
        $this->queries = $arr;

        return $this;
    }

}

