<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/milestone/v1/milestone.proto

namespace GPBMetadata\Zitadel\Milestone\V1;

class Milestone
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object_::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xEB\x07\x0A\$zitadel/milestone/v1/milestone.proto\x12\x14zitadel.milestone.v1\x1A\x17validate/validate.proto\x1A\x1Fgoogle/protobuf/timestamp.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\x92\x01\x0A\x09Milestone\x127\x0A\x04type\x18\x02 \x01(\x0E2#.zitadel.milestone.v1.MilestoneTypeR\x04type\x12=\x0A\x0Creached_date\x18\x03 \x01(\x0B2\x1A.google.protobuf.TimestampR\x0BreachedDateJ\x04\x08\x01\x10\x02R\x07details\"k\x0A\x0EMilestoneQuery\x12P\x0A\x10is_reached_query\x18\x01 \x01(\x0B2\$.zitadel.milestone.v1.IsReachedQueryH\x00R\x0EisReachedQueryB\x07\x0A\x05query\"H\x0A\x0EIsReachedQuery\x126\x0A\x07reached\x18\x01 \x01(\x08B\x1C\x92A\x192\x17only reached milestonesR\x07reached*\xBA\x02\x0A\x0DMilestoneType\x12\x1E\x0A\x1AMILESTONE_TYPE_UNSPECIFIED\x10\x00\x12#\x0A\x1FMILESTONE_TYPE_INSTANCE_CREATED\x10\x01\x127\x0A3MILESTONE_TYPE_AUTHENTICATION_SUCCEEDED_ON_INSTANCE\x10\x02\x12\"\x0A\x1EMILESTONE_TYPE_PROJECT_CREATED\x10\x03\x12&\x0A\"MILESTONE_TYPE_APPLICATION_CREATED\x10\x04\x12:\x0A6MILESTONE_TYPE_AUTHENTICATION_SUCCEEDED_ON_APPLICATION\x10\x05\x12#\x0A\x1FMILESTONE_TYPE_INSTANCE_DELETED\x10\x06*\x80\x01\x0A\x12MilestoneFieldName\x12\$\x0A MILESTONE_FIELD_NAME_UNSPECIFIED\x10\x00\x12\x1D\x0A\x19MILESTONE_FIELD_NAME_TYPE\x10\x01\x12%\x0A!MILESTONE_FIELD_NAME_REACHED_DATE\x10\x02B/Z-github.com/zitadel/zitadel/pkg/grpc/milestoneb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

