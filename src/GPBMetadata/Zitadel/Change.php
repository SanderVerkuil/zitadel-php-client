<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/change.proto

namespace GPBMetadata\Zitadel;

class Change
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Zitadel\Message::initOnce();
        
        $pool->internalAddGeneratedFile(
            "\x0A\x94\x0C\x0A\x14zitadel/change.proto\x12\x11zitadel.change.v1\x1A\x15zitadel/message.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xA8\x06\x0A\x06Change\x12~\x0A\x0Bchange_date\x18\x01 \x01(\x0B2\x1A.google.protobuf.TimestampBA\x92A>2\x1Dthe creation date of an eventJ\x1D\"2019-04-01T08:45:00.000000Z\"R\x0AchangeDate\x12;\x0A\x0Aevent_type\x18\x02 \x01(\x0B2\x1C.zitadel.v1.LocalizedMessageR\x09eventType\x12\$\x0A\x08sequence\x18\x03 \x01(\x04B\x08\x92A\x05J\x03\"2\"R\x08sequence\x12_\x0A\x09editor_id\x18\x04 \x01(\x09BB\x92A?2(the id of the user who created the eventJ\x13\"69629023906488334\"R\x08editorId\x12c\x0A\x13editor_display_name\x18\x05 \x01(\x09B3\x92A02\x1Ethe display name of the editorJ\x0E\"Gigi Giraffe\"R\x11editorDisplayName\x12k\x0A\x11resource_owner_id\x18\x06 \x01(\x09B?\x92A<2%the organization the event belongs toJ\x13\"69629023906488334\"R\x0FresourceOwnerId\x12\x82\x01\x0A\x1Beditor_preferred_login_name\x18\x07 \x01(\x09BC\x92A@2&the preferred login name of the editorJ\x16\"gigi@acme.zitadel.ch\"R\x18editorPreferredLoginName\x12\x82\x01\x0A\x11editor_avatar_url\x18\x08 \x01(\x09BV\x92AS2\x18avatar URL of the editorJ7\"https://api.zitadel.ch/assets/v1/avatar-32432jkh4kj32\"R\x0FeditorAvatarUrl\"\xC0\x04\x0A\x0BChangeQuery\x12c\x0A\x08sequence\x18\x01 \x01(\x04BG\x92AD2=sequence represents the order of events. It's always countingJ\x03\"2\"R\x08sequence\x12\xBC\x02\x0A\x05limit\x18\x02 \x01(\x0DB\xA5\x02\x92A\xA1\x022\x9A\x02Maximum amount of events returned. The default is set to 1000 in https://github.com/zitadel/zitadel/blob/new-eventstore/cmd/zitadel/startup.yaml. If no limit is set or the limit exceeds the maximum configured ZITADEL will throw an error. If no limit is present the default is taken.J\x0220R\x05limit\x12,\x0A\x03asc\x18\x03 \x01(\x08B\x1A\x92A\x172\x15default is descendingR\x03asc:_\x92A\\\x0AZ*\x1EQuery for Changes of an Object28Filter possibility for the changes/history of an Object.B,Z*github.com/zitadel/zitadel/pkg/grpc/changeb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

