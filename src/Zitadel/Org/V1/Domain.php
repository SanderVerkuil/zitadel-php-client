<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/org.proto

namespace Zitadel\Org\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.org.v1.Domain</code>
 */
class Domain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $org_id = '';
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>string domain_name = 3 [json_name = "domainName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $domain_name = '';
    /**
     * Generated from protobuf field <code>bool is_verified = 4 [json_name = "isVerified", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $is_verified = false;
    /**
     * Generated from protobuf field <code>bool is_primary = 5 [json_name = "isPrimary", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $is_primary = false;
    /**
     * Generated from protobuf field <code>.zitadel.org.v1.DomainValidationType validation_type = 6 [json_name = "validationType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $validation_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type string $domain_name
     *     @type bool $is_verified
     *     @type bool $is_primary
     *     @type int $validation_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Org::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     * @return \Zitadel\V1\ObjectDetails|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     * @param \Zitadel\V1\ObjectDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ObjectDetails::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string domain_name = 3 [json_name = "domainName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * Generated from protobuf field <code>string domain_name = 3 [json_name = "domainName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_verified = 4 [json_name = "isVerified", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->is_verified;
    }

    /**
     * Generated from protobuf field <code>bool is_verified = 4 [json_name = "isVerified", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->is_verified = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_primary = 5 [json_name = "isPrimary", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->is_primary;
    }

    /**
     * Generated from protobuf field <code>bool is_primary = 5 [json_name = "isPrimary", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPrimary($var)
    {
        GPBUtil::checkBool($var);
        $this->is_primary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.org.v1.DomainValidationType validation_type = 6 [json_name = "validationType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getValidationType()
    {
        return $this->validation_type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.org.v1.DomainValidationType validation_type = 6 [json_name = "validationType", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setValidationType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Org\V1\DomainValidationType::class);
        $this->validation_type = $var;

        return $this;
    }

}

