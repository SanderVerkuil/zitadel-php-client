<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/query.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.AndFilter</code>
 */
class AndFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .zitadel.resources.user.v3alpha.SearchFilter queries = 1 [json_name = "queries", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $queries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Zitadel\Resources\User\V3alpha\SearchFilter>|\Google\Protobuf\Internal\RepeatedField $queries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.resources.user.v3alpha.SearchFilter queries = 1 [json_name = "queries", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueries()
    {
        return $this->queries;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.resources.user.v3alpha.SearchFilter queries = 1 [json_name = "queries", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<\Zitadel\Resources\User\V3alpha\SearchFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Resources\User\V3alpha\SearchFilter::class);
        $this->queries = $arr;

        return $this;
    }

}

