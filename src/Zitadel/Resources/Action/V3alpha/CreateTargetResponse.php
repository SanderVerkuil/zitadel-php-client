<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/action_service.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.CreateTargetResponse</code>
 */
class CreateTargetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Key used to sign and check payload sent to the target.
     *
     * Generated from protobuf field <code>string signing_key = 2 [json_name = "signingKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $signing_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\Object\V3alpha\Details $details
     *     @type string $signing_key
     *           Key used to sign and check payload sent to the target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\ActionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Resources\Object\V3alpha\Details|null
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
     * Generated from protobuf field <code>.zitadel.resources.object.v3alpha.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Resources\Object\V3alpha\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Object\V3alpha\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Key used to sign and check payload sent to the target.
     *
     * Generated from protobuf field <code>string signing_key = 2 [json_name = "signingKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSigningKey()
    {
        return $this->signing_key;
    }

    /**
     * Key used to sign and check payload sent to the target.
     *
     * Generated from protobuf field <code>string signing_key = 2 [json_name = "signingKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSigningKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->signing_key = $var;

        return $this;
    }

}

