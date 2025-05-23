<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/query.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Connect multiple sub-condition with and AND operator.
 *
 * Generated from protobuf message <code>zitadel.user.v2.AndQuery</code>
 */
class AndQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.SearchQuery queries = 1 [json_name = "queries", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $queries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Zitadel\User\V2\SearchQuery>|\Google\Protobuf\Internal\RepeatedField $queries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.SearchQuery queries = 1 [json_name = "queries", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueries()
    {
        return $this->queries;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.SearchQuery queries = 1 [json_name = "queries", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Zitadel\User\V2\SearchQuery>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\User\V2\SearchQuery::class);
        $this->queries = $arr;

        return $this;
    }

}

