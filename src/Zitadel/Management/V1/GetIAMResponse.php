<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.GetIAMResponse</code>
 */
class GetIAMResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *deprecated: use default_org_id instead
     *
     * Generated from protobuf field <code>string global_org_id = 1 [json_name = "globalOrgId"];</code>
     */
    protected $global_org_id = '';
    /**
     * Generated from protobuf field <code>string iam_project_id = 2 [json_name = "iamProjectId"];</code>
     */
    protected $iam_project_id = '';
    /**
     * Generated from protobuf field <code>string default_org_id = 3 [json_name = "defaultOrgId"];</code>
     */
    protected $default_org_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $global_org_id
     *          deprecated: use default_org_id instead
     *     @type string $iam_project_id
     *     @type string $default_org_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     *deprecated: use default_org_id instead
     *
     * Generated from protobuf field <code>string global_org_id = 1 [json_name = "globalOrgId"];</code>
     * @return string
     */
    public function getGlobalOrgId()
    {
        return $this->global_org_id;
    }

    /**
     *deprecated: use default_org_id instead
     *
     * Generated from protobuf field <code>string global_org_id = 1 [json_name = "globalOrgId"];</code>
     * @param string $var
     * @return $this
     */
    public function setGlobalOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->global_org_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iam_project_id = 2 [json_name = "iamProjectId"];</code>
     * @return string
     */
    public function getIamProjectId()
    {
        return $this->iam_project_id;
    }

    /**
     * Generated from protobuf field <code>string iam_project_id = 2 [json_name = "iamProjectId"];</code>
     * @param string $var
     * @return $this
     */
    public function setIamProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->iam_project_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_org_id = 3 [json_name = "defaultOrgId"];</code>
     * @return string
     */
    public function getDefaultOrgId()
    {
        return $this->default_org_id;
    }

    /**
     * Generated from protobuf field <code>string default_org_id = 3 [json_name = "defaultOrgId"];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_org_id = $var;

        return $this;
    }

}

