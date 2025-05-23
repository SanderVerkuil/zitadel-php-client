<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddAppKeyRequest</code>
 */
class AddAppKeyRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.zitadel.authn.v1.KeyType type = 3 [json_name = "type", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 4 [json_name = "expirationDate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $expiration_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *     @type string $app_id
     *     @type int $type
     *     @type \Google\Protobuf\Timestamp $expiration_date
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

    /**
     * Generated from protobuf field <code>.zitadel.authn.v1.KeyType type = 3 [json_name = "type", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.authn.v1.KeyType type = 3 [json_name = "type", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Authn\V1\KeyType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 4 [json_name = "expirationDate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    public function hasExpirationDate()
    {
        return isset($this->expiration_date);
    }

    public function clearExpirationDate()
    {
        unset($this->expiration_date);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 4 [json_name = "expirationDate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_date = $var;

        return $this;
    }

}

