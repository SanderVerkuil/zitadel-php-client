<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/idp.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.IDPInformation</code>
 */
class IDPInformation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string idp_id = 2 [json_name = "idpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $idp_id = '';
    /**
     * Generated from protobuf field <code>string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string user_name = 4 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_name = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct raw_information = 5 [json_name = "rawInformation", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $raw_information = null;
    protected $access;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\User\V2\IDPOAuthAccessInformation $oauth
     *     @type \Zitadel\User\V2\IDPLDAPAccessInformation $ldap
     *     @type \Zitadel\User\V2\IDPSAMLAccessInformation $saml
     *     @type string $idp_id
     *     @type string $user_id
     *     @type string $user_name
     *     @type \Google\Protobuf\Struct $raw_information
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\Idp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPOAuthAccessInformation oauth = 1 [json_name = "oauth", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\User\V2\IDPOAuthAccessInformation|null
     */
    public function getOauth()
    {
        return $this->readOneof(1);
    }

    public function hasOauth()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPOAuthAccessInformation oauth = 1 [json_name = "oauth", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\User\V2\IDPOAuthAccessInformation $var
     * @return $this
     */
    public function setOauth($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\IDPOAuthAccessInformation::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPLDAPAccessInformation ldap = 6 [json_name = "ldap", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\User\V2\IDPLDAPAccessInformation|null
     */
    public function getLdap()
    {
        return $this->readOneof(6);
    }

    public function hasLdap()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPLDAPAccessInformation ldap = 6 [json_name = "ldap", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\User\V2\IDPLDAPAccessInformation $var
     * @return $this
     */
    public function setLdap($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\IDPLDAPAccessInformation::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPSAMLAccessInformation saml = 7 [json_name = "saml", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\User\V2\IDPSAMLAccessInformation|null
     */
    public function getSaml()
    {
        return $this->readOneof(7);
    }

    public function hasSaml()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPSAMLAccessInformation saml = 7 [json_name = "saml", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\User\V2\IDPSAMLAccessInformation $var
     * @return $this
     */
    public function setSaml($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\IDPSAMLAccessInformation::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string idp_id = 2 [json_name = "idpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIdpId()
    {
        return $this->idp_id;
    }

    /**
     * Generated from protobuf field <code>string idp_id = 2 [json_name = "idpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIdpId($var)
    {
        GPBUtil::checkString($var, True);
        $this->idp_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_name = 4 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Generated from protobuf field <code>string user_name = 4 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct raw_information = 5 [json_name = "rawInformation", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getRawInformation()
    {
        return $this->raw_information;
    }

    public function hasRawInformation()
    {
        return isset($this->raw_information);
    }

    public function clearRawInformation()
    {
        unset($this->raw_information);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct raw_information = 5 [json_name = "rawInformation", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setRawInformation($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->raw_information = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccess()
    {
        return $this->whichOneof("access");
    }

}

