<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2beta/organization.proto

namespace GPBMetadata\Zitadel\Feature\V2Beta;

class Organization
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\Zitadel\Object\V2Beta\Object_::initOnce();
        \GPBMetadata\Zitadel\Feature\V2Beta\Feature::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xF3\x09\x0A)zitadel/feature/v2beta/organization.proto\x12\x16zitadel.feature.v2beta\x1A\x17validate/validate.proto\x1A\"zitadel/object/v2beta/object.proto\x1A\$zitadel/feature/v2beta/feature.proto\"s\x0A\x1ESetOrganizationFeaturesRequest\x12Q\x0A\x0Forganization_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0EorganizationId\"[\x0A\x1FSetOrganizationFeaturesResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2beta.DetailsR\x07details\"u\x0A ResetOrganizationFeaturesRequest\x12Q\x0A\x0Forganization_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0EorganizationId\"]\x0A!ResetOrganizationFeaturesResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2beta.DetailsR\x07details\"\xFF\x03\x0A\x1EGetOrganizationFeaturesRequest\x12Q\x0A\x0Forganization_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0EorganizationId\x12\x89\x03\x0A\x0Binheritance\x18\x02 \x01(\x08B\xE6\x02\x92A\xE2\x022\xD9\x02Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the organization, it will be omitted from the response or Not Found is returned when the organization has no features flags at all.J\x04trueR\x0Binheritance\"[\x0A\x1FGetOrganizationFeaturesResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2beta.DetailsR\x07detailsB<Z:github.com/zitadel/zitadel/pkg/grpc/feature/v2beta;featureb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

