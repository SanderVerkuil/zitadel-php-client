<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/oidc/v2beta/oidc_service.proto

namespace GPBMetadata\Zitadel\Oidc\V2Beta;

class OidcService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object\V2Beta\Object::initOnce();
        \GPBMetadata\Zitadel\ProtocGenZitadel\V2\Options::initOnce();
        \GPBMetadata\Zitadel\Oidc\V2Beta\Authorization::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x94\x1F\x0A&zitadel/oidc/v2beta/oidc_service.proto\x12\x13zitadel.oidc.v2beta\x1A+zitadel/protoc_gen_zitadel/v2/options.proto\x1A'zitadel/oidc/v2beta/authorization.proto\x1A\x1Cgoogle/api/annotations.proto\x1A\x1Fgoogle/api/field_behavior.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\"\xA7\x01\x0A\x15GetAuthRequestRequest\x12\x8D\x01\x0A\x0Fauth_request_id\x18\x01 \x01(\x09Be\x92AX2:ID of the Auth Request, as obtained from the redirect URL.J\x14\"163840776835432705\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0DauthRequestId\"]\x0A\x16GetAuthRequestResponse\x12C\x0A\x0Cauth_request\x18\x01 \x01(\x0B2 .zitadel.oidc.v2beta.AuthRequestR\x0BauthRequest\"\xE8\x04\x0A\x15CreateCallbackRequest\x12\xF6\x01\x0A\x0Fauth_request_id\x18\x01 \x01(\x09B\xCD\x01\x92A\xBF\x01\x1A?https://openid.net/specs/openid-connect-core-1_0.html#AuthError2|Set this field when the authorization flow failed. It creates a callback URL to the application, with the error details set.\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0DauthRequestId\x128\x0A\x07session\x18\x02 \x01(\x0B2\x1C.zitadel.oidc.v2beta.SessionH\x00R\x07session\x12\x85\x02\x0A\x05error\x18\x03 \x01(\x0B2'.zitadel.oidc.v2beta.AuthorizationErrorB\xC3\x01\x92A\xBF\x01\x1A?https://openid.net/specs/openid-connect-core-1_0.html#AuthError2|Set this field when the authorization flow failed. It creates a callback URL to the application, with the error details set.H\x00R\x05errorB\x14\x0A\x0Dcallback_kind\x12\x03\xF8B\x01\"\x8A\x02\x0A\x07Session\x12\x9E\x01\x0A\x0Asession_id\x18\x01 \x01(\x09B\x7F\x92Ar2TID of the session, used to login the user. Connects the session to the Auth Request.J\x14\"163840776835432705\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x09sessionId\x12^\x0A\x0Dsession_token\x18\x02 \x01(\x09B9\x92A,2\$Token to verify the session is validx\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0CsessionToken\"\xFF\x03\x0A\x16CreateCallbackResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2beta.DetailsR\x07details\x12\xAA\x03\x0A\x0Ccallback_url\x18\x02 \x01(\x09B\x86\x03\x92A\x82\x032\xB0\x02Callback URL where the user should be redirected, using a \"302 FOUND\" status. Contains details for the application to obtain the tokens on success, or error details on failure. Note that this field must be treated as credentials, as the contained code can be used to obtain tokens on behalve of the user.JM\"https://client.example.org/cb?code=SplxlOBeZQQYbYS6WxSbIA&state=af0ifjsldkj\"R\x0BcallbackUrl2\xBD\x07\x0A\x0BOIDCService\x12\xF1\x02\x0A\x0EGetAuthRequest\x12*.zitadel.oidc.v2beta.GetAuthRequestRequest\x1A+.zitadel.oidc.v2beta.GetAuthRequestResponse\"\x85\x02\x92A\xB8\x01\x12\x1DGet OIDC Auth Request details\x1A\x89\x01Get OIDC Auth Request details by ID, obtained from the redirect URL. Returns details that are parsed from the application's Auth Request.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x11\x0A\x0F\x0A\x0Dauthenticated\x82\xD3\xE4\x93\x02.\x12,/v2beta/oidc/auth_requests/{auth_request_id}\x12\xB9\x04\x0A\x0ECreateCallback\x12*.zitadel.oidc.v2beta.CreateCallbackRequest\x1A+.zitadel.oidc.v2beta.CreateCallbackResponse\"\xCD\x03\x92A\xFD\x02\x122Finalize an Auth Request and get the callback URL.\x1A\xB9\x02Finalize an Auth Request and get the callback URL for success or failure. The user must be redirected to the URL in order to inform the application about the success or failure. On success, the URL contains details for the application to obtain the tokens. This method can only be called once for an Auth request.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x11\x0A\x0F\x0A\x0Dauthenticated\x82\xD3\xE4\x93\x021\",/v2beta/oidc/auth_requests/{auth_request_id}:\x01*B\xAB\x08Z4github.com/zitadel/zitadel/pkg/grpc/oidc/v2beta;oidc\x92A\xF1\x07\x12\xCF\x02\x0A\x0COIDC Service\x12\xC0\x01Get OIDC Auth Request details and create callback URLs. This project is in beta state. It can AND will continue breaking until the services provide the same functionality as the current login.\".\x0A\x07ZITADEL\x12\x13https://zitadel.com\x1A\x0Ehi@zitadel.com*B\x0A\x0AApache 2.0\x124https://github.com/zitadel/zitadel/blob/main/LICENSE2\x082.0-beta\x1A\x0E\$CUSTOM-DOMAIN\"\x01/*\x02\x02\x012\x10application/json2\x10application/grpc2\x1Aapplication/grpc-web+proto:\x10application/json:\x10application/grpc:\x1Aapplication/grpc-web+protoRm\x0A\x03403\x12f\x0AGReturned when the user does not have permission to access the resource.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusRP\x0A\x03404\x12I\x0A*Returned when the resource does not exist.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusZ\xC2\x01\x0A\xBF\x01\x0A\x06OAuth2\x12\xB4\x01\x08\x03(\x042!\$CUSTOM-DOMAIN/oauth/v2/authorize:\x1D\$CUSTOM-DOMAIN/oauth/v2/tokenBl\x0A\x10\x0A\x06openid\x12\x06openid\x0AX\x0A*urn:zitadel:iam:org:project:id:zitadel:aud\x12*urn:zitadel:iam:org:project:id:zitadel:audb@\x0A>\x0A\x06OAuth2\x124\x0A\x06openid\x0A*urn:zitadel:iam:org:project:id:zitadel:audr>\x0A\"Detailed information about ZITADEL\x12\x18https://zitadel.com/docsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

