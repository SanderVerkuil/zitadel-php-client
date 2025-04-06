<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/object.proto

namespace GPBMetadata\Zitadel;

class Object_
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        
        $pool->internalAddGeneratedFile(
            "\x0A\x9C\x0D\x0A\x14zitadel/object.proto\x12\x0Azitadel.v1\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xF4\x01\x0A\x0DObjectDetails\x12\$\x0A\x08sequence\x18\x01 \x01(\x04B\x08\x92A\x05J\x03\"2\"R\x08sequence\x12?\x0A\x0Dcreation_date\x18\x02 \x01(\x0B2\x1A.google.protobuf.TimestampR\x0CcreationDate\x12;\x0A\x0Bchange_date\x18\x03 \x01(\x0B2\x1A.google.protobuf.TimestampR\x0AchangeDate\x12?\x0A\x0Eresource_owner\x18\x04 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x0DresourceOwner\"\xE4\x03\x0A\x09ListQuery\x12 \x0A\x06offset\x18\x01 \x01(\x04B\x08\x92A\x05J\x03\"0\"R\x06offset\x12\xAA\x02\x0A\x05limit\x18\x02 \x01(\x0DB\x93\x02\x92A\x8F\x022\x87\x02Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.J\x03100R\x05limit\x12,\x0A\x03asc\x18\x03 \x01(\x08B\x1A\x92A\x172\x15default is descendingR\x03asc:Z\x92AW\x0AU*\x12General List Query2?Object unspecific list filters like offset, limit and asc/desc.\"\xE4\x01\x0A\x0BListDetails\x12+\x0A\x0Ctotal_result\x18\x01 \x01(\x04B\x08\x92A\x05J\x03\"2\"R\x0BtotalResult\x12<\x0A\x12processed_sequence\x18\x02 \x01(\x04B\x0D\x92A\x0AJ\x08\"267831\"R\x11processedSequence\x12j\x0A\x0Eview_timestamp\x18\x03 \x01(\x0B2\x1A.google.protobuf.TimestampB'\x92A\$2\"the last time the view got updatedR\x0DviewTimestamp*\xC5\x02\x0A\x0FTextQueryMethod\x12\x1C\x0A\x18TEXT_QUERY_METHOD_EQUALS\x10\x00\x12(\x0A\$TEXT_QUERY_METHOD_EQUALS_IGNORE_CASE\x10\x01\x12!\x0A\x1DTEXT_QUERY_METHOD_STARTS_WITH\x10\x02\x12-\x0A)TEXT_QUERY_METHOD_STARTS_WITH_IGNORE_CASE\x10\x03\x12\x1E\x0A\x1ATEXT_QUERY_METHOD_CONTAINS\x10\x04\x12*\x0A&TEXT_QUERY_METHOD_CONTAINS_IGNORE_CASE\x10\x05\x12\x1F\x0A\x1BTEXT_QUERY_METHOD_ENDS_WITH\x10\x06\x12+\x0A'TEXT_QUERY_METHOD_ENDS_WITH_IGNORE_CASE\x10\x07*+\x0A\x0FListQueryMethod\x12\x18\x0A\x14LIST_QUERY_METHOD_IN\x10\x00*\xD7\x01\x0A\x14TimestampQueryMethod\x12!\x0A\x1DTIMESTAMP_QUERY_METHOD_EQUALS\x10\x00\x12\"\x0A\x1ETIMESTAMP_QUERY_METHOD_GREATER\x10\x01\x12,\x0A(TIMESTAMP_QUERY_METHOD_GREATER_OR_EQUALS\x10\x02\x12\x1F\x0A\x1BTIMESTAMP_QUERY_METHOD_LESS\x10\x03\x12)\x0A%TIMESTAMP_QUERY_METHOD_LESS_OR_EQUALS\x10\x04B,Z*github.com/zitadel/zitadel/pkg/grpc/objectb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

