<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/message.proto

namespace GPBMetadata\Zitadel;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xD2\x02\x0A\x15zitadel/message.proto\x12\x0Azitadel.v1\"7\x0A\x0BErrorDetail\x12\x0E\x0A\x02id\x18\x01 \x01(\x09R\x02id\x12\x18\x0A\x07message\x18\x02 \x01(\x09R\x07message\"j\x0A\x15CredentialsCheckError\x12\x0E\x0A\x02id\x18\x01 \x01(\x09R\x02id\x12\x18\x0A\x07message\x18\x02 \x01(\x09R\x07message\x12'\x0A\x0Ffailed_attempts\x18\x03 \x01(\x05R\x0EfailedAttempts\"Q\x0A\x10LocalizedMessage\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12+\x0A\x11localized_message\x18\x02 \x01(\x09R\x10localizedMessageB-Z+github.com/zitadel/zitadel/pkg/grpc/messageb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

