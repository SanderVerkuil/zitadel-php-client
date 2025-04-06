<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user.proto

namespace Zitadel\User\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v1.Session</code>
 */
class Session extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string session_id = 1 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $session_id = '';
    /**
     * Generated from protobuf field <code>string agent_id = 2 [json_name = "agentId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $agent_id = '';
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.SessionState auth_state = 3 [json_name = "authState", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $auth_state = 0;
    /**
     * Generated from protobuf field <code>string user_id = 4 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string user_name = 5 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_name = '';
    /**
     * Generated from protobuf field <code>string login_name = 7 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_name = '';
    /**
     * Generated from protobuf field <code>string display_name = 8 [json_name = "displayName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 9 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>string avatar_url = 10 [json_name = "avatarUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $avatar_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *     @type string $agent_id
     *     @type int $auth_state
     *     @type string $user_id
     *     @type string $user_name
     *     @type string $login_name
     *     @type string $display_name
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type string $avatar_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string session_id = 1 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>string session_id = 1 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string agent_id = 2 [json_name = "agentId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getAgentId()
    {
        return $this->agent_id;
    }

    /**
     * Generated from protobuf field <code>string agent_id = 2 [json_name = "agentId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAgentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.SessionState auth_state = 3 [json_name = "authState", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getAuthState()
    {
        return $this->auth_state;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.SessionState auth_state = 3 [json_name = "authState", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setAuthState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\User\V1\SessionState::class);
        $this->auth_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 4 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 4 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string user_name = 5 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Generated from protobuf field <code>string user_name = 5 [json_name = "userName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>string login_name = 7 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->login_name;
    }

    /**
     * Generated from protobuf field <code>string login_name = 7 [json_name = "loginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string display_name = 8 [json_name = "displayName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Generated from protobuf field <code>string display_name = 8 [json_name = "displayName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 9 [json_name = "details"];</code>
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
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 9 [json_name = "details"];</code>
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
     * Generated from protobuf field <code>string avatar_url = 10 [json_name = "avatarUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->avatar_url;
    }

    /**
     * Generated from protobuf field <code>string avatar_url = 10 [json_name = "avatarUrl", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAvatarUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar_url = $var;

        return $this;
    }

}

