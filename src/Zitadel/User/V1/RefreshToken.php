<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user.proto

namespace Zitadel\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v1.RefreshToken</code>
 */
class RefreshToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 2 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>string client_id = 3 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $client_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp auth_time = 4 [json_name = "authTime", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $auth_time = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp idle_expiration = 5 [json_name = "idleExpiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $idle_expiration = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 6 [json_name = "expiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $expiration = null;
    /**
     * Generated from protobuf field <code>repeated string scopes = 7 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $scopes;
    /**
     * Generated from protobuf field <code>repeated string audience = 8 [json_name = "audience", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $audience;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type string $client_id
     *     @type \Google\Protobuf\Timestamp $auth_time
     *     @type \Google\Protobuf\Timestamp $idle_expiration
     *     @type \Google\Protobuf\Timestamp $expiration
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $scopes
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $audience
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

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
     * Generated from protobuf field <code>string client_id = 3 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 3 [json_name = "clientId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp auth_time = 4 [json_name = "authTime", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getAuthTime()
    {
        return $this->auth_time;
    }

    public function hasAuthTime()
    {
        return isset($this->auth_time);
    }

    public function clearAuthTime()
    {
        unset($this->auth_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp auth_time = 4 [json_name = "authTime", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAuthTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->auth_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp idle_expiration = 5 [json_name = "idleExpiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getIdleExpiration()
    {
        return $this->idle_expiration;
    }

    public function hasIdleExpiration()
    {
        return isset($this->idle_expiration);
    }

    public function clearIdleExpiration()
    {
        unset($this->idle_expiration);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp idle_expiration = 5 [json_name = "idleExpiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIdleExpiration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->idle_expiration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 6 [json_name = "expiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    public function hasExpiration()
    {
        return isset($this->expiration);
    }

    public function clearExpiration()
    {
        unset($this->expiration);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration = 6 [json_name = "expiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 7 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * Generated from protobuf field <code>repeated string scopes = 7 [json_name = "scopes", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string audience = 8 [json_name = "audience", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Generated from protobuf field <code>repeated string audience = 8 [json_name = "audience", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAudience($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->audience = $arr;

        return $this;
    }

}

