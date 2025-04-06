<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/login_settings.proto

namespace GPBMetadata\Zitadel\Settings\V2Beta;

class LoginSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Zitadel\Settings\V2Beta\Settings::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xA0!\x0A,zitadel/settings/v2beta/login_settings.proto\x12\x17zitadel.settings.v2beta\x1A&zitadel/settings/v2beta/settings.proto\x1A\x1Egoogle/protobuf/duration.proto\"\xA2\x18\x0A\x0DLoginSettings\x12~\x0A\x17allow_username_password\x18\x01 \x01(\x08BF\x92AC2Adefines if a user is allowed to log in with username and passwordR\x15allowUsernamePassword\x12r\x0A\x0Eallow_register\x18\x02 \x01(\x08BK\x92AH2Fdefines if a person is allowed to register a user on this organizationR\x0DallowRegister\x12\x84\x01\x0A\x12allow_external_idp\x18\x03 \x01(\x08BV\x92AS2Qdefines if a user is allowed to add a defined identity provider. E.g. Google authR\x10allowExternalIdp\x12U\x0A\x09force_mfa\x18\x04 \x01(\x08B8\x92A523defines if a user MUST use a multi-factor to log inR\x08forceMfa\x12z\x0A\x0Dpasskeys_type\x18\x05 \x01(\x0E2%.zitadel.settings.v2beta.PasskeysTypeB.\x92A+2)defines if passkeys are allowed for usersR\x0CpasskeysType\x12w\x0A\x13hide_password_reset\x18\x06 \x01(\x08BG\x92AD2Bdefines if password reset link should be shown in the login screenR\x11hidePasswordReset\x12\xAB\x01\x0A\x18ignore_unknown_usernames\x18\x07 \x01(\x08Bq\x92An2ldefines if unknown username on login screen directly returns an error or always displays the password screenR\x16ignoreUnknownUsernames\x12\xC1\x01\x0A\x14default_redirect_uri\x18\x08 \x01(\x09B\x8E\x01\x92A\x8A\x012idefines where the user will be redirected to if the login is started without app context (e.g. from mail)J\x1D\"https://acme.com/ui/console\"R\x12defaultRedirectUri\x12\xB1\x01\x0A\x17password_check_lifetime\x18\x09 \x01(\x0B2\x19.google.protobuf.DurationB^\x92A[2NDefines after how much time the user has to re-authenticate with the password.J\x09\"864000s\"R\x15passwordCheckLifetime\x12\xC4\x01\x0A\x1Dexternal_login_check_lifetime\x18\x0A \x01(\x0B2\x19.google.protobuf.DurationBf\x92Ac2VDefines after how much time the user has to re-authenticate with an external provider.J\x09\"864000s\"R\x1AexternalLoginCheckLifetime\x12\xA0\x01\x0A\x16mfa_init_skip_lifetime\x18\x0B \x01(\x0B2\x19.google.protobuf.DurationBP\x92AM2?Defines after how much time the mfa prompt will be shown again.J\x0A\"2592000s\"R\x13mfaInitSkipLifetime\x12\xA3\x01\x0A\x1Csecond_factor_check_lifetime\x18\x0C \x01(\x0B2\x19.google.protobuf.DurationBG\x92AD28Defines after how long the second factor check is valid.J\x08\"64800s\"R\x19secondFactorCheckLifetime\x12\x9A\x01\x0A\x1Bmulti_factor_check_lifetime\x18\x0D \x01(\x0B2\x19.google.protobuf.DurationB@\x92A=21Defines how long the multi-factor check is valid.J\x08\"43200s\"R\x18multiFactorCheckLifetime\x12P\x0A\x0Esecond_factors\x18\x0E \x03(\x0E2).zitadel.settings.v2beta.SecondFactorTypeR\x0DsecondFactors\x12M\x0A\x0Dmulti_factors\x18\x0F \x03(\x0E2(.zitadel.settings.v2beta.MultiFactorTypeR\x0CmultiFactors\x12\x86\x02\x0A\x16allow_domain_discovery\x18\x10 \x01(\x08B\xCF\x01\x92A\xCB\x012\xC8\x01If set to true, the suffix (@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success.R\x14allowDomainDiscovery\x12\xA4\x01\x0A\x18disable_login_with_email\x18\x11 \x01(\x08Bk\x92Ah2fdefines if the user can additionally (to the login name) be identified by their verified email addressR\x15disableLoginWithEmail\x12\xA3\x01\x0A\x18disable_login_with_phone\x18\x12 \x01(\x08Bj\x92Ag2edefines if the user can additionally (to the login name) be identified by their verified phone numberR\x15disableLoginWithPhone\x12\xBE\x01\x0A\x13resource_owner_type\x18\x13 \x01(\x0E2*.zitadel.settings.v2beta.ResourceOwnerTypeBb\x92A_2]resource_owner_type returns if the settings is managed on the organization or on the instanceR\x11resourceOwnerType\x12\xBE\x01\x0A\x14force_mfa_local_only\x18\x16 \x01(\x08B\x8C\x01\x92A\x88\x012\x85\x01if activated, only local authenticated users are forced to use MFA. Authentication through IDPs won't prompt a MFA step in the login.R\x11forceMfaLocalOnly\"y\x0A\x10IdentityProvider\x12\x0E\x0A\x02id\x18\x01 \x01(\x09R\x02id\x12\x12\x0A\x04name\x18\x02 \x01(\x09R\x04name\x12A\x0A\x04type\x18\x03 \x01(\x0E2-.zitadel.settings.v2beta.IdentityProviderTypeR\x04type*\xB0\x01\x0A\x10SecondFactorType\x12\"\x0A\x1ESECOND_FACTOR_TYPE_UNSPECIFIED\x10\x00\x12\x1A\x0A\x16SECOND_FACTOR_TYPE_OTP\x10\x01\x12\x1A\x0A\x16SECOND_FACTOR_TYPE_U2F\x10\x02\x12 \x0A\x1CSECOND_FACTOR_TYPE_OTP_EMAIL\x10\x03\x12\x1E\x0A\x1ASECOND_FACTOR_TYPE_OTP_SMS\x10\x04*a\x0A\x0FMultiFactorType\x12!\x0A\x1DMULTI_FACTOR_TYPE_UNSPECIFIED\x10\x00\x12+\x0A'MULTI_FACTOR_TYPE_U2F_WITH_VERIFICATION\x10\x01*H\x0A\x0CPasskeysType\x12\x1D\x0A\x19PASSKEYS_TYPE_NOT_ALLOWED\x10\x00\x12\x19\x0A\x15PASSKEYS_TYPE_ALLOWED\x10\x01*\xC6\x03\x0A\x14IdentityProviderType\x12&\x0A\"IDENTITY_PROVIDER_TYPE_UNSPECIFIED\x10\x00\x12\x1F\x0A\x1BIDENTITY_PROVIDER_TYPE_OIDC\x10\x01\x12\x1E\x0A\x1AIDENTITY_PROVIDER_TYPE_JWT\x10\x02\x12\x1F\x0A\x1BIDENTITY_PROVIDER_TYPE_LDAP\x10\x03\x12 \x0A\x1CIDENTITY_PROVIDER_TYPE_OAUTH\x10\x04\x12#\x0A\x1FIDENTITY_PROVIDER_TYPE_AZURE_AD\x10\x05\x12!\x0A\x1DIDENTITY_PROVIDER_TYPE_GITHUB\x10\x06\x12\$\x0A IDENTITY_PROVIDER_TYPE_GITHUB_ES\x10\x07\x12!\x0A\x1DIDENTITY_PROVIDER_TYPE_GITLAB\x10\x08\x12-\x0A)IDENTITY_PROVIDER_TYPE_GITLAB_SELF_HOSTED\x10\x09\x12!\x0A\x1DIDENTITY_PROVIDER_TYPE_GOOGLE\x10\x0A\x12\x1F\x0A\x1BIDENTITY_PROVIDER_TYPE_SAML\x10\x0BB>Z<github.com/zitadel/zitadel/pkg/grpc/settings/v2beta;settingsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

