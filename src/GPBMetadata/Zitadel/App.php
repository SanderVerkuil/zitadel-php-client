<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/app.proto

namespace GPBMetadata\Zitadel;

class App
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object::initOnce();
        \GPBMetadata\Zitadel\Message::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xCE-\x0A\x11zitadel/app.proto\x12\x0Ezitadel.app.v1\x1A\x15zitadel/message.proto\x1A\x1Egoogle/protobuf/duration.proto\x1A\x17validate/validate.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xA3\x03\x0A\x03App\x12(\x0A\x02id\x18\x01 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x02id\x123\x0A\x07details\x18\x02 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12U\x0A\x05state\x18\x03 \x01(\x0E2\x18.zitadel.app.v1.AppStateB%\x92A\"2 current state of the applicationR\x05state\x12\"\x0A\x04name\x18\x04 \x01(\x09B\x0E\x92A\x0BJ\x09\"Console\"R\x04name\x12=\x0A\x0Boidc_config\x18\x05 \x01(\x0B2\x1A.zitadel.app.v1.OIDCConfigH\x00R\x0AoidcConfig\x12:\x0A\x0Aapi_config\x18\x06 \x01(\x0B2\x19.zitadel.app.v1.APIConfigH\x00R\x09apiConfig\x12=\x0A\x0Bsaml_config\x18\x07 \x01(\x0B2\x1A.zitadel.app.v1.SAMLConfigH\x00R\x0AsamlConfigB\x08\x0A\x06config\"W\x0A\x08AppQuery\x12=\x0A\x0Aname_query\x18\x01 \x01(\x0B2\x1C.zitadel.app.v1.AppNameQueryH\x00R\x09nameQueryB\x0C\x0A\x05query\x12\x03\xF8B\x01\"\xA6\x01\x0A\x0CAppNameQuery\x12(\x0A\x04name\x18\x01 \x01(\x09B\x14\x92A\x09J\x07\"Conso\"\xFAB\x05r\x03\x18\xC8\x01R\x04name\x12l\x0A\x06method\x18\x02 \x01(\x0E2\x1B.zitadel.v1.TextQueryMethodB7\x92A,2*defines which text equality method is used\xFAB\x05\x82\x01\x02\x10\x01R\x06method\"\xE1\x19\x0A\x0AOIDCConfig\x12\xAC\x01\x0A\x0Dredirect_uris\x18\x01 \x03(\x09B\x86\x01\x92A\x82\x012RCallback URI of the authorization request where the code or tokens will be sent toJ,[\"https://console.zitadel.ch/auth/callback\"]R\x0CredirectUris\x12\x99\x01\x0A\x0Eresponse_types\x18\x02 \x03(\x0E2 .zitadel.app.v1.OIDCResponseTypeBP\x92AM2KDetermines whether a code, id_token token or just id_token will be returnedR\x0DresponseTypes\x12v\x0A\x0Bgrant_types\x18\x03 \x03(\x0E2\x1D.zitadel.app.v1.OIDCGrantTypeB6\x92A321The flow type the application uses to gain accessR\x0AgrantTypes\x12g\x0A\x08app_type\x18\x04 \x01(\x0E2\x1B.zitadel.app.v1.OIDCAppTypeB/\x92A,2*determines the paradigm of the applicationR\x07appType\x12^\x0A\x09client_id\x18\x05 \x01(\x09BA\x92A>2\x1Fgenerated oauth2/oidc client idJ\x1B\"69629023906488334@ZITADEL\"R\x08clientId\x12\x87\x01\x0A\x10auth_method_type\x18\x07 \x01(\x0E2\".zitadel.app.v1.OIDCAuthMethodTypeB9\x92A624defines how the application passes login credentialsR\x0EauthMethodType\x12\xA3\x01\x0A\x19post_logout_redirect_uris\x18\x08 \x03(\x09Bh\x92Ae2<ZITADEL will redirect to this link after a successful logoutJ%[\"https://console.zitadel.ch/logout\"]R\x16postLogoutRedirectUris\x12d\x0A\x07version\x18\x09 \x01(\x0E2\x1B.zitadel.app.v1.OIDCVersionB-\x92A*2(the OIDC version used by the applicationR\x07version\x12\x8A\x01\x0A\x0Enone_compliant\x18\x0A \x01(\x08Bc\x92A`2^specifies whether the config is OIDC compliant. A production configuration SHOULD be compliantR\x0DnoneCompliant\x12y\x0A\x13compliance_problems\x18\x0B \x03(\x0B2\x1C.zitadel.v1.LocalizedMessageB*\x92A'2%lists the problems for non-compliancyR\x12complianceProblems\x124\x0A\x08dev_mode\x18\x0C \x01(\x08B\x19\x92A\x162\x14used for developmentR\x07devMode\x12~\x0A\x11access_token_type\x18\x0D \x01(\x0E2\x1D.zitadel.app.v1.OIDCTokenTypeB3\x92A02.type of the access token returned from ZITADELR\x0FaccessTokenType\x12\xAF\x01\x0A\x1Baccess_token_role_assertion\x18\x0E \x01(\x08Bp\x92Am2kadds roles to the claims of the access token (only if type == JWT) even if they are not requested by scopesR\x18accessTokenRoleAssertion\x12\x8D\x01\x0A\x17id_token_role_assertion\x18\x0F \x01(\x08BV\x92AS2Qadds roles to the claims of the id token even if they are not requested by scopesR\x14idTokenRoleAssertion\x12\xE5\x01\x0A\x1Bid_token_userinfo_assertion\x18\x10 \x01(\x08B\xA5\x01\x92A\xA1\x012\x9E\x01claims of profile, email, address and phone scopes are added to the id token even if an access token is issued. Attention this violates the OIDC specificationR\x18idTokenUserinfoAssertion\x12\xCA\x01\x0A\x0Aclock_skew\x18\x11 \x01(\x0B2\x19.google.protobuf.DurationB\x8F\x01\x92A\x8B\x012\x88\x01Used to compensate time difference of servers. Duration added to the \"exp\" claim and subtracted from \"iat\", \"auth_time\" and \"nbf\" claimsR\x09clockSkew\x12\xB4\x01\x0A\x12additional_origins\x18\x12 \x03(\x09B\x84\x01\x92A\x80\x012Padditional origins (other than the redirect_uris) from where the API can be usedJ,[\"https://console.zitadel.ch/auth/callback\"]R\x11additionalOrigins\x12\x8E\x01\x0A\x0Fallowed_origins\x18\x13 \x03(\x09Be\x92Ab22all allowed origins from where the API can be usedJ,[\"https://console.zitadel.ch/auth/callback\"]R\x0EallowedOrigins\x12\xA2\x01\x0A\x1Cskip_native_app_success_page\x18\x14 \x01(\x08Bb\x92A_2]Skip the successful login page on native apps and directly redirect the user to the callback.R\x18skipNativeAppSuccessPage\x12\x9E\x02\x0A\x17back_channel_logout_uri\x18\x15 \x01(\x09B\xE6\x01\x92A\xE2\x012\xB5\x01ZITADEL will use this URI to notify the application about terminated session according to the OIDC Back-Channel Logout (https://openid.net/specs/openid-connect-backchannel-1_0.html)J([\"https://example.com/auth/backchannel\"]R\x14backChannelLogoutUri\x12\xD8\x01\x0A\x0Dlogin_version\x18\x16 \x01(\x0B2\x1C.zitadel.app.v1.LoginVersionB\x94\x01\x92A\x90\x012\x8D\x01Specify the preferred login UI, where the user is redirected to for authentication. If unset, the login UI is chosen by the instance default.R\x0CloginVersionJ\x04\x08\x06\x10\x07R\x0Dclient_secret\"\xBD\x02\x0A\x0ASAMLConfig\x12#\x0A\x0Cmetadata_xml\x18\x01 \x01(\x0CH\x00R\x0BmetadataXml\x12#\x0A\x0Cmetadata_url\x18\x02 \x01(\x09H\x00R\x0BmetadataUrl\x12\xD8\x01\x0A\x0Dlogin_version\x18\x03 \x01(\x0B2\x1C.zitadel.app.v1.LoginVersionB\x94\x01\x92A\x90\x012\x8D\x01Specify the preferred login UI, where the user is redirected to for authentication. If unset, the login UI is chosen by the instance default.R\x0CloginVersionB\x0A\x0A\x08metadata\"\x85\x02\x0A\x09APIConfig\x12^\x0A\x09client_id\x18\x01 \x01(\x09BA\x92A>2\x1Fgenerated oauth2/oidc client_idJ\x1B\"69629023906488334@ZITADEL\"R\x08clientId\x12\x82\x01\x0A\x10auth_method_type\x18\x03 \x01(\x0E2!.zitadel.app.v1.APIAuthMethodTypeB5\x92A220defines how the API passes the login credentialsR\x0EauthMethodTypeJ\x04\x08\x02\x10\x03R\x0Dclient_secret\"\x85\x01\x0A\x0CLoginVersion\x124\x0A\x08login_v1\x18\x01 \x01(\x0B2\x17.zitadel.app.v1.LoginV1H\x00R\x07loginV1\x124\x0A\x08login_v2\x18\x02 \x01(\x0B2\x17.zitadel.app.v1.LoginV2H\x00R\x07loginV2B\x09\x0A\x07version\"\x09\x0A\x07LoginV1\"6\x0A\x07LoginV2\x12\x1E\x0A\x08base_uri\x18\x01 \x01(\x09H\x00R\x07baseUri\x88\x01\x01B\x0B\x0A\x09_base_uri*S\x0A\x08AppState\x12\x19\x0A\x15APP_STATE_UNSPECIFIED\x10\x00\x12\x14\x0A\x10APP_STATE_ACTIVE\x10\x01\x12\x16\x0A\x12APP_STATE_INACTIVE\x10\x02*w\x0A\x10OIDCResponseType\x12\x1B\x0A\x17OIDC_RESPONSE_TYPE_CODE\x10\x00\x12\x1F\x0A\x1BOIDC_RESPONSE_TYPE_ID_TOKEN\x10\x01\x12%\x0A!OIDC_RESPONSE_TYPE_ID_TOKEN_TOKEN\x10\x02*\xBD\x01\x0A\x0DOIDCGrantType\x12&\x0A\"OIDC_GRANT_TYPE_AUTHORIZATION_CODE\x10\x00\x12\x1C\x0A\x18OIDC_GRANT_TYPE_IMPLICIT\x10\x01\x12!\x0A\x1DOIDC_GRANT_TYPE_REFRESH_TOKEN\x10\x02\x12\x1F\x0A\x1BOIDC_GRANT_TYPE_DEVICE_CODE\x10\x03\x12\"\x0A\x1EOIDC_GRANT_TYPE_TOKEN_EXCHANGE\x10\x04*\\\x0A\x0BOIDCAppType\x12\x15\x0A\x11OIDC_APP_TYPE_WEB\x10\x00\x12\x1C\x0A\x18OIDC_APP_TYPE_USER_AGENT\x10\x01\x12\x18\x0A\x14OIDC_APP_TYPE_NATIVE\x10\x02*\xA0\x01\x0A\x12OIDCAuthMethodType\x12\x1F\x0A\x1BOIDC_AUTH_METHOD_TYPE_BASIC\x10\x00\x12\x1E\x0A\x1AOIDC_AUTH_METHOD_TYPE_POST\x10\x01\x12\x1E\x0A\x1AOIDC_AUTH_METHOD_TYPE_NONE\x10\x02\x12)\x0A%OIDC_AUTH_METHOD_TYPE_PRIVATE_KEY_JWT\x10\x03*#\x0A\x0BOIDCVersion\x12\x14\x0A\x10OIDC_VERSION_1_0\x10\x00*D\x0A\x0DOIDCTokenType\x12\x1A\x0A\x16OIDC_TOKEN_TYPE_BEARER\x10\x00\x12\x17\x0A\x13OIDC_TOKEN_TYPE_JWT\x10\x01*]\x0A\x11APIAuthMethodType\x12\x1E\x0A\x1AAPI_AUTH_METHOD_TYPE_BASIC\x10\x00\x12(\x0A\$API_AUTH_METHOD_TYPE_PRIVATE_KEY_JWT\x10\x01B)Z'github.com/zitadel/zitadel/pkg/grpc/appb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

