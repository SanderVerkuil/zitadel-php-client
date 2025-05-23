<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/session.proto

namespace Zitadel\Session\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.session.v2.IntentFactor</code>
 */
class IntentFactor extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp verified_at = 1 [json_name = "verifiedAt", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $verified_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $verified_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp verified_at = 1 [json_name = "verifiedAt", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVerifiedAt()
    {
        return $this->verified_at;
    }

    public function hasVerifiedAt()
    {
        return isset($this->verified_at);
    }

    public function clearVerifiedAt()
    {
        unset($this->verified_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp verified_at = 1 [json_name = "verifiedAt", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVerifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->verified_at = $var;

        return $this;
    }

}

