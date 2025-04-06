<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/user.proto

namespace GPBMetadata\Zitadel\Resources\User\V3Alpha;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\Zitadel\Resources\Object\V3Alpha\Object_::initOnce();
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Authenticator::initOnce();
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Communication::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xE0\x0E\x0A)zitadel/resources/user/v3alpha/user.proto\x12\x1Ezitadel.resources.user.v3alpha\x1A\x1Cgoogle/protobuf/struct.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\x1A-zitadel/resources/object/v3alpha/object.proto\x1A2zitadel/resources/user/v3alpha/authenticator.proto\x1A2zitadel/resources/user/v3alpha/communication.proto\"\xAB\x03\x0A\x0ACreateUser\x12I\x0A\x09schema_id\x18\x01 \x01(\x09B,\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x08schemaId\x12]\x0A\x04data\x18\x02 \x01(\x0B2\x17.google.protobuf.StructB0\x92A-J+{\"name\":\"Gigi\",\"description\":\"the giraffe\"}R\x04data\x12D\x0A\x07contact\x18\x03 \x01(\x0B2*.zitadel.resources.user.v3alpha.SetContactR\x07contact\x12Y\x0A\x0Eauthenticators\x18\x04 \x01(\x0B21.zitadel.resources.user.v3alpha.SetAuthenticatorsR\x0Eauthenticators\x12F\x0A\x07user_id\x18\x05 \x01(\x09B(\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01H\x00R\x06userId\x88\x01\x01B\x0A\x0A\x08_user_id\"\xA9\x02\x0A\x09PatchUser\x12J\x0A\x09schema_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629026806489455\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01H\x00R\x08schemaId\x88\x01\x01\x12b\x0A\x04data\x18\x02 \x01(\x0B2\x17.google.protobuf.StructB0\x92A-J+{\"name\":\"Gigi\",\"description\":\"the giraffe\"}H\x01R\x04data\x88\x01\x01\x12I\x0A\x07contact\x18\x03 \x01(\x0B2*.zitadel.resources.user.v3alpha.SetContactH\x02R\x07contact\x88\x01\x01B\x0C\x0A\x0A_schema_idB\x07\x0A\x05_dataB\x0A\x0A\x08_contact\"\xC8\x03\x0A\x07GetUser\x12C\x0A\x07details\x18\x01 \x01(\x0B2).zitadel.resources.object.v3alpha.DetailsR\x07details\x12A\x0A\x06schema\x18\x02 \x01(\x0B2).zitadel.resources.user.v3alpha.GetSchemaR\x06schema\x12]\x0A\x04data\x18\x03 \x01(\x0B2\x17.google.protobuf.StructB0\x92A-J+{\"name\":\"Gigi\",\"description\":\"the giraffe\"}R\x04data\x12A\x0A\x07contact\x18\x04 \x01(\x0B2'.zitadel.resources.user.v3alpha.ContactR\x07contact\x12V\x0A\x0Eauthenticators\x18\x05 \x01(\x0B2..zitadel.resources.user.v3alpha.AuthenticatorsR\x0Eauthenticators\x12;\x0A\x05state\x18\x06 \x01(\x0E2%.zitadel.resources.user.v3alpha.StateR\x05state\"\x7F\x0A\x09GetSchema\x12(\x0A\x02id\x18\x01 \x01(\x09B\x18\x92A\x15J\x13\"69629026806489455\"R\x02id\x12\$\x0A\x04type\x18\x02 \x01(\x09B\x10\x92A\x0DJ\x0B\"employees\"R\x04type\x12\"\x0A\x08revision\x18\x03 \x01(\x0DB\x06\x92A\x03J\x017R\x08revision*\x82\x01\x0A\x05State\x12\x1A\x0A\x16USER_STATE_UNSPECIFIED\x10\x00\x12\x15\x0A\x11USER_STATE_ACTIVE\x10\x01\x12\x17\x0A\x13USER_STATE_INACTIVE\x10\x02\x12\x16\x0A\x12USER_STATE_DELETED\x10\x03\x12\x15\x0A\x11USER_STATE_LOCKED\x10\x04BAZ?github.com/zitadel/zitadel/pkg/grpc/resources/user/v3alpha;userb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

