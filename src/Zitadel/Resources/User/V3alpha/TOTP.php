<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/authenticator.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.TOTP</code>
 */
class TOTP extends \Google\Protobuf\Internal\Message
{
    /**
     * unique identifier of the time-based one-time password (TOTP) authenticator.
     *
     * Generated from protobuf field <code>string totp_id = 1 [json_name = "totpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $totp_id = '';
    /**
     * The name provided during registration. This is used for easier identification.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $name = '';
    /**
     * State whether the TOTP registration has been completed.
     *
     * Generated from protobuf field <code>bool is_verified = 3 [json_name = "isVerified"];</code>
     */
    protected $is_verified = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $totp_id
     *           unique identifier of the time-based one-time password (TOTP) authenticator.
     *     @type string $name
     *           The name provided during registration. This is used for easier identification.
     *     @type bool $is_verified
     *           State whether the TOTP registration has been completed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Authenticator::initOnce();
        parent::__construct($data);
    }

    /**
     * unique identifier of the time-based one-time password (TOTP) authenticator.
     *
     * Generated from protobuf field <code>string totp_id = 1 [json_name = "totpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getTotpId()
    {
        return $this->totp_id;
    }

    /**
     * unique identifier of the time-based one-time password (TOTP) authenticator.
     *
     * Generated from protobuf field <code>string totp_id = 1 [json_name = "totpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTotpId($var)
    {
        GPBUtil::checkString($var, True);
        $this->totp_id = $var;

        return $this;
    }

    /**
     * The name provided during registration. This is used for easier identification.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name provided during registration. This is used for easier identification.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * State whether the TOTP registration has been completed.
     *
     * Generated from protobuf field <code>bool is_verified = 3 [json_name = "isVerified"];</code>
     * @return bool
     */
    public function getIsVerified()
    {
        return $this->is_verified;
    }

    /**
     * State whether the TOTP registration has been completed.
     *
     * Generated from protobuf field <code>bool is_verified = 3 [json_name = "isVerified"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->is_verified = $var;

        return $this;
    }

}

