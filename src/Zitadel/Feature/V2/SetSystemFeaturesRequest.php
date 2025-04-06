<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2/system.proto

namespace Zitadel\Feature\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.feature.v2.SetSystemFeaturesRequest</code>
 */
class SetSystemFeaturesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool login_default_org = 1 [json_name = "loginDefaultOrg", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_default_org = null;
    /**
     * Generated from protobuf field <code>optional bool oidc_trigger_introspection_projections = 2 [json_name = "oidcTriggerIntrospectionProjections", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_trigger_introspection_projections = null;
    /**
     * Generated from protobuf field <code>optional bool oidc_legacy_introspection = 3 [json_name = "oidcLegacyIntrospection", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_legacy_introspection = null;
    /**
     * Generated from protobuf field <code>optional bool user_schema = 4 [json_name = "userSchema", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_schema = null;
    /**
     * Generated from protobuf field <code>optional bool oidc_token_exchange = 5 [json_name = "oidcTokenExchange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_token_exchange = null;
    /**
     * Generated from protobuf field <code>optional bool actions = 6 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $actions = null;
    /**
     * Generated from protobuf field <code>repeated .zitadel.feature.v2.ImprovedPerformance improved_performance = 7 [json_name = "improvedPerformance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $improved_performance;
    /**
     * Generated from protobuf field <code>optional bool oidc_single_v1_session_termination = 8 [json_name = "oidcSingleV1SessionTermination", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_single_v1_session_termination = null;
    /**
     * Generated from protobuf field <code>optional bool disable_user_token_event = 9 [json_name = "disableUserTokenEvent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $disable_user_token_event = null;
    /**
     * Generated from protobuf field <code>optional bool enable_back_channel_logout = 10 [json_name = "enableBackChannelLogout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $enable_back_channel_logout = null;
    /**
     * Generated from protobuf field <code>optional .zitadel.feature.v2.LoginV2 login_v2 = 11 [json_name = "loginV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_v2 = null;
    /**
     * Generated from protobuf field <code>optional bool permission_check_v2 = 12 [json_name = "permissionCheckV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $permission_check_v2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $login_default_org
     *     @type bool $oidc_trigger_introspection_projections
     *     @type bool $oidc_legacy_introspection
     *     @type bool $user_schema
     *     @type bool $oidc_token_exchange
     *     @type bool $actions
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $improved_performance
     *     @type bool $oidc_single_v1_session_termination
     *     @type bool $disable_user_token_event
     *     @type bool $enable_back_channel_logout
     *     @type \Zitadel\Feature\V2\LoginV2 $login_v2
     *     @type bool $permission_check_v2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Feature\V2\System::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool login_default_org = 1 [json_name = "loginDefaultOrg", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getLoginDefaultOrg()
    {
        return isset($this->login_default_org) ? $this->login_default_org : false;
    }

    public function hasLoginDefaultOrg()
    {
        return isset($this->login_default_org);
    }

    public function clearLoginDefaultOrg()
    {
        unset($this->login_default_org);
    }

    /**
     * Generated from protobuf field <code>optional bool login_default_org = 1 [json_name = "loginDefaultOrg", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setLoginDefaultOrg($var)
    {
        GPBUtil::checkBool($var);
        $this->login_default_org = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_trigger_introspection_projections = 2 [json_name = "oidcTriggerIntrospectionProjections", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getOidcTriggerIntrospectionProjections()
    {
        return isset($this->oidc_trigger_introspection_projections) ? $this->oidc_trigger_introspection_projections : false;
    }

    public function hasOidcTriggerIntrospectionProjections()
    {
        return isset($this->oidc_trigger_introspection_projections);
    }

    public function clearOidcTriggerIntrospectionProjections()
    {
        unset($this->oidc_trigger_introspection_projections);
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_trigger_introspection_projections = 2 [json_name = "oidcTriggerIntrospectionProjections", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setOidcTriggerIntrospectionProjections($var)
    {
        GPBUtil::checkBool($var);
        $this->oidc_trigger_introspection_projections = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_legacy_introspection = 3 [json_name = "oidcLegacyIntrospection", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getOidcLegacyIntrospection()
    {
        return isset($this->oidc_legacy_introspection) ? $this->oidc_legacy_introspection : false;
    }

    public function hasOidcLegacyIntrospection()
    {
        return isset($this->oidc_legacy_introspection);
    }

    public function clearOidcLegacyIntrospection()
    {
        unset($this->oidc_legacy_introspection);
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_legacy_introspection = 3 [json_name = "oidcLegacyIntrospection", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setOidcLegacyIntrospection($var)
    {
        GPBUtil::checkBool($var);
        $this->oidc_legacy_introspection = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool user_schema = 4 [json_name = "userSchema", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getUserSchema()
    {
        return isset($this->user_schema) ? $this->user_schema : false;
    }

    public function hasUserSchema()
    {
        return isset($this->user_schema);
    }

    public function clearUserSchema()
    {
        unset($this->user_schema);
    }

    /**
     * Generated from protobuf field <code>optional bool user_schema = 4 [json_name = "userSchema", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setUserSchema($var)
    {
        GPBUtil::checkBool($var);
        $this->user_schema = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_token_exchange = 5 [json_name = "oidcTokenExchange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getOidcTokenExchange()
    {
        return isset($this->oidc_token_exchange) ? $this->oidc_token_exchange : false;
    }

    public function hasOidcTokenExchange()
    {
        return isset($this->oidc_token_exchange);
    }

    public function clearOidcTokenExchange()
    {
        unset($this->oidc_token_exchange);
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_token_exchange = 5 [json_name = "oidcTokenExchange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setOidcTokenExchange($var)
    {
        GPBUtil::checkBool($var);
        $this->oidc_token_exchange = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool actions = 6 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getActions()
    {
        return isset($this->actions) ? $this->actions : false;
    }

    public function hasActions()
    {
        return isset($this->actions);
    }

    public function clearActions()
    {
        unset($this->actions);
    }

    /**
     * Generated from protobuf field <code>optional bool actions = 6 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setActions($var)
    {
        GPBUtil::checkBool($var);
        $this->actions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.feature.v2.ImprovedPerformance improved_performance = 7 [json_name = "improvedPerformance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImprovedPerformance()
    {
        return $this->improved_performance;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.feature.v2.ImprovedPerformance improved_performance = 7 [json_name = "improvedPerformance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImprovedPerformance($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Zitadel\Feature\V2\ImprovedPerformance::class);
        $this->improved_performance = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_single_v1_session_termination = 8 [json_name = "oidcSingleV1SessionTermination", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getOidcSingleV1SessionTermination()
    {
        return isset($this->oidc_single_v1_session_termination) ? $this->oidc_single_v1_session_termination : false;
    }

    public function hasOidcSingleV1SessionTermination()
    {
        return isset($this->oidc_single_v1_session_termination);
    }

    public function clearOidcSingleV1SessionTermination()
    {
        unset($this->oidc_single_v1_session_termination);
    }

    /**
     * Generated from protobuf field <code>optional bool oidc_single_v1_session_termination = 8 [json_name = "oidcSingleV1SessionTermination", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setOidcSingleV1SessionTermination($var)
    {
        GPBUtil::checkBool($var);
        $this->oidc_single_v1_session_termination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool disable_user_token_event = 9 [json_name = "disableUserTokenEvent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getDisableUserTokenEvent()
    {
        return isset($this->disable_user_token_event) ? $this->disable_user_token_event : false;
    }

    public function hasDisableUserTokenEvent()
    {
        return isset($this->disable_user_token_event);
    }

    public function clearDisableUserTokenEvent()
    {
        unset($this->disable_user_token_event);
    }

    /**
     * Generated from protobuf field <code>optional bool disable_user_token_event = 9 [json_name = "disableUserTokenEvent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableUserTokenEvent($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_user_token_event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool enable_back_channel_logout = 10 [json_name = "enableBackChannelLogout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getEnableBackChannelLogout()
    {
        return isset($this->enable_back_channel_logout) ? $this->enable_back_channel_logout : false;
    }

    public function hasEnableBackChannelLogout()
    {
        return isset($this->enable_back_channel_logout);
    }

    public function clearEnableBackChannelLogout()
    {
        unset($this->enable_back_channel_logout);
    }

    /**
     * Generated from protobuf field <code>optional bool enable_back_channel_logout = 10 [json_name = "enableBackChannelLogout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableBackChannelLogout($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_back_channel_logout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.feature.v2.LoginV2 login_v2 = 11 [json_name = "loginV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\LoginV2|null
     */
    public function getLoginV2()
    {
        return $this->login_v2;
    }

    public function hasLoginV2()
    {
        return isset($this->login_v2);
    }

    public function clearLoginV2()
    {
        unset($this->login_v2);
    }

    /**
     * Generated from protobuf field <code>optional .zitadel.feature.v2.LoginV2 login_v2 = 11 [json_name = "loginV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\LoginV2 $var
     * @return $this
     */
    public function setLoginV2($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\LoginV2::class);
        $this->login_v2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool permission_check_v2 = 12 [json_name = "permissionCheckV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return bool
     */
    public function getPermissionCheckV2()
    {
        return isset($this->permission_check_v2) ? $this->permission_check_v2 : false;
    }

    public function hasPermissionCheckV2()
    {
        return isset($this->permission_check_v2);
    }

    public function clearPermissionCheckV2()
    {
        unset($this->permission_check_v2);
    }

    /**
     * Generated from protobuf field <code>optional bool permission_check_v2 = 12 [json_name = "permissionCheckV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param bool $var
     * @return $this
     */
    public function setPermissionCheckV2($var)
    {
        GPBUtil::checkBool($var);
        $this->permission_check_v2 = $var;

        return $this;
    }

}

