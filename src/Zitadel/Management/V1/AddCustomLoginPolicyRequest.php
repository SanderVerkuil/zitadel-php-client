<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddCustomLoginPolicyRequest</code>
 */
class AddCustomLoginPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool allow_username_password = 1 [json_name = "allowUsernamePassword"];</code>
     */
    protected $allow_username_password = false;
    /**
     * Generated from protobuf field <code>bool allow_register = 2 [json_name = "allowRegister"];</code>
     */
    protected $allow_register = false;
    /**
     * Generated from protobuf field <code>bool allow_external_idp = 3 [json_name = "allowExternalIdp"];</code>
     */
    protected $allow_external_idp = false;
    /**
     * Generated from protobuf field <code>bool force_mfa = 4 [json_name = "forceMfa"];</code>
     */
    protected $force_mfa = false;
    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.PasswordlessType passwordless_type = 5 [json_name = "passwordlessType", (.validate.rules) = {</code>
     */
    protected $passwordless_type = 0;
    /**
     * Generated from protobuf field <code>bool hide_password_reset = 6 [json_name = "hidePasswordReset"];</code>
     */
    protected $hide_password_reset = false;
    /**
     * Generated from protobuf field <code>bool ignore_unknown_usernames = 7 [json_name = "ignoreUnknownUsernames", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $ignore_unknown_usernames = false;
    /**
     * Generated from protobuf field <code>string default_redirect_uri = 8 [json_name = "defaultRedirectUri", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $default_redirect_uri = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration password_check_lifetime = 9 [json_name = "passwordCheckLifetime"];</code>
     */
    protected $password_check_lifetime = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration external_login_check_lifetime = 10 [json_name = "externalLoginCheckLifetime"];</code>
     */
    protected $external_login_check_lifetime = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration mfa_init_skip_lifetime = 11 [json_name = "mfaInitSkipLifetime"];</code>
     */
    protected $mfa_init_skip_lifetime = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration second_factor_check_lifetime = 12 [json_name = "secondFactorCheckLifetime"];</code>
     */
    protected $second_factor_check_lifetime = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration multi_factor_check_lifetime = 13 [json_name = "multiFactorCheckLifetime"];</code>
     */
    protected $multi_factor_check_lifetime = null;
    /**
     * Generated from protobuf field <code>repeated .zitadel.policy.v1.SecondFactorType second_factors = 14 [json_name = "secondFactors"];</code>
     */
    private $second_factors;
    /**
     * Generated from protobuf field <code>repeated .zitadel.policy.v1.MultiFactorType multi_factors = 15 [json_name = "multiFactors"];</code>
     */
    private $multi_factors;
    /**
     * Generated from protobuf field <code>repeated .zitadel.management.v1.AddCustomLoginPolicyRequest.IDP idps = 16 [json_name = "idps"];</code>
     */
    private $idps;
    /**
     * If set to true, the suffix (\@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success.
     *
     * Generated from protobuf field <code>bool allow_domain_discovery = 17 [json_name = "allowDomainDiscovery", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $allow_domain_discovery = false;
    /**
     * Generated from protobuf field <code>bool disable_login_with_email = 18 [json_name = "disableLoginWithEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $disable_login_with_email = false;
    /**
     * Generated from protobuf field <code>bool disable_login_with_phone = 19 [json_name = "disableLoginWithPhone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $disable_login_with_phone = false;
    /**
     * Generated from protobuf field <code>bool force_mfa_local_only = 20 [json_name = "forceMfaLocalOnly", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $force_mfa_local_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $allow_username_password
     *     @type bool $allow_register
     *     @type bool $allow_external_idp
     *     @type bool $force_mfa
     *     @type int $passwordless_type
     *     @type bool $hide_password_reset
     *     @type bool $ignore_unknown_usernames
     *     @type string $default_redirect_uri
     *     @type \Google\Protobuf\Duration $password_check_lifetime
     *     @type \Google\Protobuf\Duration $external_login_check_lifetime
     *     @type \Google\Protobuf\Duration $mfa_init_skip_lifetime
     *     @type \Google\Protobuf\Duration $second_factor_check_lifetime
     *     @type \Google\Protobuf\Duration $multi_factor_check_lifetime
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $second_factors
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $multi_factors
     *     @type array<\Zitadel\Management\V1\AddCustomLoginPolicyRequest\IDP>|\Google\Protobuf\Internal\RepeatedField $idps
     *     @type bool $allow_domain_discovery
     *           If set to true, the suffix (\@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success.
     *     @type bool $disable_login_with_email
     *     @type bool $disable_login_with_phone
     *     @type bool $force_mfa_local_only
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool allow_username_password = 1 [json_name = "allowUsernamePassword"];</code>
     * @return bool
     */
    public function getAllowUsernamePassword()
    {
        return $this->allow_username_password;
    }

    /**
     * Generated from protobuf field <code>bool allow_username_password = 1 [json_name = "allowUsernamePassword"];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowUsernamePassword($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_username_password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool allow_register = 2 [json_name = "allowRegister"];</code>
     * @return bool
     */
    public function getAllowRegister()
    {
        return $this->allow_register;
    }

    /**
     * Generated from protobuf field <code>bool allow_register = 2 [json_name = "allowRegister"];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowRegister($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_register = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool allow_external_idp = 3 [json_name = "allowExternalIdp"];</code>
     * @return bool
     */
    public function getAllowExternalIdp()
    {
        return $this->allow_external_idp;
    }

    /**
     * Generated from protobuf field <code>bool allow_external_idp = 3 [json_name = "allowExternalIdp"];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowExternalIdp($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_external_idp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool force_mfa = 4 [json_name = "forceMfa"];</code>
     * @return bool
     */
    public function getForceMfa()
    {
        return $this->force_mfa;
    }

    /**
     * Generated from protobuf field <code>bool force_mfa = 4 [json_name = "forceMfa"];</code>
     * @param bool $var
     * @return $this
     */
    public function setForceMfa($var)
    {
        GPBUtil::checkBool($var);
        $this->force_mfa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.PasswordlessType passwordless_type = 5 [json_name = "passwordlessType", (.validate.rules) = {</code>
     * @return int
     */
    public function getPasswordlessType()
    {
        return $this->passwordless_type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.PasswordlessType passwordless_type = 5 [json_name = "passwordlessType", (.validate.rules) = {</code>
     * @param int $var
     * @return $this
     */
    public function setPasswordlessType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Policy\V1\PasswordlessType::class);
        $this->passwordless_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hide_password_reset = 6 [json_name = "hidePasswordReset"];</code>
     * @return bool
     */
    public function getHidePasswordReset()
    {
        return $this->hide_password_reset;
    }

    /**
     * Generated from protobuf field <code>bool hide_password_reset = 6 [json_name = "hidePasswordReset"];</code>
     * @param bool $var
     * @return $this
     */
    public function setHidePasswordReset($var)
    {
        GPBUtil::checkBool($var);
        $this->hide_password_reset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ignore_unknown_usernames = 7 [json_name = "ignoreUnknownUsernames", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getIgnoreUnknownUsernames()
    {
        return $this->ignore_unknown_usernames;
    }

    /**
     * Generated from protobuf field <code>bool ignore_unknown_usernames = 7 [json_name = "ignoreUnknownUsernames", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreUnknownUsernames($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_unknown_usernames = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string default_redirect_uri = 8 [json_name = "defaultRedirectUri", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getDefaultRedirectUri()
    {
        return $this->default_redirect_uri;
    }

    /**
     * Generated from protobuf field <code>string default_redirect_uri = 8 [json_name = "defaultRedirectUri", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_redirect_uri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration password_check_lifetime = 9 [json_name = "passwordCheckLifetime"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPasswordCheckLifetime()
    {
        return $this->password_check_lifetime;
    }

    public function hasPasswordCheckLifetime()
    {
        return isset($this->password_check_lifetime);
    }

    public function clearPasswordCheckLifetime()
    {
        unset($this->password_check_lifetime);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration password_check_lifetime = 9 [json_name = "passwordCheckLifetime"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPasswordCheckLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->password_check_lifetime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration external_login_check_lifetime = 10 [json_name = "externalLoginCheckLifetime"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getExternalLoginCheckLifetime()
    {
        return $this->external_login_check_lifetime;
    }

    public function hasExternalLoginCheckLifetime()
    {
        return isset($this->external_login_check_lifetime);
    }

    public function clearExternalLoginCheckLifetime()
    {
        unset($this->external_login_check_lifetime);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration external_login_check_lifetime = 10 [json_name = "externalLoginCheckLifetime"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setExternalLoginCheckLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->external_login_check_lifetime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration mfa_init_skip_lifetime = 11 [json_name = "mfaInitSkipLifetime"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMfaInitSkipLifetime()
    {
        return $this->mfa_init_skip_lifetime;
    }

    public function hasMfaInitSkipLifetime()
    {
        return isset($this->mfa_init_skip_lifetime);
    }

    public function clearMfaInitSkipLifetime()
    {
        unset($this->mfa_init_skip_lifetime);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration mfa_init_skip_lifetime = 11 [json_name = "mfaInitSkipLifetime"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMfaInitSkipLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->mfa_init_skip_lifetime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration second_factor_check_lifetime = 12 [json_name = "secondFactorCheckLifetime"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSecondFactorCheckLifetime()
    {
        return $this->second_factor_check_lifetime;
    }

    public function hasSecondFactorCheckLifetime()
    {
        return isset($this->second_factor_check_lifetime);
    }

    public function clearSecondFactorCheckLifetime()
    {
        unset($this->second_factor_check_lifetime);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration second_factor_check_lifetime = 12 [json_name = "secondFactorCheckLifetime"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSecondFactorCheckLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->second_factor_check_lifetime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration multi_factor_check_lifetime = 13 [json_name = "multiFactorCheckLifetime"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMultiFactorCheckLifetime()
    {
        return $this->multi_factor_check_lifetime;
    }

    public function hasMultiFactorCheckLifetime()
    {
        return isset($this->multi_factor_check_lifetime);
    }

    public function clearMultiFactorCheckLifetime()
    {
        unset($this->multi_factor_check_lifetime);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration multi_factor_check_lifetime = 13 [json_name = "multiFactorCheckLifetime"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMultiFactorCheckLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->multi_factor_check_lifetime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.policy.v1.SecondFactorType second_factors = 14 [json_name = "secondFactors"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondFactors()
    {
        return $this->second_factors;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.policy.v1.SecondFactorType second_factors = 14 [json_name = "secondFactors"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondFactors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Zitadel\Policy\V1\SecondFactorType::class);
        $this->second_factors = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.policy.v1.MultiFactorType multi_factors = 15 [json_name = "multiFactors"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMultiFactors()
    {
        return $this->multi_factors;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.policy.v1.MultiFactorType multi_factors = 15 [json_name = "multiFactors"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMultiFactors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Zitadel\Policy\V1\MultiFactorType::class);
        $this->multi_factors = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.management.v1.AddCustomLoginPolicyRequest.IDP idps = 16 [json_name = "idps"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdps()
    {
        return $this->idps;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.management.v1.AddCustomLoginPolicyRequest.IDP idps = 16 [json_name = "idps"];</code>
     * @param array<\Zitadel\Management\V1\AddCustomLoginPolicyRequest\IDP>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Management\V1\AddCustomLoginPolicyRequest\IDP::class);
        $this->idps = $arr;

        return $this;
    }

    /**
     * If set to true, the suffix (\@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success.
     *
     * Generated from protobuf field <code>bool allow_domain_discovery = 17 [json_name = "allowDomainDiscovery", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getAllowDomainDiscovery()
    {
        return $this->allow_domain_discovery;
    }

    /**
     * If set to true, the suffix (\@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success.
     *
     * Generated from protobuf field <code>bool allow_domain_discovery = 17 [json_name = "allowDomainDiscovery", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowDomainDiscovery($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_domain_discovery = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool disable_login_with_email = 18 [json_name = "disableLoginWithEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getDisableLoginWithEmail()
    {
        return $this->disable_login_with_email;
    }

    /**
     * Generated from protobuf field <code>bool disable_login_with_email = 18 [json_name = "disableLoginWithEmail", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableLoginWithEmail($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_login_with_email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool disable_login_with_phone = 19 [json_name = "disableLoginWithPhone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getDisableLoginWithPhone()
    {
        return $this->disable_login_with_phone;
    }

    /**
     * Generated from protobuf field <code>bool disable_login_with_phone = 19 [json_name = "disableLoginWithPhone", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableLoginWithPhone($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_login_with_phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool force_mfa_local_only = 20 [json_name = "forceMfaLocalOnly", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getForceMfaLocalOnly()
    {
        return $this->force_mfa_local_only;
    }

    /**
     * Generated from protobuf field <code>bool force_mfa_local_only = 20 [json_name = "forceMfaLocalOnly", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setForceMfaLocalOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->force_mfa_local_only = $var;

        return $this;
    }

}

