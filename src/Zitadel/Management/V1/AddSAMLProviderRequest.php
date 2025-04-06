<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddSAMLProviderRequest</code>
 */
class AddSAMLProviderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     */
    protected $name = '';
    /**
     * Binding which defines the type of communication with the identity provider.
     *
     * Generated from protobuf field <code>.zitadel.idp.v1.SAMLBinding binding = 4 [json_name = "binding"];</code>
     */
    protected $binding = 0;
    /**
     * Boolean which defines if the authentication requests are signed.
     *
     * Generated from protobuf field <code>bool with_signed_request = 5 [json_name = "withSignedRequest"];</code>
     */
    protected $with_signed_request = false;
    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 6 [json_name = "providerOptions"];</code>
     */
    protected $provider_options = null;
    /**
     * Optionally specify the `nameid-format` requested.
     *
     * Generated from protobuf field <code>optional .zitadel.idp.v1.SAMLNameIDFormat name_id_format = 7 [json_name = "nameIdFormat"];</code>
     */
    protected $name_id_format = null;
    /**
     * Optionally specify the name of the attribute, which will be used to map the user
     * in case the nameid-format returned is `urn:oasis:names:tc:SAML:2.0:nameid-format:transient`.
     *
     * Generated from protobuf field <code>optional string transient_mapping_attribute_name = 8 [json_name = "transientMappingAttributeName"];</code>
     */
    protected $transient_mapping_attribute_name = null;
    protected $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $metadata_xml
     *           Metadata of the SAML identity provider.
     *     @type string $metadata_url
     *           Url to the metadata of the SAML identity provider.
     *     @type int $binding
     *           Binding which defines the type of communication with the identity provider.
     *     @type bool $with_signed_request
     *           Boolean which defines if the authentication requests are signed.
     *     @type \Zitadel\Idp\V1\Options $provider_options
     *     @type int $name_id_format
     *           Optionally specify the `nameid-format` requested.
     *     @type string $transient_mapping_attribute_name
     *           Optionally specify the name of the attribute, which will be used to map the user
     *           in case the nameid-format returned is `urn:oasis:names:tc:SAML:2.0:nameid-format:transient`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
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
     * Metadata of the SAML identity provider.
     *
     * Generated from protobuf field <code>bytes metadata_xml = 2 [json_name = "metadataXml", (.validate.rules) = {</code>
     * @return string
     */
    public function getMetadataXml()
    {
        return $this->readOneof(2);
    }

    public function hasMetadataXml()
    {
        return $this->hasOneof(2);
    }

    /**
     * Metadata of the SAML identity provider.
     *
     * Generated from protobuf field <code>bytes metadata_xml = 2 [json_name = "metadataXml", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataXml($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Url to the metadata of the SAML identity provider.
     *
     * Generated from protobuf field <code>string metadata_url = 3 [json_name = "metadataUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getMetadataUrl()
    {
        return $this->readOneof(3);
    }

    public function hasMetadataUrl()
    {
        return $this->hasOneof(3);
    }

    /**
     * Url to the metadata of the SAML identity provider.
     *
     * Generated from protobuf field <code>string metadata_url = 3 [json_name = "metadataUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Binding which defines the type of communication with the identity provider.
     *
     * Generated from protobuf field <code>.zitadel.idp.v1.SAMLBinding binding = 4 [json_name = "binding"];</code>
     * @return int
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Binding which defines the type of communication with the identity provider.
     *
     * Generated from protobuf field <code>.zitadel.idp.v1.SAMLBinding binding = 4 [json_name = "binding"];</code>
     * @param int $var
     * @return $this
     */
    public function setBinding($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Idp\V1\SAMLBinding::class);
        $this->binding = $var;

        return $this;
    }

    /**
     * Boolean which defines if the authentication requests are signed.
     *
     * Generated from protobuf field <code>bool with_signed_request = 5 [json_name = "withSignedRequest"];</code>
     * @return bool
     */
    public function getWithSignedRequest()
    {
        return $this->with_signed_request;
    }

    /**
     * Boolean which defines if the authentication requests are signed.
     *
     * Generated from protobuf field <code>bool with_signed_request = 5 [json_name = "withSignedRequest"];</code>
     * @param bool $var
     * @return $this
     */
    public function setWithSignedRequest($var)
    {
        GPBUtil::checkBool($var);
        $this->with_signed_request = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 6 [json_name = "providerOptions"];</code>
     * @return \Zitadel\Idp\V1\Options|null
     */
    public function getProviderOptions()
    {
        return $this->provider_options;
    }

    public function hasProviderOptions()
    {
        return isset($this->provider_options);
    }

    public function clearProviderOptions()
    {
        unset($this->provider_options);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 6 [json_name = "providerOptions"];</code>
     * @param \Zitadel\Idp\V1\Options $var
     * @return $this
     */
    public function setProviderOptions($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V1\Options::class);
        $this->provider_options = $var;

        return $this;
    }

    /**
     * Optionally specify the `nameid-format` requested.
     *
     * Generated from protobuf field <code>optional .zitadel.idp.v1.SAMLNameIDFormat name_id_format = 7 [json_name = "nameIdFormat"];</code>
     * @return int
     */
    public function getNameIdFormat()
    {
        return isset($this->name_id_format) ? $this->name_id_format : 0;
    }

    public function hasNameIdFormat()
    {
        return isset($this->name_id_format);
    }

    public function clearNameIdFormat()
    {
        unset($this->name_id_format);
    }

    /**
     * Optionally specify the `nameid-format` requested.
     *
     * Generated from protobuf field <code>optional .zitadel.idp.v1.SAMLNameIDFormat name_id_format = 7 [json_name = "nameIdFormat"];</code>
     * @param int $var
     * @return $this
     */
    public function setNameIdFormat($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Idp\V1\SAMLNameIDFormat::class);
        $this->name_id_format = $var;

        return $this;
    }

    /**
     * Optionally specify the name of the attribute, which will be used to map the user
     * in case the nameid-format returned is `urn:oasis:names:tc:SAML:2.0:nameid-format:transient`.
     *
     * Generated from protobuf field <code>optional string transient_mapping_attribute_name = 8 [json_name = "transientMappingAttributeName"];</code>
     * @return string
     */
    public function getTransientMappingAttributeName()
    {
        return isset($this->transient_mapping_attribute_name) ? $this->transient_mapping_attribute_name : '';
    }

    public function hasTransientMappingAttributeName()
    {
        return isset($this->transient_mapping_attribute_name);
    }

    public function clearTransientMappingAttributeName()
    {
        unset($this->transient_mapping_attribute_name);
    }

    /**
     * Optionally specify the name of the attribute, which will be used to map the user
     * in case the nameid-format returned is `urn:oasis:names:tc:SAML:2.0:nameid-format:transient`.
     *
     * Generated from protobuf field <code>optional string transient_mapping_attribute_name = 8 [json_name = "transientMappingAttributeName"];</code>
     * @param string $var
     * @return $this
     */
    public function setTransientMappingAttributeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->transient_mapping_attribute_name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->whichOneof("metadata");
    }

}

