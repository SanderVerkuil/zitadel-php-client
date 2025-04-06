<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2/instance.proto

namespace Zitadel\Feature\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.feature.v2.GetInstanceFeaturesResponse</code>
 */
class GetInstanceFeaturesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag login_default_org = 2 [json_name = "loginDefaultOrg", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_default_org = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_trigger_introspection_projections = 3 [json_name = "oidcTriggerIntrospectionProjections", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_trigger_introspection_projections = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_legacy_introspection = 4 [json_name = "oidcLegacyIntrospection", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_legacy_introspection = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag user_schema = 5 [json_name = "userSchema", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_schema = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_token_exchange = 6 [json_name = "oidcTokenExchange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_token_exchange = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag actions = 7 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $actions = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.ImprovedPerformanceFeatureFlag improved_performance = 8 [json_name = "improvedPerformance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $improved_performance = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag web_key = 9 [json_name = "webKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $web_key = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag debug_oidc_parent_error = 10 [json_name = "debugOidcParentError", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $debug_oidc_parent_error = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_single_v1_session_termination = 11 [json_name = "oidcSingleV1SessionTermination", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $oidc_single_v1_session_termination = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag disable_user_token_event = 12 [json_name = "disableUserTokenEvent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $disable_user_token_event = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag enable_back_channel_logout = 13 [json_name = "enableBackChannelLogout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $enable_back_channel_logout = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.LoginV2FeatureFlag login_v2 = 14 [json_name = "loginV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $login_v2 = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag permission_check_v2 = 15 [json_name = "permissionCheckV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $permission_check_v2 = null;
    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag console_use_v2_user_api = 16 [json_name = "consoleUseV2UserApi", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $console_use_v2_user_api = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2\Details $details
     *     @type \Zitadel\Feature\V2\FeatureFlag $login_default_org
     *     @type \Zitadel\Feature\V2\FeatureFlag $oidc_trigger_introspection_projections
     *     @type \Zitadel\Feature\V2\FeatureFlag $oidc_legacy_introspection
     *     @type \Zitadel\Feature\V2\FeatureFlag $user_schema
     *     @type \Zitadel\Feature\V2\FeatureFlag $oidc_token_exchange
     *     @type \Zitadel\Feature\V2\FeatureFlag $actions
     *     @type \Zitadel\Feature\V2\ImprovedPerformanceFeatureFlag $improved_performance
     *     @type \Zitadel\Feature\V2\FeatureFlag $web_key
     *     @type \Zitadel\Feature\V2\FeatureFlag $debug_oidc_parent_error
     *     @type \Zitadel\Feature\V2\FeatureFlag $oidc_single_v1_session_termination
     *     @type \Zitadel\Feature\V2\FeatureFlag $disable_user_token_event
     *     @type \Zitadel\Feature\V2\FeatureFlag $enable_back_channel_logout
     *     @type \Zitadel\Feature\V2\LoginV2FeatureFlag $login_v2
     *     @type \Zitadel\Feature\V2\FeatureFlag $permission_check_v2
     *     @type \Zitadel\Feature\V2\FeatureFlag $console_use_v2_user_api
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Feature\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2\Details|null
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
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag login_default_org = 2 [json_name = "loginDefaultOrg", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getLoginDefaultOrg()
    {
        return $this->login_default_org;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag login_default_org = 2 [json_name = "loginDefaultOrg", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setLoginDefaultOrg($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->login_default_org = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_trigger_introspection_projections = 3 [json_name = "oidcTriggerIntrospectionProjections", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getOidcTriggerIntrospectionProjections()
    {
        return $this->oidc_trigger_introspection_projections;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_trigger_introspection_projections = 3 [json_name = "oidcTriggerIntrospectionProjections", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setOidcTriggerIntrospectionProjections($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->oidc_trigger_introspection_projections = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_legacy_introspection = 4 [json_name = "oidcLegacyIntrospection", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getOidcLegacyIntrospection()
    {
        return $this->oidc_legacy_introspection;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_legacy_introspection = 4 [json_name = "oidcLegacyIntrospection", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setOidcLegacyIntrospection($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->oidc_legacy_introspection = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag user_schema = 5 [json_name = "userSchema", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getUserSchema()
    {
        return $this->user_schema;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag user_schema = 5 [json_name = "userSchema", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setUserSchema($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->user_schema = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_token_exchange = 6 [json_name = "oidcTokenExchange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getOidcTokenExchange()
    {
        return $this->oidc_token_exchange;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_token_exchange = 6 [json_name = "oidcTokenExchange", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setOidcTokenExchange($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->oidc_token_exchange = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag actions = 7 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getActions()
    {
        return $this->actions;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag actions = 7 [json_name = "actions", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setActions($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->actions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.ImprovedPerformanceFeatureFlag improved_performance = 8 [json_name = "improvedPerformance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\ImprovedPerformanceFeatureFlag|null
     */
    public function getImprovedPerformance()
    {
        return $this->improved_performance;
    }

    public function hasImprovedPerformance()
    {
        return isset($this->improved_performance);
    }

    public function clearImprovedPerformance()
    {
        unset($this->improved_performance);
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.ImprovedPerformanceFeatureFlag improved_performance = 8 [json_name = "improvedPerformance", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\ImprovedPerformanceFeatureFlag $var
     * @return $this
     */
    public function setImprovedPerformance($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\ImprovedPerformanceFeatureFlag::class);
        $this->improved_performance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag web_key = 9 [json_name = "webKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getWebKey()
    {
        return $this->web_key;
    }

    public function hasWebKey()
    {
        return isset($this->web_key);
    }

    public function clearWebKey()
    {
        unset($this->web_key);
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag web_key = 9 [json_name = "webKey", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setWebKey($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->web_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag debug_oidc_parent_error = 10 [json_name = "debugOidcParentError", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getDebugOidcParentError()
    {
        return $this->debug_oidc_parent_error;
    }

    public function hasDebugOidcParentError()
    {
        return isset($this->debug_oidc_parent_error);
    }

    public function clearDebugOidcParentError()
    {
        unset($this->debug_oidc_parent_error);
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag debug_oidc_parent_error = 10 [json_name = "debugOidcParentError", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setDebugOidcParentError($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->debug_oidc_parent_error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_single_v1_session_termination = 11 [json_name = "oidcSingleV1SessionTermination", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getOidcSingleV1SessionTermination()
    {
        return $this->oidc_single_v1_session_termination;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag oidc_single_v1_session_termination = 11 [json_name = "oidcSingleV1SessionTermination", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setOidcSingleV1SessionTermination($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->oidc_single_v1_session_termination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag disable_user_token_event = 12 [json_name = "disableUserTokenEvent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getDisableUserTokenEvent()
    {
        return $this->disable_user_token_event;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag disable_user_token_event = 12 [json_name = "disableUserTokenEvent", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setDisableUserTokenEvent($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->disable_user_token_event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag enable_back_channel_logout = 13 [json_name = "enableBackChannelLogout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getEnableBackChannelLogout()
    {
        return $this->enable_back_channel_logout;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag enable_back_channel_logout = 13 [json_name = "enableBackChannelLogout", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setEnableBackChannelLogout($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->enable_back_channel_logout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.LoginV2FeatureFlag login_v2 = 14 [json_name = "loginV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\LoginV2FeatureFlag|null
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
     * Generated from protobuf field <code>.zitadel.feature.v2.LoginV2FeatureFlag login_v2 = 14 [json_name = "loginV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\LoginV2FeatureFlag $var
     * @return $this
     */
    public function setLoginV2($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\LoginV2FeatureFlag::class);
        $this->login_v2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag permission_check_v2 = 15 [json_name = "permissionCheckV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getPermissionCheckV2()
    {
        return $this->permission_check_v2;
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
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag permission_check_v2 = 15 [json_name = "permissionCheckV2", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setPermissionCheckV2($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->permission_check_v2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag console_use_v2_user_api = 16 [json_name = "consoleUseV2UserApi", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Zitadel\Feature\V2\FeatureFlag|null
     */
    public function getConsoleUseV2UserApi()
    {
        return $this->console_use_v2_user_api;
    }

    public function hasConsoleUseV2UserApi()
    {
        return isset($this->console_use_v2_user_api);
    }

    public function clearConsoleUseV2UserApi()
    {
        unset($this->console_use_v2_user_api);
    }

    /**
     * Generated from protobuf field <code>.zitadel.feature.v2.FeatureFlag console_use_v2_user_api = 16 [json_name = "consoleUseV2UserApi", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Zitadel\Feature\V2\FeatureFlag $var
     * @return $this
     */
    public function setConsoleUseV2UserApi($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Feature\V2\FeatureFlag::class);
        $this->console_use_v2_user_api = $var;

        return $this;
    }

}

