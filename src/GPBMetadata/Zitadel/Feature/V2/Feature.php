<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/feature/v2/feature.proto

namespace GPBMetadata\Zitadel\Feature\V2;

class Feature
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        
        $pool->internalAddGeneratedFile(
            "\x0A\xA3\x0C\x0A zitadel/feature/v2/feature.proto\x12\x12zitadel.feature.v2\"\x98\x02\x0A\x0BFeatureFlag\x12C\x0A\x07enabled\x18\x01 \x01(\x08B)\x92A&2\x1DWhether a feature is enabled.J\x05falseR\x07enabled\x12\xC3\x01\x0A\x06source\x18\x02 \x01(\x0E2\x1A.zitadel.feature.v2.SourceB\x8E\x01\x92A\x8A\x012\x87\x01The source where the setting of the feature was defined. The source may be the resource itself or a resource owner through inheritance.R\x06source\"\xF5\x02\x0A\x1EImprovedPerformanceFeatureFlag\x12\x8C\x01\x0A\x0Fexecution_paths\x18\x01 \x03(\x0E2'.zitadel.feature.v2.ImprovedPerformanceB:\x92A720Which of the performance improvements is enabledJ\x03[1]R\x0EexecutionPaths\x12\xC3\x01\x0A\x06source\x18\x02 \x01(\x0E2\x1A.zitadel.feature.v2.SourceB\x8E\x01\x92A\x8A\x012\x87\x01The source where the setting of the feature was defined. The source may be the resource itself or a resource owner through inheritance.R\x06source\"\xA3\x02\x0A\x12LoginV2FeatureFlag\x12\x1A\x0A\x08required\x18\x01 \x01(\x08R\x08required\x12\x1E\x0A\x08base_uri\x18\x02 \x01(\x09H\x00R\x07baseUri\x88\x01\x01\x12\xC3\x01\x0A\x06source\x18\x03 \x01(\x0E2\x1A.zitadel.feature.v2.SourceB\x8E\x01\x92A\x8A\x012\x87\x01The source where the setting of the feature was defined. The source may be the resource itself or a resource owner through inheritance.R\x06sourceB\x0B\x0A\x09_base_uri\"R\x0A\x07LoginV2\x12\x1A\x0A\x08required\x18\x01 \x01(\x08R\x08required\x12\x1E\x0A\x08base_uri\x18\x02 \x01(\x09H\x00R\x07baseUri\x88\x01\x01B\x0B\x0A\x09_base_uri*\x9C\x01\x0A\x06Source\x12\x16\x0A\x12SOURCE_UNSPECIFIED\x10\x00\x12\x11\x0A\x0DSOURCE_SYSTEM\x10\x02\x12\x13\x0A\x0FSOURCE_INSTANCE\x10\x03\x12\x17\x0A\x13SOURCE_ORGANIZATION\x10\x04\x12\x12\x0A\x0ESOURCE_PROJECT\x10\x05\x12\x0E\x0A\x0ASOURCE_APP\x10\x06\x12\x0F\x0A\x0BSOURCE_USER\x10\x07\"\x04\x08\x01\x10\x01*\xFC\x01\x0A\x13ImprovedPerformance\x12\$\x0A IMPROVED_PERFORMANCE_UNSPECIFIED\x10\x00\x12\"\x0A\x1EIMPROVED_PERFORMANCE_ORG_BY_ID\x10\x01\x12&\x0A\"IMPROVED_PERFORMANCE_PROJECT_GRANT\x10\x02\x12 \x0A\x1CIMPROVED_PERFORMANCE_PROJECT\x10\x03\x12#\x0A\x1FIMPROVED_PERFORMANCE_USER_GRANT\x10\x04\x12,\x0A(IMPROVED_PERFORMANCE_ORG_DOMAIN_VERIFIED\x10\x05B8Z6github.com/zitadel/zitadel/pkg/grpc/feature/v2;featureb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

