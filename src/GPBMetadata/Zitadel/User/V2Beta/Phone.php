<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/phone.proto

namespace GPBMetadata\Zitadel\User\V2Beta;

class Phone
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        
        
        $pool->internalAddGeneratedFile(
            "\x0A\xA3\x05\x0A\x1Fzitadel/user/v2beta/phone.proto\x12\x13zitadel.user.v2beta\x1A\x1Fgoogle/api/field_behavior.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\"\xA7\x02\x0A\x0DSetHumanPhone\x126\x0A\x05phone\x18\x01 \x01(\x09B \x92A\x13J\x0E\"+41791234567\"x\xC8\x01\xFAB\x07r\x05\x10\x00\x18\xC8\x01R\x05phone\x12M\x0A\x09send_code\x18\x02 \x01(\x0B2..zitadel.user.v2beta.SendPhoneVerificationCodeH\x00R\x08sendCode\x12S\x0A\x0Breturn_code\x18\x03 \x01(\x0B20.zitadel.user.v2beta.ReturnPhoneVerificationCodeH\x00R\x0AreturnCode\x12*\x0A\x0Bis_verified\x18\x04 \x01(\x08B\x07\xFAB\x04j\x02\x08\x01H\x00R\x0AisVerifiedB\x0E\x0A\x0Cverification\"[\x0A\x0AHumanPhone\x12,\x0A\x05phone\x18\x01 \x01(\x09B\x16\x92A\x13J\x0E\"+41791234567\"x\xC8\x01R\x05phone\x12\x1F\x0A\x0Bis_verified\x18\x02 \x01(\x08R\x0AisVerified\"\x1B\x0A\x19SendPhoneVerificationCode\"\x1D\x0A\x1BReturnPhoneVerificationCodeB6Z4github.com/zitadel/zitadel/pkg/grpc/user/v2beta;userb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

