<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/oidc/v2/authorization.proto

namespace GPBMetadata\Zitadel\Oidc\V2;

class Authorization
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        
        $pool->internalAddGeneratedFile(
            "\x0A\x94\x18\x0A#zitadel/oidc/v2/authorization.proto\x12\x0Fzitadel.oidc.v2\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xD2\x0D\x0A\x0BAuthRequest\x124\x0A\x02id\x18\x01 \x01(\x09B\$\x92A!2\x1FID of the authorization requestR\x02id\x12l\x0A\x0Dcreation_date\x18\x02 \x01(\x0B2\x1A.google.protobuf.TimestampB+\x92A(2&Time when the auth request was createdR\x0CcreationDate\x12a\x0A\x09client_id\x18\x03 \x01(\x09BD\x92AA2?OIDC client ID of the application that created the auth requestR\x08clientId\x12_\x0A\x05scope\x18\x04 \x03(\x09BI\x92AF2DRequested scopes by the application, which the user must consent to.R\x05scope\x12T\x0A\x0Credirect_uri\x18\x05 \x01(\x09B1\x92A.2,Base URI that points back to the applicationR\x0BredirectUri\x12`\x0A\x06prompt\x18\x06 \x03(\x0E2\x17.zitadel.oidc.v2.PromptB/\x92A,2*Prompts that must be displayed to the userR\x06prompt\x12\xD4\x03\x0A\x0Aui_locales\x18\x07 \x03(\x09B\xB4\x03\x92A\xB0\x032\xAD\x03End-User's preferred languages and scripts for the user interface, represented as a list of BCP47 [RFC5646] language tag values, ordered by preference. For instance, the value [fr-CA, fr, en] represents a preference for French as spoken in Canada, then French (without a region designation), followed by English (without a region designation). An error SHOULD NOT result if some or all of the requested locales are not supported.R\x09uiLocales\x12\x8A\x01\x0A\x0Alogin_hint\x18\x08 \x01(\x09Bf\x92Ac2aLogin hint can be set by the application with a user identifier such as an email or phone number.H\x00R\x09loginHint\x88\x01\x01\x12\xA9\x02\x0A\x07max_age\x18\x09 \x01(\x0B2\x19.google.protobuf.DurationB\xEF\x01\x92A\xEB\x012\xE8\x01Specifies the allowable elapsed time in seconds since the last time the End-User was actively authenticated. If the elapsed time is greater than this value, or the field is present with 0 duration, the user must be re-authenticated.H\x01R\x06maxAge\x88\x01\x01\x12k\x0A\x0Chint_user_id\x18\x0A \x01(\x09BD\x92AA2?User ID taken from a ID Token Hint if it was present and valid.H\x02R\x0AhintUserId\x88\x01\x01:z\x92Aw*u\x0A0Find out more about OIDC Auth Request parameters\x12Ahttps://openid.net/specs/openid-connect-core-1_0.html#AuthRequestB\x0D\x0A\x0B_login_hintB\x0A\x0A\x08_max_ageB\x0F\x0A\x0D_hint_user_id\"\xC0\x01\x0A\x12AuthorizationError\x122\x0A\x05error\x18\x01 \x01(\x0E2\x1C.zitadel.oidc.v2.ErrorReasonR\x05error\x120\x0A\x11error_description\x18\x02 \x01(\x09H\x00R\x10errorDescription\x88\x01\x01\x12 \x0A\x09error_uri\x18\x03 \x01(\x09H\x01R\x08errorUri\x88\x01\x01B\x14\x0A\x12_error_descriptionB\x0C\x0A\x0A_error_uri\"\x9D\x01\x0A\x1ADeviceAuthorizationRequest\x12\x0E\x0A\x02id\x18\x01 \x01(\x09R\x02id\x12\x1B\x0A\x09client_id\x18\x02 \x01(\x09R\x08clientId\x12\x14\x0A\x05scope\x18\x03 \x03(\x09R\x05scope\x12\x19\x0A\x08app_name\x18\x04 \x01(\x09R\x07appName\x12!\x0A\x0Cproject_name\x18\x05 \x01(\x09R\x0BprojectName*\x85\x01\x0A\x06Prompt\x12\x16\x0A\x12PROMPT_UNSPECIFIED\x10\x00\x12\x0F\x0A\x0BPROMPT_NONE\x10\x01\x12\x10\x0A\x0CPROMPT_LOGIN\x10\x02\x12\x12\x0A\x0EPROMPT_CONSENT\x10\x03\x12\x19\x0A\x15PROMPT_SELECT_ACCOUNT\x10\x04\x12\x11\x0A\x0DPROMPT_CREATE\x10\x05*\x8E\x05\x0A\x0BErrorReason\x12\x1C\x0A\x18ERROR_REASON_UNSPECIFIED\x10\x00\x12 \x0A\x1CERROR_REASON_INVALID_REQUEST\x10\x01\x12\$\x0A ERROR_REASON_UNAUTHORIZED_CLIENT\x10\x02\x12\x1E\x0A\x1AERROR_REASON_ACCESS_DENIED\x10\x03\x12*\x0A&ERROR_REASON_UNSUPPORTED_RESPONSE_TYPE\x10\x04\x12\x1E\x0A\x1AERROR_REASON_INVALID_SCOPE\x10\x05\x12\x1D\x0A\x19ERROR_REASON_SERVER_ERROR\x10\x06\x12&\x0A\"ERROR_REASON_TEMPORARY_UNAVAILABLE\x10\x07\x12%\x0A!ERROR_REASON_INTERACTION_REQUIRED\x10\x08\x12\x1F\x0A\x1BERROR_REASON_LOGIN_REQUIRED\x10\x09\x12+\x0A'ERROR_REASON_ACCOUNT_SELECTION_REQUIRED\x10\x0A\x12!\x0A\x1DERROR_REASON_CONSENT_REQUIRED\x10\x0B\x12\$\x0A ERROR_REASON_INVALID_REQUEST_URI\x10\x0C\x12'\x0A#ERROR_REASON_INVALID_REQUEST_OBJECT\x10\x0D\x12&\x0A\"ERROR_REASON_REQUEST_NOT_SUPPORTED\x10\x0E\x12*\x0A&ERROR_REASON_REQUEST_URI_NOT_SUPPORTED\x10\x0F\x12+\x0A'ERROR_REASON_REGISTRATION_NOT_SUPPORTED\x10\x10B2Z0github.com/zitadel/zitadel/pkg/grpc/oidc/v2;oidcb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

