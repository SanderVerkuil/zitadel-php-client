<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.UpdateHumanUserRequest</code>
 */
class UpdateHumanUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>optional string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $username = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanProfile profile = 3 [json_name = "profile"];</code>
     */
    protected $profile = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanEmail email = 4 [json_name = "email"];</code>
     */
    protected $email = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanPhone phone = 5 [json_name = "phone"];</code>
     */
    protected $phone = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetPassword password = 6 [json_name = "password"];</code>
     */
    protected $password = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *     @type string $username
     *     @type \Zitadel\User\V2\SetHumanProfile $profile
     *     @type \Zitadel\User\V2\SetHumanEmail $email
     *     @type \Zitadel\User\V2\SetHumanPhone $phone
     *     @type \Zitadel\User\V2\SetPassword $password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>optional string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUsername()
    {
        return isset($this->username) ? $this->username : '';
    }

    public function hasUsername()
    {
        return isset($this->username);
    }

    public function clearUsername()
    {
        unset($this->username);
    }

    /**
     * Generated from protobuf field <code>optional string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanProfile profile = 3 [json_name = "profile"];</code>
     * @return \Zitadel\User\V2\SetHumanProfile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanProfile profile = 3 [json_name = "profile"];</code>
     * @param \Zitadel\User\V2\SetHumanProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\SetHumanProfile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanEmail email = 4 [json_name = "email"];</code>
     * @return \Zitadel\User\V2\SetHumanEmail|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function hasEmail()
    {
        return isset($this->email);
    }

    public function clearEmail()
    {
        unset($this->email);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanEmail email = 4 [json_name = "email"];</code>
     * @param \Zitadel\User\V2\SetHumanEmail $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\SetHumanEmail::class);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanPhone phone = 5 [json_name = "phone"];</code>
     * @return \Zitadel\User\V2\SetHumanPhone|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function hasPhone()
    {
        return isset($this->phone);
    }

    public function clearPhone()
    {
        unset($this->phone);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetHumanPhone phone = 5 [json_name = "phone"];</code>
     * @param \Zitadel\User\V2\SetHumanPhone $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\SetHumanPhone::class);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetPassword password = 6 [json_name = "password"];</code>
     * @return \Zitadel\User\V2\SetPassword|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function hasPassword()
    {
        return isset($this->password);
    }

    public function clearPassword()
    {
        unset($this->password);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.user.v2.SetPassword password = 6 [json_name = "password"];</code>
     * @param \Zitadel\User\V2\SetPassword $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\SetPassword::class);
        $this->password = $var;

        return $this;
    }

}

