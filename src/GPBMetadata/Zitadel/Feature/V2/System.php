<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2/system.proto

namespace GPBMetadata\Zitadel\Feature\V2;

class System
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\Zitadel\Object\V2\Object::initOnce();
        \GPBMetadata\Zitadel\Feature\V2\Feature::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x889\x0A\x1Fzitadel/feature/v2/system.proto\x12\x12zitadel.feature.v2\x1A\x17validate/validate.proto\x1A\x1Ezitadel/object/v2/object.proto\x1A zitadel/feature/v2/feature.proto\"\xBF\x1A\x0A\x18SetSystemFeaturesRequest\x12\xAF\x01\x0A\x11login_default_org\x18\x01 \x01(\x08B~\x92A{2sThe login UI will use the settings of the default org (and not from the instance) if no organization context is setJ\x04trueH\x00R\x0FloginDefaultOrg\x88\x01\x01\x12\xB7\x03\x0A&oidc_trigger_introspection_projections\x18\x02 \x01(\x08B\xDC\x02\x92A\xD8\x022\xCF\x02Enable projection triggers during an introspection request. This can act as workaround if there are noticeable consistency issues in the introspection response but can have an impact on performance. We are planning to remove triggers for introspection requests in the future. Please raise an issue if you needed to enable this feature.J\x04trueH\x01R#oidcTriggerIntrospectionProjections\x88\x01\x01\x12\xB6\x02\x0A\x19oidc_legacy_introspection\x18\x03 \x01(\x08B\xF4\x01\x92A\xF0\x012\xE7\x01We have recently refactored the introspection endpoint for performance reasons. This feature can be used to rollback to the legacy implementation if unexpected bugs arise. Please raise an issue if you needed to enable this feature.J\x04trueH\x02R\x17oidcLegacyIntrospection\x88\x01\x01\x12\xDB\x01\x0A\x0Buser_schema\x18\x04 \x01(\x08B\xB4\x01\x92A\xB0\x012\xA7\x01User Schemas allow to manage data schemas of user. If the flag is enabled, you'll be able to use the new API and its features. Note that it is still in an early stage.J\x04trueH\x03R\x0AuserSchema\x88\x01\x01\x12\xD0\x02\x0A\x13oidc_token_exchange\x18\x05 \x01(\x08B\x9A\x02\x92A\x96\x022\x8D\x02Enable the experimental `urn:ietf:params:oauth:grant-type:token-exchange` grant type for the OIDC token endpoint. Token exchange can be used to request tokens with a lesser scope or impersonate other users. See the security policy to allow impersonation on an instance.J\x04trueH\x04R\x11oidcTokenExchange\x88\x01\x01\x12\xD6\x01\x0A\x07actions\x18\x06 \x01(\x08B\xB6\x01\x92A\xB2\x012\xA9\x01Actions allow to manage data executions and targets. If the flag is enabled, you'll be able to use the new API and its features. Note that it is still in an early stage.J\x04trueH\x05R\x07actions\x88\x01\x01\x12\xA9\x01\x0A\x14improved_performance\x18\x07 \x03(\x0E2'.zitadel.feature.v2.ImprovedPerformanceBM\x92A922Improves performance of specified execution paths.J\x03[1]\xFAB\x0E\x92\x01\x0B\x18\x01\"\x07\x82\x01\x04\x10\x01 \x00R\x13improvedPerformance\x12\xCE\x03\x0A\"oidc_single_v1_session_termination\x18\x08 \x01(\x08B\xFC\x02\x92A\xF8\x022\xEF\x02If the flag is enabled, you'll be able to terminate a single session from the login UI by providing an id_token with a `sid` claim as id_token_hint on the end_session endpoint. Note that currently all sessions from the same user agent (browser) are terminated in the login UI. Sessions managed through the Session API already allow the termination of single sessions.J\x04trueH\x06R\x1EoidcSingleV1SessionTermination\x88\x01\x01\x12\xC7\x01\x0A\x18disable_user_token_event\x18\x09 \x01(\x08B\x88\x01\x92A\x84\x012|Do not push user token meta-event user.token.v2.added to improve performance on many concurrent single (machine-)user loginsJ\x04trueH\x07R\x15disableUserTokenEvent\x88\x01\x01\x12\xDD\x01\x0A\x1Aenable_back_channel_logout\x18\x0A \x01(\x08B\x9A\x01\x92A\x96\x012\x8D\x01If the flag is enabled, you'll be able to use the OIDC Back-Channel Logout to be notified in your application about terminated user sessions.J\x04trueH\x08R\x17enableBackChannelLogout\x88\x01\x01\x12\x95\x01\x0A\x08login_v2\x18\x0B \x01(\x0B2\x1B.zitadel.feature.v2.LoginV2BX\x92AU2SSpecify the login UI for all users and applications regardless of their preference.H\x09R\x07loginV2\x88\x01\x01\x12\x99\x01\x0A\x13permission_check_v2\x18\x0C \x01(\x08Bd\x92Aa2YEnable a newer, more performant, permission check used for v2 and v3 resource based APIs.J\x04trueH\x0AR\x11permissionCheckV2\x88\x01\x01B\x14\x0A\x12_login_default_orgB)\x0A'_oidc_trigger_introspection_projectionsB\x1C\x0A\x1A_oidc_legacy_introspectionB\x0E\x0A\x0C_user_schemaB\x16\x0A\x14_oidc_token_exchangeB\x0A\x0A\x08_actionsB%\x0A#_oidc_single_v1_session_terminationB\x1B\x0A\x19_disable_user_token_eventB\x1D\x0A\x1B_enable_back_channel_logoutB\x0B\x0A\x09_login_v2B\x16\x0A\x14_permission_check_v2\"Q\x0A\x19SetSystemFeaturesResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\"\x1C\x0A\x1AResetSystemFeaturesRequest\"S\x0A\x1BResetSystemFeaturesResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\"\x1A\x0A\x18GetSystemFeaturesRequest\"\x8F\x1B\x0A\x19GetSystemFeaturesResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\x12\xCB\x01\x0A\x11login_default_org\x18\x02 \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB~\x92A{2sThe login UI will use the settings of the default org (and not from the instance) if no organization context is setJ\x04trueR\x0FloginDefaultOrg\x12\xD3\x03\x0A&oidc_trigger_introspection_projections\x18\x03 \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\xDC\x02\x92A\xD8\x022\xCF\x02Enable projection triggers during an introspection request. This can act as workaround if there are noticeable consistency issues in the introspection response but can have an impact on performance. We are planning to remove triggers for introspection requests in the future. Please raise an issue if you needed to enable this feature.J\x04trueR#oidcTriggerIntrospectionProjections\x12\xD2\x02\x0A\x19oidc_legacy_introspection\x18\x04 \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\xF4\x01\x92A\xF0\x012\xE7\x01We have recently refactored the introspection endpoint for performance reasons. This feature can be used to rollback to the legacy implementation if unexpected bugs arise. Please raise an issue if you needed to enable this feature.J\x04trueR\x17oidcLegacyIntrospection\x12\xF7\x01\x0A\x0Buser_schema\x18\x05 \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\xB4\x01\x92A\xB0\x012\xA7\x01User Schemas allow to manage data schemas of user. If the flag is enabled, you'll be able to use the new API and its features. Note that it is still in an early stage.J\x04trueR\x0AuserSchema\x12\xEC\x02\x0A\x13oidc_token_exchange\x18\x06 \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\x9A\x02\x92A\x96\x022\x8D\x02Enable the experimental `urn:ietf:params:oauth:grant-type:token-exchange` grant type for the OIDC token endpoint. Token exchange can be used to request tokens with a lesser scope or impersonate other users. See the security policy to allow impersonation on an instance.J\x04trueR\x11oidcTokenExchange\x12\xF5\x01\x0A\x07actions\x18\x07 \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\xB9\x01\x92A\xB5\x012\xAC\x01Actions v2 allow to manage data executions and targets. If the flag is enabled, you'll be able to use the new API and its features. Note that it is still in an early stage.J\x04trueR\x07actions\x12\xA3\x01\x0A\x14improved_performance\x18\x08 \x01(\x0B22.zitadel.feature.v2.ImprovedPerformanceFeatureFlagB<\x92A922Improves performance of specified execution paths.J\x03[1]R\x13improvedPerformance\x12\xEA\x03\x0A\"oidc_single_v1_session_termination\x18\x09 \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\xFC\x02\x92A\xF8\x022\xEF\x02If the flag is enabled, you'll be able to terminate a single session from the login UI by providing an id_token with a `sid` claim as id_token_hint on the end_session endpoint. Note that currently all sessions from the same user agent (browser) are terminated in the login UI. Sessions managed through the Session API already allow the termination of single sessions.J\x04trueR\x1EoidcSingleV1SessionTermination\x12\xE3\x01\x0A\x18disable_user_token_event\x18\x0A \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\x88\x01\x92A\x84\x012|Do not push user token meta-event user.token.v2.added to improve performance on many concurrent single (machine-)user loginsJ\x04trueR\x15disableUserTokenEvent\x12\xF9\x01\x0A\x1Aenable_back_channel_logout\x18\x0B \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB\x9A\x01\x92A\x96\x012\x8D\x01If the flag is enabled, you'll be able to use the OIDC Back-Channel Logout to be notified in your application about terminated user sessions.J\x04trueR\x17enableBackChannelLogout\x12\xBA\x01\x0A\x08login_v2\x18\x0C \x01(\x0B2&.zitadel.feature.v2.LoginV2FeatureFlagBw\x92At2lIf the flag is set, all users will be redirected to the login V2 regardless of the application's preference.J\x04trueR\x07loginV2\x12\xAF\x01\x0A\x13permission_check_v2\x18\x0D \x01(\x0B2\x1F.zitadel.feature.v2.FeatureFlagB^\x92A[2YEnable a newer, more performant, permission check used for v2 and v3 resource based APIs.R\x11permissionCheckV2B8Z6github.com/zitadel/zitadel/pkg/grpc/feature/v2;featureb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

