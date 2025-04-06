<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/event.proto

namespace GPBMetadata\Zitadel;

class Event
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Zitadel\Message::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x92\x0A\x0A\x13zitadel/event.proto\x12\x10zitadel.event.v1\x1A\x1Cgoogle/protobuf/struct.proto\x1A\x15zitadel/message.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\x92\x04\x0A\x05Event\x120\x0A\x06editor\x18\x01 \x01(\x0B2\x18.zitadel.event.v1.EditorR\x06editor\x129\x0A\x09aggregate\x18\x02 \x01(\x0B2\x1B.zitadel.event.v1.AggregateR\x09aggregate\x12\x1A\x0A\x08sequence\x18\x03 \x01(\x04R\x08sequence\x12\x85\x01\x0A\x0Dcreation_date\x18\x04 \x01(\x0B2\x1A.google.protobuf.TimestampBD\x92AA2 The timestamp the event occurredJ\x1D\"2019-04-01T08:45:00.000000Z\"R\x0CcreationDate\x12\xC6\x01\x0A\x07payload\x18\x05 \x01(\x0B2\x17.google.protobuf.StructB\x92\x01\x92A\x8E\x012'Payload contains the data of the event.Jc{\"firstName\": \"Gigi\", \"lastName\": \"Giraffe\", \"userName\": \"gigi@zitadel.com\", \"displayName\": \"Gigi\"}R\x07payload\x12/\x0A\x04type\x18\x06 \x01(\x0B2\x1B.zitadel.event.v1.EventTypeR\x04type\"\xA5\x01\x0A\x06Editor\x122\x0A\x07user_id\x18\x01 \x01(\x09B\x19\x92A\x16J\x14\"165617389845094785\"R\x06userId\x126\x0A\x0Cdisplay_name\x18\x02 \x01(\x09B\x13\x92A\x10J\x0E\"Minnie Mouse\"R\x0BdisplayName\x12/\x0A\x07service\x18\x03 \x01(\x09B\x15\x92A\x12J\x10\"Management-API\"R\x07service\"\xAD\x01\x0A\x09Aggregate\x12)\x0A\x02id\x18\x01 \x01(\x09B\x19\x92A\x16J\x14\"165617850743094785\"R\x02id\x123\x0A\x04type\x18\x02 \x01(\x0B2\x1F.zitadel.event.v1.AggregateTypeR\x04type\x12@\x0A\x0Eresource_owner\x18\x03 \x01(\x09B\x19\x92A\x16J\x14\"165617850930497249\"R\x0DresourceOwner\"t\x0A\x09EventType\x12+\x0A\x04type\x18\x01 \x01(\x09B\x17\x92A\x14J\x12\"user.human.added\"R\x04type\x12:\x0A\x09localized\x18\x02 \x01(\x0B2\x1C.zitadel.v1.LocalizedMessageR\x09localized\"l\x0A\x0DAggregateType\x12\x1F\x0A\x04type\x18\x01 \x01(\x09B\x0B\x92A\x08J\x06\"user\"R\x04type\x12:\x0A\x09localized\x18\x02 \x01(\x0B2\x1C.zitadel.v1.LocalizedMessageR\x09localizedB+Z)github.com/zitadel/zitadel/pkg/grpc/eventb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

