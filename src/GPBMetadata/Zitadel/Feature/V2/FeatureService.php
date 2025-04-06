<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2/feature_service.proto

namespace GPBMetadata\Zitadel\Feature\V2;

class FeatureService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Zitadel\Feature\V2\System::initOnce();
        \GPBMetadata\Zitadel\Feature\V2\Instance::initOnce();
        \GPBMetadata\Zitadel\Feature\V2\Organization::initOnce();
        \GPBMetadata\Zitadel\Feature\V2\User::initOnce();
        \GPBMetadata\Zitadel\ProtocGenZitadel\V2\Options::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xAE/\x0A(zitadel/feature/v2/feature_service.proto\x12\x12zitadel.feature.v2\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x1Fzitadel/feature/v2/system.proto\x1A!zitadel/feature/v2/instance.proto\x1A%zitadel/feature/v2/organization.proto\x1A\x1Dzitadel/feature/v2/user.proto\x1A+zitadel/protoc_gen_zitadel/v2/options.proto2\x8C \x0A\x0EFeatureService\x12\xCD\x02\x0A\x11SetSystemFeatures\x12,.zitadel.feature.v2.SetSystemFeaturesRequest\x1A-.zitadel.feature.v2.SetSystemFeaturesResponse\"\xDA\x01\x92A\x9C\x01\x12\x19Set system level features\x1ArConfigure and set features that apply to the complete system. Only fields present in the request are set or unset.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x18\x0A\x16\x0A\x14system.feature.write\x82\xD3\xE4\x93\x02\x18\x1A\x13/v2/features/system:\x01*\x12\xBC\x02\x0A\x13ResetSystemFeatures\x12..zitadel.feature.v2.ResetSystemFeaturesRequest\x1A/.zitadel.feature.v2.ResetSystemFeaturesResponse\"\xC3\x01\x92A\x87\x01\x12\x1BReset system level features\x1A[Deletes ALL configured features for the system, reverting the behaviors to system defaults.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x19\x0A\x17\x0A\x15system.feature.delete\x82\xD3\xE4\x93\x02\x15*\x13/v2/features/system\x12\xC3\x02\x0A\x11GetSystemFeatures\x12,.zitadel.feature.v2.GetSystemFeaturesRequest\x1A-.zitadel.feature.v2.GetSystemFeaturesResponse\"\xD0\x01\x92A\x96\x01\x12\x19Get system level features\x1AlReturns all configured features for the system. Unset fields mean the feature is the current system default.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x17\x0A\x15\x0A\x13system.feature.read\x82\xD3\xE4\x93\x02\x15\x12\x13/v2/features/system\x12\xD4\x02\x0A\x13SetInstanceFeatures\x12..zitadel.feature.v2.SetInstanceFeaturesRequest\x1A/.zitadel.feature.v2.SetInstanceFeaturesResponse\"\xDB\x01\x92A\x9E\x01\x12\x1BSet instance level features\x1ArConfigure and set features that apply to a complete instance. Only fields present in the request are set or unset.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x15\x0A\x13\x0A\x11iam.feature.write\x82\xD3\xE4\x93\x02\x1A\x1A\x15/v2/features/instance:\x01*\x12\xC4\x02\x0A\x15ResetInstanceFeatures\x120.zitadel.feature.v2.ResetInstanceFeaturesRequest\x1A1.zitadel.feature.v2.ResetInstanceFeaturesResponse\"\xC5\x01\x92A\x8A\x01\x12\x1DReset instance level features\x1A\\Deletes ALL configured features for an instance, reverting the behaviors to system defaults.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x16\x0A\x14\x0A\x12iam.feature.delete\x82\xD3\xE4\x93\x02\x17*\x15/v2/features/instance\x12\xCB\x02\x0A\x13GetInstanceFeatures\x12..zitadel.feature.v2.GetInstanceFeaturesRequest\x1A/.zitadel.feature.v2.GetInstanceFeaturesResponse\"\xD2\x01\x92A\x99\x01\x12\x1BGet instance level features\x1AmReturns all configured features for an instance. Unset fields mean the feature is the current system default.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x14\x0A\x12\x0A\x10iam.feature.read\x82\xD3\xE4\x93\x02\x17\x12\x15/v2/features/instance\x12\xFA\x02\x0A\x17SetOrganizationFeatures\x122.zitadel.feature.v2.SetOrganizationFeaturesRequest\x1A3.zitadel.feature.v2.SetOrganizationFeaturesResponse\"\xF5\x01\x92A\xA2\x01\x12\x1FSet organization level features\x1ArConfigure and set features that apply to a complete instance. Only fields present in the request are set or unset.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x15\x0A\x13\x0A\x11org.feature.write\x82\xD3\xE4\x93\x020\x1A+/v2/features/organization/{organization_id}:\x01*\x12\xEF\x02\x0A\x19ResetOrganizationFeatures\x124.zitadel.feature.v2.ResetOrganizationFeaturesRequest\x1A5.zitadel.feature.v2.ResetOrganizationFeaturesResponse\"\xE4\x01\x92A\x94\x01\x12!Reset organization level features\x1AbDeletes ALL configured features for an organization, reverting the behaviors to instance defaults.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x15\x0A\x13\x0A\x11org.feature.write\x82\xD3\xE4\x93\x02-*+/v2/features/organization/{organization_id}\x12\xF7\x02\x0A\x17GetOrganizationFeatures\x122.zitadel.feature.v2.GetOrganizationFeaturesRequest\x1A3.zitadel.feature.v2.GetOrganizationFeaturesResponse\"\xF2\x01\x92A\xA3\x01\x12\x1FGet organization level features\x1AsReturns all configured features for an organization. Unset fields mean the feature is the current instance default.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x14\x0A\x12\x0A\x10org.feature.read\x82\xD3\xE4\x93\x02-\x12+/v2/features/organization/{organization_id}\x12\xBE\x02\x0A\x0FSetUserFeatures\x12).zitadel.feature.v2.SetUserFeatureRequest\x1A+.zitadel.feature.v2.SetUserFeaturesResponse\"\xD2\x01\x92A\x8E\x01\x12\x17Set user level features\x1AfConfigure and set features that apply to an user. Only fields present in the request are set or unset.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x16\x0A\x14\x0A\x12user.feature.write\x82\xD3\xE4\x93\x02 \x1A\x1B/v2/features/user/{user_id}:\x01*\x12\xBB\x02\x0A\x11ResetUserFeatures\x12,.zitadel.feature.v2.ResetUserFeaturesRequest\x1A-.zitadel.feature.v2.ResetUserFeaturesResponse\"\xC8\x01\x92A\x87\x01\x12\x19Reset user level features\x1A]Deletes ALL configured features for a user, reverting the behaviors to organization defaults.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x16\x0A\x14\x0A\x12user.feature.write\x82\xD3\xE4\x93\x02\x1D*\x1B/v2/features/user/{user_id}\x12\xD0\x02\x0A\x0FGetUserFeatures\x12*.zitadel.feature.v2.GetUserFeaturesRequest\x1A+.zitadel.feature.v2.GetUserFeaturesResponse\"\xE3\x01\x92A\xA3\x01\x12\x1FGet organization level features\x1AsReturns all configured features for an organization. Unset fields mean the feature is the current instance default.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x15\x0A\x13\x0A\x11user.feature.read\x82\xD3\xE4\x93\x02\x1D\x12\x1B/v2/features/user/{user_id}B\xEF\x0CZ6github.com/zitadel/zitadel/pkg/grpc/feature/v2;feature\x92A\xB3\x0C\x12\xD5\x06\x0A\x0FFeature Service\x12\xC8\x05This API is intended to manage features for ZITADEL. Feature settings that are available on multiple \"levels\", such as instance and organization. The higher level instance acts as a default for the lower level. When a feature is set on multiple levels, the lower level takes precedence. Features can be experimental where ZITADEL will assume a sane default, such as disabled. When over time confidence in such a feature grows, ZITADEL can default to enabling the feature. As a final step we might choose to always enable a feature and remove the setting from this API, reserving the proto field number. Such removal is not considered a breaking change. Setting a removed field will effectively result in a no-op.\".\x0A\x07ZITADEL\x12\x13https://zitadel.com\x1A\x0Ehi@zitadel.com*B\x0A\x0AApache 2.0\x124https://github.com/zitadel/zitadel/blob/main/LICENSE2\x032.0\x1A\x0E\$CUSTOM-DOMAIN\"\x01/*\x02\x02\x012\x10application/json2\x10application/grpc2\x1Aapplication/grpc-web+proto:\x10application/json:\x10application/grpc:\x1Aapplication/grpc-web+protoRm\x0A\x03403\x12f\x0AGReturned when the user does not have permission to access the resource.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusR\x8B\x01\x0A\x03404\x12\x83\x01\x0AdReturned when the resource has no feature flag settings and inheritance from the parent is disabled.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusZ\xC2\x01\x0A\xBF\x01\x0A\x06OAuth2\x12\xB4\x01\x08\x03(\x042!\$CUSTOM-DOMAIN/oauth/v2/authorize:\x1D\$CUSTOM-DOMAIN/oauth/v2/tokenBl\x0A\x10\x0A\x06openid\x12\x06openid\x0AX\x0A*urn:zitadel:iam:org:project:id:zitadel:aud\x12*urn:zitadel:iam:org:project:id:zitadel:audb@\x0A>\x0A\x06OAuth2\x124\x0A\x06openid\x0A*urn:zitadel:iam:org:project:id:zitadel:audr>\x0A\"Detailed information about ZITADEL\x12\x18https://zitadel.com/docsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

