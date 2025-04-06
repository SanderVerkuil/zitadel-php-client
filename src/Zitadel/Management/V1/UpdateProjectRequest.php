<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.UpdateProjectRequest</code>
 */
class UpdateProjectRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool project_role_assertion = 3 [json_name = "projectRoleAssertion", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $project_role_assertion = false;
    /**
     * Generated from protobuf field <code>bool project_role_check = 4 [json_name = "projectRoleCheck", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $project_role_check = false;
    /**
     * Generated from protobuf field <code>bool has_project_check = 5 [json_name = "hasProjectCheck", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $has_project_check = false;
    /**
     * Generated from protobuf field <code>.zitadel.project.v1.PrivateLabelingSetting private_labeling_setting = 6 [json_name = "privateLabelingSetting", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $private_labeling_setting = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type bool $project_role_assertion
     *     @type bool $project_role_check
     *     @type bool $has_project_check
     *     @type int $private_labeling_setting
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool project_role_assertion = 3 [json_name = "projectRoleAssertion", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getProjectRoleAssertion()
    {
        return $this->project_role_assertion;
    }

    /**
     * Generated from protobuf field <code>bool project_role_assertion = 3 [json_name = "projectRoleAssertion", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setProjectRoleAssertion($var)
    {
        GPBUtil::checkBool($var);
        $this->project_role_assertion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool project_role_check = 4 [json_name = "projectRoleCheck", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getProjectRoleCheck()
    {
        return $this->project_role_check;
    }

    /**
     * Generated from protobuf field <code>bool project_role_check = 4 [json_name = "projectRoleCheck", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setProjectRoleCheck($var)
    {
        GPBUtil::checkBool($var);
        $this->project_role_check = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_project_check = 5 [json_name = "hasProjectCheck", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getHasProjectCheck()
    {
        return $this->has_project_check;
    }

    /**
     * Generated from protobuf field <code>bool has_project_check = 5 [json_name = "hasProjectCheck", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setHasProjectCheck($var)
    {
        GPBUtil::checkBool($var);
        $this->has_project_check = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.project.v1.PrivateLabelingSetting private_labeling_setting = 6 [json_name = "privateLabelingSetting", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getPrivateLabelingSetting()
    {
        return $this->private_labeling_setting;
    }

    /**
     * Generated from protobuf field <code>.zitadel.project.v1.PrivateLabelingSetting private_labeling_setting = 6 [json_name = "privateLabelingSetting", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setPrivateLabelingSetting($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Project\V1\PrivateLabelingSetting::class);
        $this->private_labeling_setting = $var;

        return $this;
    }

}

