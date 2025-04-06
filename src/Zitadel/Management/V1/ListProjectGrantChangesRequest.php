<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.ListProjectGrantChangesRequest</code>
 */
class ListProjectGrantChangesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.change.v1.ChangeQuery query = 1 [json_name = "query"];</code>
     */
    protected $query = null;
    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId", (.validate.rules) = {</code>
     */
    protected $project_id = '';
    /**
     * Generated from protobuf field <code>string grant_id = 3 [json_name = "grantId", (.validate.rules) = {</code>
     */
    protected $grant_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Change\V1\ChangeQuery $query
     *          list limitations and ordering
     *     @type string $project_id
     *     @type string $grant_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     *list limitations and ordering
     *
     * Generated from protobuf field <code>.zitadel.change.v1.ChangeQuery query = 1 [json_name = "query"];</code>
     * @return \Zitadel\Change\V1\ChangeQuery|null
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
     * Generated from protobuf field <code>.zitadel.change.v1.ChangeQuery query = 1 [json_name = "query"];</code>
     * @param \Zitadel\Change\V1\ChangeQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Change\V1\ChangeQuery::class);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId", (.validate.rules) = {</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 3 [json_name = "grantId", (.validate.rules) = {</code>
     * @return string
     */
    public function getGrantId()
    {
        return $this->grant_id;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 3 [json_name = "grantId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGrantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->grant_id = $var;

        return $this;
    }

}

