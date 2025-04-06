<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2beta/user.proto

namespace GPBMetadata\Zitadel\Feature\V2Beta;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\Zitadel\Object\V2Beta\Object_::initOnce();
        \GPBMetadata\Zitadel\Feature\V2Beta\Feature::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xFB\x08\x0A!zitadel/feature/v2beta/user.proto\x12\x16zitadel.feature.v2beta\x1A\x17validate/validate.proto\x1A\"zitadel/object/v2beta/object.proto\x1A\$zitadel/feature/v2beta/feature.proto\"Z\x0A\x15SetUserFeatureRequest\x12A\x0A\x07user_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x06userId\"S\x0A\x17SetUserFeaturesResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2beta.DetailsR\x07details\"]\x0A\x18ResetUserFeaturesRequest\x12A\x0A\x07user_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x06userId\"U\x0A\x19ResetUserFeaturesResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2beta.DetailsR\x07details\"\xD8\x03\x0A\x16GetUserFeaturesRequest\x12A\x0A\x07user_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x06userId\x12\xFA\x02\x0A\x0Binheritance\x18\x02 \x01(\x08B\xD7\x02\x92A\xD3\x022\xCA\x02Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the user, it will be ommitted from the response or Not Found is returned when the user has no features flags at all.J\x04trueR\x0Binheritance\"S\x0A\x17GetUserFeaturesResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2beta.DetailsR\x07detailsB<Z:github.com/zitadel/zitadel/pkg/grpc/feature/v2beta;featureb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

