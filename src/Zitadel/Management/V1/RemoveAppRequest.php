<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.RemoveAppRequest</code>
 */
class RemoveAppRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string project_id = 1 [json_name = "projectId", (.validate.rules) = {</code>
     */
    protected $project_id = '';
    /**
     * Generated from protobuf field <code>string app_id = 2 [json_name = "appId", (.validate.rules) = {</code>
     */
    protected $app_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *     @type string $app_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string project_id = 1 [json_name = "projectId", (.validate.rules) = {</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Generated from protobuf field <code>string project_id = 1 [json_name = "projectId", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string app_id = 2 [json_name = "appId", (.validate.rules) = {</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>string app_id = 2 [json_name = "appId", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

}

