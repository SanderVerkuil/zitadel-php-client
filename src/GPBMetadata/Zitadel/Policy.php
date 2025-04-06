<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/policy.proto

namespace GPBMetadata\Zitadel;

class Policy
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object_::initOnce();
        \GPBMetadata\Zitadel\Idp::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        
        
        $pool->internalAddGeneratedFile(
            "\x0A\xDDD\x0A\x14zitadel/policy.proto\x12\x11zitadel.policy.v1\x1A\x11zitadel/idp.proto\x1A\x1Egoogle/protobuf/duration.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\"\x9B\x02\x0A\x0COrgIAMPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12z\x0A\x19user_login_must_be_domain\x18\x02 \x01(\x08B@\x92A=2;the username has to end with the domain of its organizationR\x15userLoginMustBeDomain\x12Z\x0A\x0Ais_default\x18\x03 \x01(\x08B;\x92A826defines if the organization's admin changed the policyR\x09isDefault\"\xEB\x04\x0A\x0CDomainPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12z\x0A\x19user_login_must_be_domain\x18\x02 \x01(\x08B@\x92A=2;the username has to end with the domain of its organizationR\x15userLoginMustBeDomain\x12Z\x0A\x0Ais_default\x18\x03 \x01(\x08B;\x92A826defines if the organization's admin changed the policyR\x09isDefault\x12\x8F\x01\x0A\x14validate_org_domains\x18\x04 \x01(\x08B]\x92AZ2Xdefines if organization domains should be validated org count as validated automaticallyR\x12validateOrgDomains\x12\xBB\x01\x0A+smtp_sender_address_matches_instance_domain\x18\x05 \x01(\x08B^\x92A[2Ydefines if the SMTP sender address domain should match an existing domain on the instanceR&smtpSenderAddressMatchesInstanceDomain\"\xB1\x0E\x0A\x0BLabelPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12P\x0A\x0Dprimary_color\x18\x02 \x01(\x09B+\x92A(2\x1Bhex value for primary colorJ\x09\"#5469d4\"R\x0CprimaryColor\x12Z\x0A\x0Ais_default\x18\x04 \x01(\x08B;\x92A826defines if the organization's admin changed the policyR\x09isDefault\x12\xA6\x01\x0A\x16hide_login_name_suffix\x18\x05 \x01(\x08Bq\x92An2lhides the org suffix on the login form if the scope \"urn:zitadel:iam:org:domain:primary:{domainname}\" is setR\x13hideLoginNameSuffix\x12G\x0A\x0Awarn_color\x18\x06 \x01(\x09B(\x92A%2\x18hex value for warn colorJ\x09\"#CD3D56\"R\x09warnColor\x12Y\x0A\x10background_color\x18\x07 \x01(\x09B.\x92A+2\x1Ehex value for background colorJ\x09\"#FAFAFA\"R\x0FbackgroundColor\x12G\x0A\x0Afont_color\x18\x08 \x01(\x09B(\x92A%2\x18hex value for font colorJ\x09\"#000000\"R\x09fontColor\x12h\x0A\x12primary_color_dark\x18\x09 \x01(\x09B:\x92A72*hex value for the primary color dark themeJ\x09\"#BBBAFA\"R\x10primaryColorDark\x12m\x0A\x15background_color_dark\x18\x0A \x01(\x09B9\x92A62)hex value for background color dark themeJ\x09\"#111827\"R\x13backgroundColorDark\x12^\x0A\x0Fwarn_color_dark\x18\x0B \x01(\x09B6\x92A32&hex value for warning color dark themeJ\x09\"#FF3B5B\"R\x0DwarnColorDark\x12[\x0A\x0Ffont_color_dark\x18\x0C \x01(\x09B3\x92A02#hex value for font color dark themeJ\x09\"#FFFFFF\"R\x0DfontColorDark\x12+\x0A\x11disable_watermark\x18\x0D \x01(\x08R\x10disableWatermark\x12\x99\x01\x0A\x08logo_url\x18\x0E \x01(\x09B~\x92A{2#hex value for font color dark themeJT\"https://acme.com/assets/v1/165617850692654601/policy/label/logo-180950416321494657\"R\x07logoUrl\x12\x99\x01\x0A\x08icon_url\x18\x0F \x01(\x09B~\x92A{2#hex value for font color dark themeJT\"https://acme.com/assets/v1/165617850692654601/policy/label/icon-180950498874178817\"R\x07iconUrl\x12\xA9\x01\x0A\x0Dlogo_url_dark\x18\x10 \x01(\x09B\x84\x01\x92A\x80\x012#hex value for font color dark themeJY\"https://acme.com/assets/v1/165617850692654601/policy/label/logo-dark-180950229376461345\"R\x0BlogoUrlDark\x12\xA9\x01\x0A\x0Dicon_url_dark\x18\x11 \x01(\x09B\x84\x01\x92A\x80\x012#hex value for font color dark themeJY\"https://acme.com/assets/v1/165617850692654601/policy/label/icon-dark-180950243237405441\"R\x0BiconUrlDark\x12\x19\x0A\x08font_url\x18\x12 \x01(\x09R\x07fontUrl\x12;\x0A\x0Atheme_mode\x18\x13 \x01(\x0E2\x1C.zitadel.policy.v1.ThemeModeR\x09themeMode\"\xCB\x15\x0A\x0BLoginPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12~\x0A\x17allow_username_password\x18\x02 \x01(\x08BF\x92AC2Adefines if a user is allowed to log in with username and passwordR\x15allowUsernamePassword\x12r\x0A\x0Eallow_register\x18\x03 \x01(\x08BK\x92AH2Fdefines if a person is allowed to register a user on this organizationR\x0DallowRegister\x12\x84\x01\x0A\x12allow_external_idp\x18\x04 \x01(\x08BV\x92AS2Qdefines if a user is allowed to add a defined identity provider. E.g. Google authR\x10allowExternalIdp\x12U\x0A\x09force_mfa\x18\x05 \x01(\x08B8\x92A523defines if a user MUST use a multi-factor to log inR\x08forceMfa\x12\x83\x01\x0A\x11passwordless_type\x18\x06 \x01(\x0E2#.zitadel.policy.v1.PasswordlessTypeB1\x92A.2,defines if passwordless is allowed for usersR\x10passwordlessType\x12Z\x0A\x0Ais_default\x18\x07 \x01(\x08B;\x92A826defines if the organization's admin changed the policyR\x09isDefault\x12w\x0A\x13hide_password_reset\x18\x08 \x01(\x08BG\x92AD2Bdefines if password reset link should be shown in the login screenR\x11hidePasswordReset\x12\xAB\x01\x0A\x18ignore_unknown_usernames\x18\x09 \x01(\x08Bq\x92An2ldefines if unknown username on login screen directly returns an error or always displays the password screenR\x16ignoreUnknownUsernames\x12\xC1\x01\x0A\x14default_redirect_uri\x18\x0A \x01(\x09B\x8E\x01\x92A\x8A\x012idefines where the user will be redirected to if the login is started without app context (e.g. from mail)J\x1D\"https://acme.com/ui/console\"R\x12defaultRedirectUri\x12a\x0A\x17password_check_lifetime\x18\x0B \x01(\x0B2\x19.google.protobuf.DurationB\x0E\x92A\x0BJ\x09\"864000s\"R\x15passwordCheckLifetime\x12l\x0A\x1Dexternal_login_check_lifetime\x18\x0C \x01(\x0B2\x19.google.protobuf.DurationB\x0E\x92A\x0BJ\x09\"864000s\"R\x1AexternalLoginCheckLifetime\x12_\x0A\x16mfa_init_skip_lifetime\x18\x0D \x01(\x0B2\x19.google.protobuf.DurationB\x0F\x92A\x0CJ\x0A\"2592000s\"R\x13mfaInitSkipLifetime\x12i\x0A\x1Csecond_factor_check_lifetime\x18\x0E \x01(\x0B2\x19.google.protobuf.DurationB\x0D\x92A\x0AJ\x08\"64800s\"R\x19secondFactorCheckLifetime\x12g\x0A\x1Bmulti_factor_check_lifetime\x18\x0F \x01(\x0B2\x19.google.protobuf.DurationB\x0D\x92A\x0AJ\x08\"43200s\"R\x18multiFactorCheckLifetime\x12J\x0A\x0Esecond_factors\x18\x10 \x03(\x0E2#.zitadel.policy.v1.SecondFactorTypeR\x0DsecondFactors\x12G\x0A\x0Dmulti_factors\x18\x11 \x03(\x0E2\".zitadel.policy.v1.MultiFactorTypeR\x0CmultiFactors\x126\x0A\x04idps\x18\x12 \x03(\x0B2\".zitadel.idp.v1.IDPLoginPolicyLinkR\x04idps\x12\x86\x02\x0A\x16allow_domain_discovery\x18\x13 \x01(\x08B\xCF\x01\x92A\xCB\x012\xC8\x01If set to true, the suffix (@domain.com) of an unknown username input on the login screen will be matched against the org domains and will redirect to the registration of that organization on success.R\x14allowDomainDiscovery\x12\xA4\x01\x0A\x18disable_login_with_email\x18\x14 \x01(\x08Bk\x92Ah2fdefines if the user can additionally (to the login name) be identified by their verified email addressR\x15disableLoginWithEmail\x12\xA3\x01\x0A\x18disable_login_with_phone\x18\x15 \x01(\x08Bj\x92Ag2edefines if the user can additionally (to the login name) be identified by their verified phone numberR\x15disableLoginWithPhone\x12\xBE\x01\x0A\x14force_mfa_local_only\x18\x16 \x01(\x08B\x8C\x01\x92A\x88\x012\x85\x01if activated, only local authenticated users are forced to use MFA. Authentication through IDPs won't prompt a MFA step in the login.R\x11forceMfaLocalOnly\"\xCC\x04\x0A\x18PasswordComplexityPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12'\x0A\x0Amin_length\x18\x02 \x01(\x04B\x08\x92A\x05J\x03\"8\"R\x09minLength\x12c\x0A\x0Dhas_uppercase\x18\x03 \x01(\x08B>\x92A;29defines if the password MUST contain an upper case letterR\x0ChasUppercase\x12a\x0A\x0Dhas_lowercase\x18\x04 \x01(\x08B<\x92A927defines if the password MUST contain a lowercase letterR\x0ChasLowercase\x12Q\x0A\x0Ahas_number\x18\x05 \x01(\x08B2\x92A/2-defines if the password MUST contain a numberR\x09hasNumber\x12[\x0A\x0Ahas_symbol\x18\x06 \x01(\x08B<\x92A927defines if the password MUST contain a symbol. E.g. \"\$\"R\x09hasSymbol\x12Z\x0A\x0Ais_default\x18\x07 \x01(\x08B;\x92A826defines if the organization's admin changed the policyR\x09isDefault\"\xCA\x01\x0A\x11PasswordAgePolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12,\x0A\x0Cmax_age_days\x18\x02 \x01(\x04B\x0A\x92A\x07J\x05\"365\"R\x0AmaxAgeDays\x123\x0A\x10expire_warn_days\x18\x03 \x01(\x04B\x09\x92A\x06J\x04\"10\"R\x0EexpireWarnDays\x12\x1D\x0A\x0Ais_default\x18\x04 \x01(\x08R\x09isDefault\"\xB1\x05\x0A\x0DLockoutPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12\x89\x02\x0A\x15max_password_attempts\x18\x02 \x01(\x04B\xD4\x01\x92A\xD0\x012\xC7\x01Maximum password check attempts before the account gets locked. Attempts are reset as soon as the password is entered correctly or the password is reset. If set to 0 the account will never be locked.J\x04\"10\"R\x13maxPasswordAttempts\x12\x82\x02\x0A\x10max_otp_attempts\x18\x03 \x01(\x04B\xD7\x01\x92A\xD3\x012\xCA\x01Maximum failed attempts for a single OTP type (TOTP, SMS, Email) before the account gets locked. Attempts are reset as soon as the OTP is entered correctly. If set to 0 the account will never be locked.J\x04\"10\"R\x0EmaxOtpAttempts\x12Z\x0A\x0Ais_default\x18\x04 \x01(\x08B;\x92A826defines if the organization's admin changed the policyR\x09isDefault\"\xD6\x06\x0A\x0DPrivacyPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12Q\x0A\x08tos_link\x18\x02 \x01(\x09B6\x92A3J1\"https://zitadel.com/docs/legal/terms-of-service\"R\x07tosLink\x12W\x0A\x0Cprivacy_link\x18\x03 \x01(\x09B4\x92A1J/\"https://zitadel.com/docs/legal/privacy-policy\"R\x0BprivacyLink\x12\x1D\x0A\x0Ais_default\x18\x04 \x01(\x08R\x09isDefault\x12Q\x0A\x09help_link\x18\x05 \x01(\x09B4\x92A1J/\"https://zitadel.com/docs/manuals/introduction\"R\x08helpLink\x12n\x0A\x0Dsupport_email\x18\x06 \x01(\x09BI\x92A92\x1Dhelp / support email address.J\x18\"support-email@test.com\"\xFAB\x0Ar\x08\x18\xC0\x02`\x01\xD0\x01\x01R\x0CsupportEmail\x12o\x0A\x09docs_link\x18\x07 \x01(\x09BR\x92AO21Link to documentation to be shown in the console.J\x1A\"https://zitadel.com/docs\"R\x08docsLink\x12\x8B\x01\x0A\x0Bcustom_link\x18\x08 \x01(\x09Bj\x92Ag2LLink to an external resource that will be available to users in the console.J\x17\"https://external.link\"R\x0AcustomLink\x12\x82\x01\x0A\x10custom_link_text\x18\x09 \x01(\x09BX\x92AU2GThe button text that would be shown in console pointing to custom link.J\x0A\"External\"R\x0EcustomLinkText\"\xF3\x01\x0A\x12NotificationPolicy\x123\x0A\x07details\x18\x01 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12\x1D\x0A\x0Ais_default\x18\x02 \x01(\x08R\x09isDefault\x12\x88\x01\x0A\x0Fpassword_change\x18\x03 \x01(\x08B_\x92A\\2ZIf set to true the users will get a notification whenever their password has been changed.R\x0EpasswordChange*g\x0A\x09ThemeMode\x12\x1A\x0A\x16THEME_MODE_UNSPECIFIED\x10\x00\x12\x13\x0A\x0FTHEME_MODE_AUTO\x10\x01\x12\x13\x0A\x0FTHEME_MODE_DARK\x10\x02\x12\x14\x0A\x10THEME_MODE_LIGHT\x10\x03*\xB0\x01\x0A\x10SecondFactorType\x12\"\x0A\x1ESECOND_FACTOR_TYPE_UNSPECIFIED\x10\x00\x12\x1A\x0A\x16SECOND_FACTOR_TYPE_OTP\x10\x01\x12\x1A\x0A\x16SECOND_FACTOR_TYPE_U2F\x10\x02\x12 \x0A\x1CSECOND_FACTOR_TYPE_OTP_EMAIL\x10\x03\x12\x1E\x0A\x1ASECOND_FACTOR_TYPE_OTP_SMS\x10\x04*a\x0A\x0FMultiFactorType\x12!\x0A\x1DMULTI_FACTOR_TYPE_UNSPECIFIED\x10\x00\x12+\x0A'MULTI_FACTOR_TYPE_U2F_WITH_VERIFICATION\x10\x01*T\x0A\x10PasswordlessType\x12!\x0A\x1DPASSWORDLESS_TYPE_NOT_ALLOWED\x10\x00\x12\x1D\x0A\x19PASSWORDLESS_TYPE_ALLOWED\x10\x01B,Z*github.com/zitadel/zitadel/pkg/grpc/policyb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

