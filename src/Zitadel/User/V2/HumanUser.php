<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.HumanUser</code>
 */
class HumanUser extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier of the user.
     *
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = '';
    /**
     * State of the user, for example active, inactive, locked, deleted, initial.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.UserState state = 2 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $state = 0;
    /**
     * Username of the user, which can be globally unique or unique on organization level.
     *
     * Generated from protobuf field <code>string username = 3 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $username = '';
    /**
     * Possible usable login names for the user.
     *
     * Generated from protobuf field <code>repeated string login_names = 4 [json_name = "loginNames", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $login_names;
    /**
     * Preferred login name of the user.
     *
     * Generated from protobuf field <code>string preferred_login_name = 5 [json_name = "preferredLoginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $preferred_login_name = '';
    /**
     * Profile information of the user.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanProfile profile = 6 [json_name = "profile"];</code>
     */
    protected $profile = null;
    /**
     * Email of the user, if defined.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanEmail email = 7 [json_name = "email"];</code>
     */
    protected $email = null;
    /**
     * Phone of the user, if defined.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanPhone phone = 8 [json_name = "phone"];</code>
     */
    protected $phone = null;
    /**
     * User is required to change the used password on the next login.
     *
     * Generated from protobuf field <code>bool password_change_required = 9 [json_name = "passwordChangeRequired"];</code>
     */
    protected $password_change_required = false;
    /**
     * The time the user last changed their password.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_changed = 10 [json_name = "passwordChanged"];</code>
     */
    protected $password_changed = null;
    /**
     * The time the user last skipped MFA initialization.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp mfa_init_skipped = 11 [json_name = "mfaInitSkipped"];</code>
     */
    protected $mfa_init_skipped = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *           Unique identifier of the user.
     *     @type int $state
     *           State of the user, for example active, inactive, locked, deleted, initial.
     *     @type string $username
     *           Username of the user, which can be globally unique or unique on organization level.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $login_names
     *           Possible usable login names for the user.
     *     @type string $preferred_login_name
     *           Preferred login name of the user.
     *     @type \Zitadel\User\V2\HumanProfile $profile
     *           Profile information of the user.
     *     @type \Zitadel\User\V2\HumanEmail $email
     *           Email of the user, if defined.
     *     @type \Zitadel\User\V2\HumanPhone $phone
     *           Phone of the user, if defined.
     *     @type bool $password_change_required
     *           User is required to change the used password on the next login.
     *     @type \Google\Protobuf\Timestamp $password_changed
     *           The time the user last changed their password.
     *     @type \Google\Protobuf\Timestamp $mfa_init_skipped
     *           The time the user last skipped MFA initialization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier of the user.
     *
     * Generated from protobuf field <code>string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Unique identifier of the user.
     *
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
     * State of the user, for example active, inactive, locked, deleted, initial.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.UserState state = 2 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State of the user, for example active, inactive, locked, deleted, initial.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.UserState state = 2 [json_name = "state", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\User\V2\UserState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Username of the user, which can be globally unique or unique on organization level.
     *
     * Generated from protobuf field <code>string username = 3 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Username of the user, which can be globally unique or unique on organization level.
     *
     * Generated from protobuf field <code>string username = 3 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Possible usable login names for the user.
     *
     * Generated from protobuf field <code>repeated string login_names = 4 [json_name = "loginNames", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLoginNames()
    {
        return $this->login_names;
    }

    /**
     * Possible usable login names for the user.
     *
     * Generated from protobuf field <code>repeated string login_names = 4 [json_name = "loginNames", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLoginNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->login_names = $arr;

        return $this;
    }

    /**
     * Preferred login name of the user.
     *
     * Generated from protobuf field <code>string preferred_login_name = 5 [json_name = "preferredLoginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPreferredLoginName()
    {
        return $this->preferred_login_name;
    }

    /**
     * Preferred login name of the user.
     *
     * Generated from protobuf field <code>string preferred_login_name = 5 [json_name = "preferredLoginName", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPreferredLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->preferred_login_name = $var;

        return $this;
    }

    /**
     * Profile information of the user.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanProfile profile = 6 [json_name = "profile"];</code>
     * @return \Zitadel\User\V2\HumanProfile|null
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
     * Profile information of the user.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanProfile profile = 6 [json_name = "profile"];</code>
     * @param \Zitadel\User\V2\HumanProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\HumanProfile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Email of the user, if defined.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanEmail email = 7 [json_name = "email"];</code>
     * @return \Zitadel\User\V2\HumanEmail|null
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
     * Email of the user, if defined.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanEmail email = 7 [json_name = "email"];</code>
     * @param \Zitadel\User\V2\HumanEmail $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\HumanEmail::class);
        $this->email = $var;

        return $this;
    }

    /**
     * Phone of the user, if defined.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanPhone phone = 8 [json_name = "phone"];</code>
     * @return \Zitadel\User\V2\HumanPhone|null
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
     * Phone of the user, if defined.
     *
     * Generated from protobuf field <code>.zitadel.user.v2.HumanPhone phone = 8 [json_name = "phone"];</code>
     * @param \Zitadel\User\V2\HumanPhone $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2\HumanPhone::class);
        $this->phone = $var;

        return $this;
    }

    /**
     * User is required to change the used password on the next login.
     *
     * Generated from protobuf field <code>bool password_change_required = 9 [json_name = "passwordChangeRequired"];</code>
     * @return bool
     */
    public function getPasswordChangeRequired()
    {
        return $this->password_change_required;
    }

    /**
     * User is required to change the used password on the next login.
     *
     * Generated from protobuf field <code>bool password_change_required = 9 [json_name = "passwordChangeRequired"];</code>
     * @param bool $var
     * @return $this
     */
    public function setPasswordChangeRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->password_change_required = $var;

        return $this;
    }

    /**
     * The time the user last changed their password.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_changed = 10 [json_name = "passwordChanged"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPasswordChanged()
    {
        return $this->password_changed;
    }

    public function hasPasswordChanged()
    {
        return isset($this->password_changed);
    }

    public function clearPasswordChanged()
    {
        unset($this->password_changed);
    }

    /**
     * The time the user last changed their password.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_changed = 10 [json_name = "passwordChanged"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPasswordChanged($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->password_changed = $var;

        return $this;
    }

    /**
     * The time the user last skipped MFA initialization.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp mfa_init_skipped = 11 [json_name = "mfaInitSkipped"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMfaInitSkipped()
    {
        return $this->mfa_init_skipped;
    }

    public function hasMfaInitSkipped()
    {
        return isset($this->mfa_init_skipped);
    }

    public function clearMfaInitSkipped()
    {
        unset($this->mfa_init_skipped);
    }

    /**
     * The time the user last skipped MFA initialization.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp mfa_init_skipped = 11 [json_name = "mfaInitSkipped"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMfaInitSkipped($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->mfa_init_skipped = $var;

        return $this;
    }

}

