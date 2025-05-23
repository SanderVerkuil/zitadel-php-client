<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ActionQuery</code>
 */
class ActionQuery extends \Google\Protobuf\Internal\Message
{
    protected $query;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Action\V1\ActionIDQuery $action_id_query
     *     @type \Zitadel\Action\V1\ActionNameQuery $action_name_query
     *     @type \Zitadel\Action\V1\ActionStateQuery $action_state_query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.ActionIDQuery action_id_query = 1 [json_name = "actionIdQuery"];</code>
     * @return \Zitadel\Action\V1\ActionIDQuery|null
     */
    public function getActionIdQuery()
    {
        return $this->readOneof(1);
    }

    public function hasActionIdQuery()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.ActionIDQuery action_id_query = 1 [json_name = "actionIdQuery"];</code>
     * @param \Zitadel\Action\V1\ActionIDQuery $var
     * @return $this
     */
    public function setActionIdQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Action\V1\ActionIDQuery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.ActionNameQuery action_name_query = 2 [json_name = "actionNameQuery"];</code>
     * @return \Zitadel\Action\V1\ActionNameQuery|null
     */
    public function getActionNameQuery()
    {
        return $this->readOneof(2);
    }

    public function hasActionNameQuery()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.ActionNameQuery action_name_query = 2 [json_name = "actionNameQuery"];</code>
     * @param \Zitadel\Action\V1\ActionNameQuery $var
     * @return $this
     */
    public function setActionNameQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Action\V1\ActionNameQuery::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.ActionStateQuery action_state_query = 3 [json_name = "actionStateQuery"];</code>
     * @return \Zitadel\Action\V1\ActionStateQuery|null
     */
    public function getActionStateQuery()
    {
        return $this->readOneof(3);
    }

    public function hasActionStateQuery()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.action.v1.ActionStateQuery action_state_query = 3 [json_name = "actionStateQuery"];</code>
     * @param \Zitadel\Action\V1\ActionStateQuery $var
     * @return $this
     */
    public function setActionStateQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Action\V1\ActionStateQuery::class);
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

