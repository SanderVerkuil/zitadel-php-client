<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/org/v2/org_service.proto

namespace GPBMetadata\Zitadel\Org\V2;

class OrgService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object\V2\Object::initOnce();
        \GPBMetadata\Zitadel\ProtocGenZitadel\V2\Options::initOnce();
        \GPBMetadata\Zitadel\User\V2\Auth::initOnce();
        \GPBMetadata\Zitadel\User\V2\Email::initOnce();
        \GPBMetadata\Zitadel\User\V2\Phone::initOnce();
        \GPBMetadata\Zitadel\User\V2\Idp::initOnce();
        \GPBMetadata\Zitadel\User\V2\Password::initOnce();
        \GPBMetadata\Zitadel\User\V2\User::initOnce();
        \GPBMetadata\Zitadel\User\V2\UserService::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\Zitadel\Org\V2\Org::initOnce();
        \GPBMetadata\Zitadel\Org\V2\Query::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xF9\x17\x0A zitadel/org/v2/org_service.proto\x12\x0Ezitadel.org.v2\x1A+zitadel/protoc_gen_zitadel/v2/options.proto\x1A\x1Azitadel/user/v2/auth.proto\x1A\x1Bzitadel/user/v2/email.proto\x1A\x1Bzitadel/user/v2/phone.proto\x1A\x19zitadel/user/v2/idp.proto\x1A\x1Ezitadel/user/v2/password.proto\x1A\x1Azitadel/user/v2/user.proto\x1A\"zitadel/user/v2/user_service.proto\x1A\x1Cgoogle/api/annotations.proto\x1A\x1Fgoogle/api/field_behavior.proto\x1A\x1Egoogle/protobuf/duration.proto\x1A\x1Cgoogle/protobuf/struct.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\x1A\x18zitadel/org/v2/org.proto\x1A\x1Azitadel/org/v2/query.proto\"\x9C\x02\x0A\x16AddOrganizationRequest\x126\x0A\x04name\x18\x01 \x01(\x09B\"\x92A\x11J\x09\"ZITADEL\"x\xC8\x01\x80\x01\x01\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x04name\x12D\x0A\x06admins\x18\x02 \x03(\x0B2,.zitadel.org.v2.AddOrganizationRequest.AdminR\x06admins\x1A\x83\x01\x0A\x05Admin\x12\x19\x0A\x07user_id\x18\x01 \x01(\x09H\x00R\x06userId\x12<\x0A\x05human\x18\x02 \x01(\x0B2\$.zitadel.user.v2.AddHumanUserRequestH\x00R\x05human\x12\x14\x0A\x05roles\x18\x03 \x03(\x09R\x05rolesB\x0B\x0A\x09user_type\"\xE5\x02\x0A\x17AddOrganizationResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\x12'\x0A\x0Forganization_id\x18\x02 \x01(\x09R\x0EorganizationId\x12[\x0A\x0Ecreated_admins\x18\x03 \x03(\x0B24.zitadel.org.v2.AddOrganizationResponse.CreatedAdminR\x0DcreatedAdmins\x1A\x8D\x01\x0A\x0CCreatedAdmin\x12\x17\x0A\x07user_id\x18\x01 \x01(\x09R\x06userId\x12\"\x0A\x0Aemail_code\x18\x02 \x01(\x09H\x00R\x09emailCode\x88\x01\x01\x12\"\x0A\x0Aphone_code\x18\x03 \x01(\x09H\x01R\x09phoneCode\x88\x01\x01B\x0D\x0A\x0B_email_codeB\x0D\x0A\x0B_phone_code\"\xD3\x01\x0A\x18ListOrganizationsRequest\x122\x0A\x05query\x18\x01 \x01(\x0B2\x1C.zitadel.object.v2.ListQueryR\x05query\x12L\x0A\x0Esorting_column\x18\x02 \x01(\x0E2%.zitadel.org.v2.OrganizationFieldNameR\x0DsortingColumn\x125\x0A\x07queries\x18\x03 \x03(\x0B2\x1B.zitadel.org.v2.SearchQueryR\x07queries\"\xD9\x01\x0A\x19ListOrganizationsResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2.ListDetailsR\x07details\x12L\x0A\x0Esorting_column\x18\x02 \x01(\x0E2%.zitadel.org.v2.OrganizationFieldNameR\x0DsortingColumn\x124\x0A\x06result\x18\x03 \x03(\x0B2\x1C.zitadel.org.v2.OrganizationR\x06result2\xDC\x03\x0A\x13OrganizationService\x12\xA7\x01\x0A\x0FAddOrganization\x12&.zitadel.org.v2.AddOrganizationRequest\x1A'.zitadel.org.v2.AddOrganizationResponse\"C\x92A\x0DJ\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x13\x0A\x0C\x0A\x0Aorg.create\x12\x03\x08\xC9\x01\x82\xD3\xE4\x93\x02\x16\"\x11/v2/organizations:\x01*\x12\x9A\x02\x0A\x11ListOrganizations\x12(.zitadel.org.v2.ListOrganizationsRequest\x1A).zitadel.org.v2.ListOrganizationsResponse\"\xAF\x01\x92AsJ7\x0A\x03200\x120\x0A.A list of all organizations matching the queryJ8\x0A\x03400\x121\x0A\x12invalid list query\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatus\x8A\xB5\x18\x11\x0A\x0F\x0A\x0Dauthenticated\x82\xD3\xE4\x93\x02\x1E\"\x19/v2/organizations/_search:\x01*B\xAA\x07Z.github.com/zitadel/zitadel/pkg/grpc/org/v2;org\x92A\xF6\x06\x12\xD4\x01\x0A\x14Organization Service\x12CThis API is intended to manage organizations in a ZITADEL instance.\".\x0A\x07ZITADEL\x12\x13https://zitadel.com\x1A\x0Ehi@zitadel.com*B\x0A\x0AApache 2.0\x124https://github.com/zitadel/zitadel/blob/main/LICENSE2\x032.0\x1A\x0E\$CUSTOM-DOMAIN\"\x01/*\x02\x02\x012\x10application/json2\x10application/grpc2\x1Aapplication/grpc-web+proto:\x10application/json:\x10application/grpc:\x1Aapplication/grpc-web+protoRm\x0A\x03403\x12f\x0AGReturned when the user does not have permission to access the resource.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusRP\x0A\x03404\x12I\x0A*Returned when the resource does not exist.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusZ\xC2\x01\x0A\xBF\x01\x0A\x06OAuth2\x12\xB4\x01\x08\x03(\x042!\$CUSTOM-DOMAIN/oauth/v2/authorize:\x1D\$CUSTOM-DOMAIN/oauth/v2/tokenBl\x0A\x10\x0A\x06openid\x12\x06openid\x0AX\x0A*urn:zitadel:iam:org:project:id:zitadel:aud\x12*urn:zitadel:iam:org:project:id:zitadel:audb@\x0A>\x0A\x06OAuth2\x124\x0A\x06openid\x0A*urn:zitadel:iam:org:project:id:zitadel:audr>\x0A\"Detailed information about ZITADEL\x12\x18https://zitadel.com/docsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

