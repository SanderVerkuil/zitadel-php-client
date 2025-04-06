<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/userschema/v3alpha/user_schema_service.proto

namespace GPBMetadata\Zitadel\Resources\Userschema\V3Alpha;

class UserSchemaService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\Zitadel\Object\V3Alpha\Object_::initOnce();
        \GPBMetadata\Zitadel\Resources\Object\V3Alpha\Object_::initOnce();
        \GPBMetadata\Zitadel\ProtocGenZitadel\V2\Options::initOnce();
        \GPBMetadata\Zitadel\Resources\Userschema\V3Alpha\UserSchema::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xFE0\x0A>zitadel/resources/userschema/v3alpha/user_schema_service.proto\x12\$zitadel.resources.userschema.v3alpha\x1A\x1Fgoogle/api/field_behavior.proto\x1A\x1Egoogle/protobuf/duration.proto\x1A\x1Cgoogle/protobuf/struct.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\x1A#zitadel/object/v3alpha/object.proto\x1A-zitadel/resources/object/v3alpha/object.proto\x1A+zitadel/protoc_gen_zitadel/v2/options.proto\x1A6zitadel/resources/userschema/v3alpha/user_schema.proto\"\xD3\x03\x0A\x18SearchUserSchemasRequest\x12o\x0A\x08instance\x18\x01 \x01(\x0B2 .zitadel.object.v3alpha.InstanceB,\x92A):'\"domain from HOST or :authority header\"H\x00R\x08instance\x88\x01\x01\x12H\x0A\x05query\x18\x02 \x01(\x0B2-.zitadel.resources.object.v3alpha.SearchQueryH\x01R\x05query\x88\x01\x01\x12\x83\x01\x0A\x0Esorting_column\x18\x03 \x01(\x0E2/.zitadel.resources.userschema.v3alpha.FieldNameB&\x92A#:!\"TARGET_FIELD_NAME_CREATION_DATE\"H\x02R\x0DsortingColumn\x88\x01\x01\x12L\x0A\x07filters\x18\x04 \x03(\x0B22.zitadel.resources.userschema.v3alpha.SearchFilterR\x07filtersB\x0B\x0A\x09_instanceB\x08\x0A\x06_queryB\x11\x0A\x0F_sorting_column\"\x89\x02\x0A\x19SearchUserSchemasResponse\x12G\x0A\x07details\x18\x01 \x01(\x0B2-.zitadel.resources.object.v3alpha.ListDetailsR\x07details\x12V\x0A\x0Esorting_column\x18\x02 \x01(\x0E2/.zitadel.resources.userschema.v3alpha.FieldNameR\x0DsortingColumn\x12K\x0A\x06result\x18\x03 \x03(\x0B23.zitadel.resources.userschema.v3alpha.GetUserSchemaR\x06result\"T\x0A\x14GetUserSchemaRequest\x12<\x0A\x02id\x18\x01 \x01(\x09B,\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x02id\"m\x0A\x15GetUserSchemaResponse\x12T\x0A\x0Buser_schema\x18\x02 \x01(\x0B23.zitadel.resources.userschema.v3alpha.GetUserSchemaR\x0AuserSchema\"\xEA\x01\x0A\x17CreateUserSchemaRequest\x12o\x0A\x08instance\x18\x01 \x01(\x0B2 .zitadel.object.v3alpha.InstanceB,\x92A):'\"domain from HOST or :authority header\"H\x00R\x08instance\x88\x01\x01\x12Q\x0A\x0Buser_schema\x18\x02 \x01(\x0B20.zitadel.resources.userschema.v3alpha.UserSchemaR\x0AuserSchemaB\x0B\x0A\x09_instance\"_\x0A\x18CreateUserSchemaResponse\x12C\x0A\x07details\x18\x02 \x01(\x0B2).zitadel.resources.object.v3alpha.DetailsR\x07details\"\xAC\x02\x0A\x16PatchUserSchemaRequest\x12o\x0A\x08instance\x18\x01 \x01(\x0B2 .zitadel.object.v3alpha.InstanceB,\x92A):'\"domain from HOST or :authority header\"H\x00R\x08instance\x88\x01\x01\x12<\x0A\x02id\x18\x02 \x01(\x09B,\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x02id\x12V\x0A\x0Buser_schema\x18\x03 \x01(\x0B25.zitadel.resources.userschema.v3alpha.PatchUserSchemaR\x0AuserSchemaB\x0B\x0A\x09_instance\"^\x0A\x17PatchUserSchemaResponse\x12C\x0A\x07details\x18\x01 \x01(\x0B2).zitadel.resources.object.v3alpha.DetailsR\x07details\"\xD9\x01\x0A\x1BDeactivateUserSchemaRequest\x12o\x0A\x08instance\x18\x02 \x01(\x0B2 .zitadel.object.v3alpha.InstanceB,\x92A):'\"domain from HOST or :authority header\"H\x00R\x08instance\x88\x01\x01\x12<\x0A\x02id\x18\x01 \x01(\x09B,\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x02idB\x0B\x0A\x09_instance\"c\x0A\x1CDeactivateUserSchemaResponse\x12C\x0A\x07details\x18\x01 \x01(\x0B2).zitadel.resources.object.v3alpha.DetailsR\x07details\"\xD9\x01\x0A\x1BReactivateUserSchemaRequest\x12o\x0A\x08instance\x18\x02 \x01(\x0B2 .zitadel.object.v3alpha.InstanceB,\x92A):'\"domain from HOST or :authority header\"H\x00R\x08instance\x88\x01\x01\x12<\x0A\x02id\x18\x01 \x01(\x09B,\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x02idB\x0B\x0A\x09_instance\"c\x0A\x1CReactivateUserSchemaResponse\x12C\x0A\x07details\x18\x01 \x01(\x0B2).zitadel.resources.object.v3alpha.DetailsR\x07details\"\xD5\x01\x0A\x17DeleteUserSchemaRequest\x12o\x0A\x08instance\x18\x02 \x01(\x0B2 .zitadel.object.v3alpha.InstanceB,\x92A):'\"domain from HOST or :authority header\"H\x00R\x08instance\x88\x01\x01\x12<\x0A\x02id\x18\x01 \x01(\x09B,\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x02idB\x0B\x0A\x09_instance\"_\x0A\x18DeleteUserSchemaResponse\x12C\x0A\x07details\x18\x01 \x01(\x0B2).zitadel.resources.object.v3alpha.DetailsR\x07details2\xFC\x0F\x0A\x12ZITADELUserSchemas\x12\xD7\x02\x0A\x11SearchUserSchemas\x12>.zitadel.resources.userschema.v3alpha.SearchUserSchemasRequest\x1A?.zitadel.resources.userschema.v3alpha.SearchUserSchemasResponse\"\xC0\x01\x92AnJ6\x0A\x03200\x12/\x0A-A list of all user schema matching the searchJ4\x0A\x03400\x12-\x0A\x0Einvalid search\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatus\x8A\xB5\x18\x13\x0A\x11\x0A\x0Fuserschema.read\x82\xD3\xE4\x93\x022\"'/resources/v3alpha/user_schemas/_search:\x07filters\x12\xF8\x01\x0A\x0DGetUserSchema\x12:.zitadel.resources.userschema.v3alpha.GetUserSchemaRequest\x1A;.zitadel.resources.userschema.v3alpha.GetUserSchemaResponse\"n\x92A(J&\x0A\x03200\x12\x1F\x0A\x1DSchema successfully retrieved\x8A\xB5\x18\x13\x0A\x11\x0A\x0Fuserschema.read\x82\xD3\xE4\x93\x02&\x12\$/resources/v3alpha/user_schemas/{id}\x12\xC1\x02\x0A\x10CreateUserSchema\x12=.zitadel.resources.userschema.v3alpha.CreateUserSchemaRequest\x1A>.zitadel.resources.userschema.v3alpha.CreateUserSchemaResponse\"\xAD\x01\x92AYJW\x0A\x03201\x12P\x0A\x1BSchema successfully created\x121\x0A/\x1A-#/definitions/v3alphaCreateUserSchemaResponse\x8A\xB5\x18\x19\x0A\x12\x0A\x10userschema.write\x12\x03\x08\xC9\x01\x82\xD3\xE4\x93\x02.\"\x1F/resources/v3alpha/user_schemas:\x0Buser_schema\x12\x8A\x02\x0A\x0FPatchUserSchema\x12<.zitadel.resources.userschema.v3alpha.PatchUserSchemaRequest\x1A=.zitadel.resources.userschema.v3alpha.PatchUserSchemaResponse\"z\x92A&J\$\x0A\x03200\x12\x1D\x0A\x1BSchema successfully updated\x8A\xB5\x18\x14\x0A\x12\x0A\x10userschema.write\x82\xD3\xE4\x93\x0232\$/resources/v3alpha/user_schemas/{id}:\x0Buser_schema\x12\x9C\x02\x0A\x14DeactivateUserSchema\x12A.zitadel.resources.userschema.v3alpha.DeactivateUserSchemaRequest\x1AB.zitadel.resources.userschema.v3alpha.DeactivateUserSchemaResponse\"}\x92A*J(\x0A\x03200\x12!\x0A\x1FSchema successfully deactivated\x8A\xB5\x18\x14\x0A\x12\x0A\x10userschema.write\x82\xD3\xE4\x93\x022\"0/resources/v3alpha/user_schemas/{id}/_deactivate\x12\x9C\x02\x0A\x14ReactivateUserSchema\x12A.zitadel.resources.userschema.v3alpha.ReactivateUserSchemaRequest\x1AB.zitadel.resources.userschema.v3alpha.ReactivateUserSchemaResponse\"}\x92A*J(\x0A\x03200\x12!\x0A\x1FSchema successfully reactivated\x8A\xB5\x18\x14\x0A\x12\x0A\x10userschema.write\x82\xD3\xE4\x93\x022\"0/resources/v3alpha/user_schemas/{id}/_reactivate\x12\x81\x02\x0A\x10DeleteUserSchema\x12=.zitadel.resources.userschema.v3alpha.DeleteUserSchemaRequest\x1A>.zitadel.resources.userschema.v3alpha.DeleteUserSchemaResponse\"n\x92A&J\$\x0A\x03200\x12\x1D\x0A\x1BSchema successfully deleted\x8A\xB5\x18\x15\x0A\x13\x0A\x11userschema.delete\x82\xD3\xE4\x93\x02&*\$/resources/v3alpha/user_schemas/{id}B\xEE\x08ZKgithub.com/zitadel/zitadel/pkg/grpc/resources/userschema/v3alpha;userschema\x92A\x9D\x08\x12\xFB\x02\x0A\x13User Schema Service\x12\xE2\x01This API is intended to manage data schemas for users in a ZITADEL instance. This project is in preview state. It can AND will continue breaking until the service provides the same functionality as the v1 and v2 user services.\".\x0A\x07ZITADEL\x12\x13https://zitadel.com\x1A\x0Ehi@zitadel.com*B\x0A\x0AApache 2.0\x124https://github.com/zitadel/zitadel/blob/main/LICENSE2\x0B3.0-preview\x1A\x0E\$CUSTOM-DOMAIN\"\x01/*\x02\x02\x012\x10application/json2\x10application/grpc2\x1Aapplication/grpc-web+proto:\x10application/json:\x10application/grpc:\x1Aapplication/grpc-web+protoRm\x0A\x03403\x12f\x0AGReturned when the user does not have permission to access the resource.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusRP\x0A\x03404\x12I\x0A*Returned when the resource does not exist.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusZ\xC2\x01\x0A\xBF\x01\x0A\x06OAuth2\x12\xB4\x01\x08\x03(\x042!\$CUSTOM-DOMAIN/oauth/v2/authorize:\x1D\$CUSTOM-DOMAIN/oauth/v2/tokenBl\x0A\x10\x0A\x06openid\x12\x06openid\x0AX\x0A*urn:zitadel:iam:org:project:id:zitadel:aud\x12*urn:zitadel:iam:org:project:id:zitadel:audb@\x0A>\x0A\x06OAuth2\x124\x0A\x06openid\x0A*urn:zitadel:iam:org:project:id:zitadel:audr>\x0A\"Detailed information about ZITADEL\x12\x18https://zitadel.com/docsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

