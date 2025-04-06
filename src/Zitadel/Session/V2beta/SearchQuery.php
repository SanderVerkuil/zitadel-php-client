<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2beta/session.proto

namespace Zitadel\Session\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.session.v2beta.SearchQuery</code>
 */
class SearchQuery extends \Google\Protobuf\Internal\Message
{
    protected $query;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Session\V2beta\IDsQuery $ids_query
     *     @type \Zitadel\Session\V2beta\UserIDQuery $user_id_query
     *     @type \Zitadel\Session\V2beta\CreationDateQuery $creation_date_query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2Beta\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2beta.IDsQuery ids_query = 1 [json_name = "idsQuery"];</code>
     * @return \Zitadel\Session\V2beta\IDsQuery|null
     */
    public function getIdsQuery()
    {
        return $this->readOneof(1);
    }

    public function hasIdsQuery()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2beta.IDsQuery ids_query = 1 [json_name = "idsQuery"];</code>
     * @param \Zitadel\Session\V2beta\IDsQuery $var
     * @return $this
     */
    public function setIdsQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2beta\IDsQuery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2beta.UserIDQuery user_id_query = 2 [json_name = "userIdQuery"];</code>
     * @return \Zitadel\Session\V2beta\UserIDQuery|null
     */
    public function getUserIdQuery()
    {
        return $this->readOneof(2);
    }

    public function hasUserIdQuery()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2beta.UserIDQuery user_id_query = 2 [json_name = "userIdQuery"];</code>
     * @param \Zitadel\Session\V2beta\UserIDQuery $var
     * @return $this
     */
    public function setUserIdQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2beta\UserIDQuery::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2beta.CreationDateQuery creation_date_query = 3 [json_name = "creationDateQuery"];</code>
     * @return \Zitadel\Session\V2beta\CreationDateQuery|null
     */
    public function getCreationDateQuery()
    {
        return $this->readOneof(3);
    }

    public function hasCreationDateQuery()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2beta.CreationDateQuery creation_date_query = 3 [json_name = "creationDateQuery"];</code>
     * @param \Zitadel\Session\V2beta\CreationDateQuery $var
     * @return $this
     */
    public function setCreationDateQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2beta\CreationDateQuery::class);
        $this->writeOneof(3, $var);

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

