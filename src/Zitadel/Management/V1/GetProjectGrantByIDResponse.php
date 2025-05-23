<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.GetProjectGrantByIDResponse</code>
 */
class GetProjectGrantByIDResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.project.v1.GrantedProject project_grant = 1 [json_name = "projectGrant"];</code>
     */
    protected $project_grant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Project\V1\GrantedProject $project_grant
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.project.v1.GrantedProject project_grant = 1 [json_name = "projectGrant"];</code>
     * @return \Zitadel\Project\V1\GrantedProject|null
     */
    public function getProjectGrant()
    {
        return $this->project_grant;
    }

    public function hasProjectGrant()
    {
        return isset($this->project_grant);
    }

    public function clearProjectGrant()
    {
        unset($this->project_grant);
    }

    /**
     * Generated from protobuf field <code>.zitadel.project.v1.GrantedProject project_grant = 1 [json_name = "projectGrant"];</code>
     * @param \Zitadel\Project\V1\GrantedProject $var
     * @return $this
     */
    public function setProjectGrant($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Project\V1\GrantedProject::class);
        $this->project_grant = $var;

        return $this;
    }

}

