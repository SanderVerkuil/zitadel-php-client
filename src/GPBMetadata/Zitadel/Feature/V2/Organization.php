<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2/organization.proto

namespace GPBMetadata\Zitadel\Feature\V2;

class Organization
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        
        
        \GPBMetadata\Zitadel\Object\V2\Object_::initOnce();
        \GPBMetadata\Zitadel\Feature\V2\Feature::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xD3\x09\x0A%zitadel/feature/v2/organization.proto\x12\x12zitadel.feature.v2\x1A\x17validate/validate.proto\x1A\x1Ezitadel/object/v2/object.proto\x1A zitadel/feature/v2/feature.proto\"s\x0A\x1ESetOrganizationFeaturesRequest\x12Q\x0A\x0Forganization_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0EorganizationId\"W\x0A\x1FSetOrganizationFeaturesResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\"u\x0A ResetOrganizationFeaturesRequest\x12Q\x0A\x0Forganization_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0EorganizationId\"Y\x0A!ResetOrganizationFeaturesResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\"\xFF\x03\x0A\x1EGetOrganizationFeaturesRequest\x12Q\x0A\x0Forganization_id\x18\x01 \x01(\x09B(\x92A\x1BJ\x13\"69629023906488334\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0EorganizationId\x12\x89\x03\x0A\x0Binheritance\x18\x02 \x01(\x08B\xE6\x02\x92A\xE2\x022\xD9\x02Inherit unset features from the resource owners. This option is recursive: if the flag is set, the resource's ancestors are consulted up to system defaults. If this option is disabled and the feature is not set on the organization, it will be omitted from the response or Not Found is returned when the organization has no features flags at all.J\x04trueR\x0Binheritance\"W\x0A\x1FGetOrganizationFeaturesResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07detailsB8Z6github.com/zitadel/zitadel/pkg/grpc/feature/v2;featureb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

