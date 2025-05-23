<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.RetrieveIdentityProviderIntentResponse</code>
 */
class RetrieveIdentityProviderIntentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPInformation idp_information = 2 [json_name = "idpInformation"];</code>
     */
    protected $idp_information = null;
    /**
     * Generated from protobuf field <code>string user_id = 3 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2\Details $details
     *     @type \Zitadel\User\V2\IDPInformation $idp_information
     *     @type string $user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2\Details|null
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
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPInformation idp_information = 2 [json_name = "idpInformation"];</code>
     * @return \Zitadel\User\V2\IDPInformation|null
     */
    public function getIdpInformation()
    {
        return $this->idp_information;
    }

    public function hasIdpInformation()
    {
        return isset($this->idp_information);
    }

    public function clearIdpInformation()
    {
        unset($this->idp_information);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2.IDPInformation idp_information = 2 [json_name = "idpInformation"];</code>
     * @param \Zitadel\User\V2\IDPInformation $var
     * @return $this
     */
    public function setIdpInformation($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\IDPInformation::class);
        $this->idp_information = $var;

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

}

