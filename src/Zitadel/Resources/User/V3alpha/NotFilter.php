<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/query.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.NotFilter</code>
 */
class NotFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.SearchFilter query = 1 [json_name = "query", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $query = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\User\V3alpha\SearchFilter $query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.SearchFilter query = 1 [json_name = "query", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Resources\User\V3alpha\SearchFilter|null
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
     * Generated from protobuf field <code>.zitadel.resources.user.v3alpha.SearchFilter query = 1 [json_name = "query", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Resources\User\V3alpha\SearchFilter $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\User\V3alpha\SearchFilter::class);
        $this->query = $var;

        return $this;
    }

}

