<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/user_service.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2beta.CreatePasskeyRegistrationLinkResponse</code>
 */
class CreatePasskeyRegistrationLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * in case the medium was set to return_code, the code will be returned
     *
     * Generated from protobuf field <code>optional .zitadel.user.v2beta.PasskeyRegistrationCode code = 2 [json_name = "code", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2beta\Details $details
     *     @type \Zitadel\User\V2beta\PasskeyRegistrationCode $code
     *           in case the medium was set to return_code, the code will be returned
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2beta\Details|null
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
     * Generated from protobuf field <code>.zitadel.object.v2beta.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2beta\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2beta\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * in case the medium was set to return_code, the code will be returned
     *
     * Generated from protobuf field <code>optional .zitadel.user.v2beta.PasskeyRegistrationCode code = 2 [json_name = "code", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\User\V2beta\PasskeyRegistrationCode|null
     */
    public function getCode()
    {
        return $this->code;
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     * in case the medium was set to return_code, the code will be returned
     *
     * Generated from protobuf field <code>optional .zitadel.user.v2beta.PasskeyRegistrationCode code = 2 [json_name = "code", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\User\V2beta\PasskeyRegistrationCode $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\PasskeyRegistrationCode::class);
        $this->code = $var;

        return $this;
    }

}

