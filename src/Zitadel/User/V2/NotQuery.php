<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/query.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Negate the sub-condition.
 *
 * Generated from protobuf message <code>zitadel.user.v2.NotQuery</code>
 */
class NotQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.user.v2.SearchQuery query = 1 [json_name = "query", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $query = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\User\V2\SearchQuery $query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.SearchQuery query = 1 [json_name = "query", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\User\V2\SearchQuery|null
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
     * Generated from protobuf field <code>.zitadel.user.v2.SearchQuery query = 1 [json_name = "query", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\User\V2\SearchQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\SearchQuery::class);
        $this->query = $var;

        return $this;
    }

}

