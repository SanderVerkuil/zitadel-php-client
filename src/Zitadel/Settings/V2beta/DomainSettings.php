<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/domain_settings.proto

namespace Zitadel\Settings\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2beta.DomainSettings</code>
 */
class DomainSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool login_name_includes_domain = 1 [json_name = "loginNameIncludesDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_name_includes_domain = false;
    /**
     * Generated from protobuf field <code>bool require_org_domain_verification = 2 [json_name = "requireOrgDomainVerification", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $require_org_domain_verification = false;
    /**
     * Generated from protobuf field <code>bool smtp_sender_address_matches_instance_domain = 3 [json_name = "smtpSenderAddressMatchesInstanceDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $smtp_sender_address_matches_instance_domain = false;
    /**
     * resource_owner_type returns if the setting is managed on the organization or on the instance
     *
     * Generated from protobuf field <code>.zitadel.settings.v2beta.ResourceOwnerType resource_owner_type = 6 [json_name = "resourceOwnerType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $resource_owner_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $login_name_includes_domain
     *     @type bool $require_org_domain_verification
     *     @type bool $smtp_sender_address_matches_instance_domain
     *     @type int $resource_owner_type
     *           resource_owner_type returns if the setting is managed on the organization or on the instance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2Beta\DomainSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool login_name_includes_domain = 1 [json_name = "loginNameIncludesDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getLoginNameIncludesDomain()
    {
        return $this->login_name_includes_domain;
    }

    /**
     * Generated from protobuf field <code>bool login_name_includes_domain = 1 [json_name = "loginNameIncludesDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setLoginNameIncludesDomain($var)
    {
        GPBUtil::checkBool($var);
        $this->login_name_includes_domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool require_org_domain_verification = 2 [json_name = "requireOrgDomainVerification", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getRequireOrgDomainVerification()
    {
        return $this->require_org_domain_verification;
    }

    /**
     * Generated from protobuf field <code>bool require_org_domain_verification = 2 [json_name = "requireOrgDomainVerification", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireOrgDomainVerification($var)
    {
        GPBUtil::checkBool($var);
        $this->require_org_domain_verification = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool smtp_sender_address_matches_instance_domain = 3 [json_name = "smtpSenderAddressMatchesInstanceDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getSmtpSenderAddressMatchesInstanceDomain()
    {
        return $this->smtp_sender_address_matches_instance_domain;
    }

    /**
     * Generated from protobuf field <code>bool smtp_sender_address_matches_instance_domain = 3 [json_name = "smtpSenderAddressMatchesInstanceDomain", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setSmtpSenderAddressMatchesInstanceDomain($var)
    {
        GPBUtil::checkBool($var);
        $this->smtp_sender_address_matches_instance_domain = $var;

        return $this;
    }

    /**
     * resource_owner_type returns if the setting is managed on the organization or on the instance
     *
     * Generated from protobuf field <code>.zitadel.settings.v2beta.ResourceOwnerType resource_owner_type = 6 [json_name = "resourceOwnerType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getResourceOwnerType()
    {
        return $this->resource_owner_type;
    }

    /**
     * resource_owner_type returns if the setting is managed on the organization or on the instance
     *
     * Generated from protobuf field <code>.zitadel.settings.v2beta.ResourceOwnerType resource_owner_type = 6 [json_name = "resourceOwnerType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setResourceOwnerType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Settings\V2beta\ResourceOwnerType::class);
        $this->resource_owner_type = $var;

        return $this;
    }

}

