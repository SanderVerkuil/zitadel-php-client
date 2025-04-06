<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.MigrateGenericOIDCProviderRequest</code>
 */
class MigrateGenericOIDCProviderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $id = '';
    protected $template;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Zitadel\Management\V1\AddAzureADProviderRequest $azure
     *     @type \Zitadel\Management\V1\AddGoogleProviderRequest $google
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>.zitadel.management.v1.AddAzureADProviderRequest azure = 2 [json_name = "azure"];</code>
     * @return \Zitadel\Management\V1\AddAzureADProviderRequest|null
     */
    public function getAzure()
    {
        return $this->readOneof(2);
    }

    public function hasAzure()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.AddAzureADProviderRequest azure = 2 [json_name = "azure"];</code>
     * @param \Zitadel\Management\V1\AddAzureADProviderRequest $var
     * @return $this
     */
    public function setAzure($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Management\V1\AddAzureADProviderRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.AddGoogleProviderRequest google = 3 [json_name = "google"];</code>
     * @return \Zitadel\Management\V1\AddGoogleProviderRequest|null
     */
    public function getGoogle()
    {
        return $this->readOneof(3);
    }

    public function hasGoogle()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.AddGoogleProviderRequest google = 3 [json_name = "google"];</code>
     * @param \Zitadel\Management\V1\AddGoogleProviderRequest $var
     * @return $this
     */
    public function setGoogle($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Management\V1\AddGoogleProviderRequest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->whichOneof("template");
    }

}

