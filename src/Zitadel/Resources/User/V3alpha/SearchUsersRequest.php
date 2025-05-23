<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/user_service.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.SearchUsersRequest</code>
 */
class SearchUsersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $instance = null;
    /**
     * Search limitations and ordering.
     *
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.SearchQuery query = 2 [json_name = "query"];</code>
     */
    protected $query = null;
    /**
     * the field the result is sorted.
     *
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.FieldName sorting_column = 3 [json_name = "sortingColumn", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $sorting_column = 0;
    /**
     * Define the criteria to query for.
     *
     * Generated from protobuf field <code>repeated .zitadel.resources.user.v3alpha.SearchFilter filters = 4 [json_name = "filters"];</code>
     */
    private $filters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V3alpha\Instance $instance
     *     @type \Zitadel\Resources\Object\V3alpha\SearchQuery $query
     *           Search limitations and ordering.
     *     @type int $sorting_column
     *           the field the result is sorted.
     *     @type array<\Zitadel\Resources\User\V3alpha\SearchFilter>|\Google\Protobuf\Internal\RepeatedField $filters
     *           Define the criteria to query for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Object\V3alpha\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.object.v3alpha.Instance instance = 1 [json_name = "instance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Object\V3alpha\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V3alpha\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * Search limitations and ordering.
     *
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.SearchQuery query = 2 [json_name = "query"];</code>
     * @return \Zitadel\Resources\Object\V3alpha\SearchQuery|null
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
     * Search limitations and ordering.
     *
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.SearchQuery query = 2 [json_name = "query"];</code>
     * @param \Zitadel\Resources\Object\V3alpha\SearchQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Object\V3alpha\SearchQuery::class);
        $this->query = $var;

        return $this;
    }

    /**
     * the field the result is sorted.
     *
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.FieldName sorting_column = 3 [json_name = "sortingColumn", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getSortingColumn()
    {
        return $this->sorting_column;
    }

    /**
     * the field the result is sorted.
     *
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.FieldName sorting_column = 3 [json_name = "sortingColumn", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setSortingColumn($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Resources\User\V3alpha\FieldName::class);
        $this->sorting_column = $var;

        return $this;
    }

    /**
     * Define the criteria to query for.
     *
     * Generated from protobuf field <code>repeated .zitadel.resources.user.v3alpha.SearchFilter filters = 4 [json_name = "filters"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Define the criteria to query for.
     *
     * Generated from protobuf field <code>repeated .zitadel.resources.user.v3alpha.SearchFilter filters = 4 [json_name = "filters"];</code>
     * @param array<\Zitadel\Resources\User\V3alpha\SearchFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Resources\User\V3alpha\SearchFilter::class);
        $this->filters = $arr;

        return $this;
    }

}

