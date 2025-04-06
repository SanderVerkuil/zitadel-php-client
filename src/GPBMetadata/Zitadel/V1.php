<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/v1.proto

namespace GPBMetadata\Zitadel;

class V1
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\User::initOnce();
        \GPBMetadata\Zitadel\Idp::initOnce();
        \GPBMetadata\Zitadel\Org::initOnce();
        \GPBMetadata\Zitadel\Management::initOnce();
        \GPBMetadata\Zitadel\AuthNKey::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xC84\x0A\x10zitadel/v1.proto\x12\x0Dzitadel.v1.v1\x1A\x11zitadel/idp.proto\x1A\x11zitadel/org.proto\x1A\x18zitadel/management.proto\x1A\x18zitadel/auth_n_key.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A\x17validate/validate.proto\"\xEC\x01\x0A\x1CAddCustomOrgIAMPolicyRequest\x12@\x0A\x06org_id\x18\x01 \x01(\x09B)\x92A\x1CJ\x14\"#69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x05orgId\x12z\x0A\x19user_login_must_be_domain\x18\x02 \x01(\x08B@\x92A=2;the username has to end with the domain of its organizationR\x15userLoginMustBeDomain:\x0E\x92A\x0B\x0A\x09\xD2\x01\x06org_id\";\x0A\x0DImportDataOrg\x12*\x0A\x04orgs\x18\x01 \x03(\x0B2\x16.zitadel.v1.v1.DataOrgR\x04orgs\"\x8B\x19\x0A\x07DataOrg\x12\x15\x0A\x06org_id\x18\x01 \x01(\x09R\x05orgId\x126\x0A\x03org\x18\x03 \x01(\x0B2\$.zitadel.management.v1.AddOrgRequestR\x03org\x12J\x0A\x0Aiam_policy\x18\x04 \x01(\x0B2+.zitadel.v1.v1.AddCustomOrgIAMPolicyRequestR\x09iamPolicy\x12U\x0A\x0Clabel_policy\x18\x05 \x01(\x0B22.zitadel.management.v1.AddCustomLabelPolicyRequestR\x0BlabelPolicy\x12[\x0A\x0Elockout_policy\x18\x06 \x01(\x0B24.zitadel.management.v1.AddCustomLockoutPolicyRequestR\x0DlockoutPolicy\x12U\x0A\x0Clogin_policy\x18\x07 \x01(\x0B22.zitadel.management.v1.AddCustomLoginPolicyRequestR\x0BloginPolicy\x12}\x0A\x1Apassword_complexity_policy\x18\x08 \x01(\x0B2?.zitadel.management.v1.AddCustomPasswordComplexityPolicyRequestR\x18passwordComplexityPolicy\x12[\x0A\x0Eprivacy_policy\x18\x09 \x01(\x0B24.zitadel.management.v1.AddCustomPrivacyPolicyRequestR\x0DprivacyPolicy\x126\x0A\x08projects\x18\x0A \x03(\x0B2\x1A.zitadel.v1.v1.DataProjectR\x08projects\x12Q\x0A\x0Dproject_roles\x18\x0B \x03(\x0B2,.zitadel.management.v1.AddProjectRoleRequestR\x0CprojectRoles\x12<\x0A\x08api_apps\x18\x0C \x03(\x0B2!.zitadel.v1.v1.DataAPIApplicationR\x07apiApps\x12?\x0A\x09oidc_apps\x18\x0D \x03(\x0B2\".zitadel.v1.v1.DataOIDCApplicationR\x08oidcApps\x12=\x0A\x0Bhuman_users\x18\x0E \x03(\x0B2\x1C.zitadel.v1.v1.DataHumanUserR\x0AhumanUsers\x12C\x0A\x0Dmachine_users\x18\x0F \x03(\x0B2\x1E.zitadel.v1.v1.DataMachineUserR\x0CmachineUsers\x12P\x0A\x0Ftrigger_actions\x18\x10 \x03(\x0B2'.zitadel.v1.v1.SetTriggerActionsRequestR\x0EtriggerActions\x123\x0A\x07actions\x18\x11 \x03(\x0B2\x19.zitadel.v1.v1.DataActionR\x07actions\x12F\x0A\x0Eproject_grants\x18\x12 \x03(\x0B2\x1F.zitadel.v1.v1.DataProjectGrantR\x0DprojectGrants\x12K\x0A\x0Buser_grants\x18\x13 \x03(\x0B2*.zitadel.management.v1.AddUserGrantRequestR\x0AuserGrants\x12K\x0A\x0Borg_members\x18\x14 \x03(\x0B2*.zitadel.management.v1.AddOrgMemberRequestR\x0AorgMembers\x12W\x0A\x0Fproject_members\x18\x15 \x03(\x0B2..zitadel.management.v1.AddProjectMemberRequestR\x0EprojectMembers\x12g\x0A\x15project_grant_members\x18\x16 \x03(\x0B23.zitadel.management.v1.AddProjectGrantMemberRequestR\x13projectGrantMembers\x12R\x0A\x0Duser_metadata\x18\x17 \x03(\x0B2-.zitadel.management.v1.SetUserMetadataRequestR\x0CuserMetadata\x12R\x0A\x0Blogin_texts\x18\x18 \x03(\x0B21.zitadel.management.v1.SetCustomLoginTextsRequestR\x0AloginTexts\x12[\x0A\x0Dinit_messages\x18\x19 \x03(\x0B26.zitadel.management.v1.SetCustomInitMessageTextRequestR\x0CinitMessages\x12w\x0A\x17password_reset_messages\x18\x1A \x03(\x0B2?.zitadel.management.v1.SetCustomPasswordResetMessageTextRequestR\x15passwordResetMessages\x12q\x0A\x15verify_email_messages\x18\x1B \x03(\x0B2=.zitadel.management.v1.SetCustomVerifyEmailMessageTextRequestR\x13verifyEmailMessages\x12q\x0A\x15verify_phone_messages\x18\x1C \x03(\x0B2=.zitadel.management.v1.SetCustomVerifyPhoneMessageTextRequestR\x13verifyPhoneMessages\x12w\x0A\x17domain_claimed_messages\x18\x1D \x03(\x0B2?.zitadel.management.v1.SetCustomDomainClaimedMessageTextRequestR\x15domainClaimedMessages\x12\x98\x01\x0A\"passwordless_registration_messages\x18\x1E \x03(\x0B2J.zitadel.management.v1.SetCustomPasswordlessRegistrationMessageTextRequestR passwordlessRegistrationMessages\x127\x0A\x09oidc_idps\x18\x1F \x03(\x0B2\x1A.zitadel.v1.v1.DataOIDCIDPR\x08oidcIdps\x124\x0A\x08jwt_idps\x18  \x03(\x0B2\x19.zitadel.v1.v1.DataJWTIDPR\x07jwtIdps\x12a\x0A\x0Esecond_factors\x18! \x03(\x0B2:.zitadel.management.v1.AddSecondFactorToLoginPolicyRequestR\x0DsecondFactors\x12^\x0A\x0Dmulti_factors\x18\" \x03(\x0B29.zitadel.management.v1.AddMultiFactorToLoginPolicyRequestR\x0CmultiFactors\x12E\x0A\x04idps\x18# \x03(\x0B21.zitadel.management.v1.AddIDPToLoginPolicyRequestR\x04idps\x12:\x0A\x0Auser_links\x18\$ \x03(\x0B2\x1B.zitadel.idp.v1.IDPUserLinkR\x09userLinks\x120\x0A\x07domains\x18% \x03(\x0B2\x16.zitadel.org.v1.DomainR\x07domains\x124\x0A\x08app_keys\x18& \x03(\x0B2\x19.zitadel.v1.v1.DataAppKeyR\x07appKeys\x12@\x0A\x0Cmachine_keys\x18' \x03(\x0B2\x1D.zitadel.v1.v1.DataMachineKeyR\x0BmachineKeys\x12n\x0A\x14invite_user_messages\x18( \x03(\x0B2<.zitadel.management.v1.SetCustomInviteUserMessageTextRequestR\x12inviteUserMessages\"c\x0A\x0BDataOIDCIDP\x12\x15\x0A\x06idp_id\x18\x01 \x01(\x09R\x05idpId\x12=\x0A\x03idp\x18\x02 \x01(\x0B2+.zitadel.management.v1.AddOrgOIDCIDPRequestR\x03idp\"a\x0A\x0ADataJWTIDP\x12\x15\x0A\x06idp_id\x18\x01 \x01(\x09R\x05idpId\x12<\x0A\x03idp\x18  \x01(\x0B2*.zitadel.management.v1.AddOrgJWTIDPRequestR\x03idp\"\xAD\x08\x0A\x0FExportHumanUser\x12'\x0A\x09user_name\x18\x01 \x01(\x09B\x0A\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x08userName\x12J\x0A\x07profile\x18\x02 \x01(\x0B2&.zitadel.v1.v1.ExportHumanUser.ProfileB\x08\xFAB\x05\x8A\x01\x02\x10\x01R\x07profile\x12D\x0A\x05email\x18\x03 \x01(\x0B2\$.zitadel.v1.v1.ExportHumanUser.EmailB\x08\xFAB\x05\x8A\x01\x02\x10\x01R\x05email\x12:\x0A\x05phone\x18\x04 \x01(\x0B2\$.zitadel.v1.v1.ExportHumanUser.PhoneR\x05phone\x12\x1A\x0A\x08password\x18\x05 \x01(\x09R\x08password\x12V\x0A\x0Fhashed_password\x18\x06 \x01(\x0B2-.zitadel.v1.v1.ExportHumanUser.HashedPasswordR\x0EhashedPassword\x128\x0A\x18password_change_required\x18\x07 \x01(\x08R\x16passwordChangeRequired\x12J\x0A!request_passwordless_registration\x18\x08 \x01(\x08R\x1FrequestPasswordlessRegistration\x12\x19\x0A\x08otp_code\x18\x09 \x01(\x09R\x07otpCode\x1A\x9A\x02\x0A\x07Profile\x12)\x0A\x0Afirst_name\x18\x01 \x01(\x09B\x0A\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x09firstName\x12'\x0A\x09last_name\x18\x02 \x01(\x09B\x0A\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x08lastName\x12%\x0A\x09nick_name\x18\x03 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x08nickName\x12+\x0A\x0Cdisplay_name\x18\x04 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x0BdisplayName\x126\x0A\x12preferred_language\x18\x05 \x01(\x09B\x07\xFAB\x04r\x02\x18\x0AR\x11preferredLanguage\x12/\x0A\x06gender\x18\x06 \x01(\x0E2\x17.zitadel.user.v1.GenderR\x06gender\x1AR\x0A\x05Email\x12\x1D\x0A\x05email\x18\x01 \x01(\x09B\x07\xFAB\x04r\x02`\x01R\x05email\x12*\x0A\x11is_email_verified\x18\x02 \x01(\x08R\x0FisEmailVerified\x1AW\x0A\x05Phone\x12\"\x0A\x05phone\x18\x01 \x01(\x09B\x0C\xFAB\x09r\x07\x10\x01\x182:\x01+R\x05phone\x12*\x0A\x11is_phone_verified\x18\x02 \x01(\x08R\x0FisPhoneVerified\x1AD\x0A\x0EHashedPassword\x12\x14\x0A\x05value\x18\x01 \x01(\x09R\x05value\x12\x1C\x0A\x09algorithm\x18\x02 \x01(\x09R\x09algorithm\"\x82\x02\x0A\x0ADataAppKey\x12\x0E\x0A\x02id\x18\x01 \x01(\x09R\x02id\x12\x1D\x0A\x0Aproject_id\x18\x02 \x01(\x09R\x09projectId\x12\x15\x0A\x06app_id\x18\x03 \x01(\x09R\x05appId\x12\x1B\x0A\x09client_id\x18\x04 \x01(\x09R\x08clientId\x12-\x0A\x04type\x18\x05 \x01(\x0E2\x19.zitadel.authn.v1.KeyTypeR\x04type\x12C\x0A\x0Fexpiration_date\x18\x06 \x01(\x0B2\x1A.google.protobuf.TimestampR\x0EexpirationDate\x12\x1D\x0A\x0Apublic_key\x18\x07 \x01(\x0CR\x09publicKey\"\xD3\x01\x0A\x0EDataMachineKey\x12\x15\x0A\x06key_id\x18\x01 \x01(\x09R\x05keyId\x12\x17\x0A\x07user_id\x18\x02 \x01(\x09R\x06userId\x12-\x0A\x04type\x18\x03 \x01(\x0E2\x19.zitadel.authn.v1.KeyTypeR\x04type\x12C\x0A\x0Fexpiration_date\x18\x04 \x01(\x0B2\x1A.google.protobuf.TimestampR\x0EexpirationDate\x12\x1D\x0A\x0Apublic_key\x18\x05 \x01(\x0CR\x09publicKey\"p\x0A\x0BDataProject\x12\x1D\x0A\x0Aproject_id\x18\x01 \x01(\x09R\x09projectId\x12B\x0A\x07project\x18\x02 \x01(\x0B2(.zitadel.management.v1.AddProjectRequestR\x07project\"f\x0A\x12DataAPIApplication\x12\x15\x0A\x06app_id\x18\x01 \x01(\x09R\x05appId\x129\x0A\x03app\x18\x02 \x01(\x0B2'.zitadel.management.v1.AddAPIAppRequestR\x03app\"h\x0A\x13DataOIDCApplication\x12\x15\x0A\x06app_id\x18\x01 \x01(\x09R\x05appId\x12:\x0A\x03app\x18\x02 \x01(\x0B2(.zitadel.management.v1.AddOIDCAppRequestR\x03app\"k\x0A\x0DDataHumanUser\x12\x17\x0A\x07user_id\x18\x01 \x01(\x09R\x06userId\x12A\x0A\x04user\x18\x02 \x01(\x0B2-.zitadel.management.v1.ImportHumanUserRequestR\x04user\"l\x0A\x0FDataMachineUser\x12\x17\x0A\x07user_id\x18\x01 \x01(\x09R\x06userId\x12@\x0A\x04user\x18\x02 \x01(\x0B2,.zitadel.management.v1.AddMachineUserRequestR\x04user\"m\x0A\x0ADataAction\x12\x1B\x0A\x09action_id\x18\x01 \x01(\x09R\x08actionId\x12B\x0A\x06action\x18\x02 \x01(\x0B2*.zitadel.management.v1.CreateActionRequestR\x06action\"\x81\x01\x0A\x10DataProjectGrant\x12\x19\x0A\x08grant_id\x18\x01 \x01(\x09R\x07grantId\x12R\x0A\x0Dproject_grant\x18\x02 \x01(\x0B2-.zitadel.management.v1.AddProjectGrantRequestR\x0CprojectGrant\"\xAE\x01\x0A\x18SetTriggerActionsRequest\x124\x0A\x09flow_type\x18\x01 \x01(\x0E2\x17.zitadel.v1.v1.FlowTypeR\x08flowType\x12=\x0A\x0Ctrigger_type\x18\x02 \x01(\x0E2\x1A.zitadel.v1.v1.TriggerTypeR\x0BtriggerType\x12\x1D\x0A\x0Aaction_ids\x18\x03 \x03(\x09R\x09actionIds*L\x0A\x08FlowType\x12\x19\x0A\x15FLOW_TYPE_UNSPECIFIED\x10\x00\x12%\x0A!FLOW_TYPE_EXTERNAL_AUTHENTICATION\x10\x01*\x90\x01\x0A\x0BTriggerType\x12\x1C\x0A\x18TRIGGER_TYPE_UNSPECIFIED\x10\x00\x12\$\x0A TRIGGER_TYPE_POST_AUTHENTICATION\x10\x01\x12\x1D\x0A\x19TRIGGER_TYPE_PRE_CREATION\x10\x02\x12\x1E\x0A\x1ATRIGGER_TYPE_POST_CREATION\x10\x03B(Z&github.com/zitadel/zitadel/pkg/grpc/v1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

