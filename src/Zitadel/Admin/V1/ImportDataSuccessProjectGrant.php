<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.ImportDataSuccessProjectGrant</code>
 */
class ImportDataSuccessProjectGrant extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string grant_id = 1 [json_name = "grantId"];</code>
     */
    protected $grant_id = '';
    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId"];</code>
     */
    protected $project_id = '';
    /**
     * Generated from protobuf field <code>string org_id = 3 [json_name = "orgId"];</code>
     */
    protected $org_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $grant_id
     *     @type string $project_id
     *     @type string $org_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string grant_id = 1 [json_name = "grantId"];</code>
     * @return string
     */
    public function getGrantId()
    {
        return $this->grant_id;
    }

    /**
     * Generated from protobuf field <code>string grant_id = 1 [json_name = "grantId"];</code>
     * @param string $var
     * @return $this
     */
    public function setGrantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->grant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId"];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Generated from protobuf field <code>string project_id = 2 [json_name = "projectId"];</code>
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
     * Generated from protobuf field <code>string org_id = 3 [json_name = "orgId"];</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Generated from protobuf field <code>string org_id = 3 [json_name = "orgId"];</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_id = $var;

        return $this;
    }

}

