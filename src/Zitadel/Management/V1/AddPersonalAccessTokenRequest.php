<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddPersonalAccessTokenRequest</code>
 */
class AddPersonalAccessTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 2 [json_name = "expirationDate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $expiration_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type \Google\Protobuf\Timestamp $expiration_date
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.validate.rules) = {</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 2 [json_name = "expirationDate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    public function hasExpirationDate()
    {
        return isset($this->expiration_date);
    }

    public function clearExpirationDate()
    {
        unset($this->expiration_date);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_date = 2 [json_name = "expirationDate", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_date = $var;

        return $this;
    }

}

