<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddAPIAppRequest</code>
 */
class AddAPIAppRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string project_id = 1 [json_name = "projectId", (.validate.rules) = {</code>
     */
    protected $project_id = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>.zitadel.app.v1.APIAuthMethodType auth_method_type = 3 [json_name = "authMethodType", (.validate.rules) = {</code>
     */
    protected $auth_method_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *     @type string $name
     *     @type int $auth_method_type
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
     * Generated from protobuf field <code>.zitadel.app.v1.APIAuthMethodType auth_method_type = 3 [json_name = "authMethodType", (.validate.rules) = {</code>
     * @return int
     */
    public function getAuthMethodType()
    {
        return $this->auth_method_type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.app.v1.APIAuthMethodType auth_method_type = 3 [json_name = "authMethodType", (.validate.rules) = {</code>
     * @param int $var
     * @return $this
     */
    public function setAuthMethodType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\App\V1\APIAuthMethodType::class);
        $this->auth_method_type = $var;

        return $this;
    }

}

