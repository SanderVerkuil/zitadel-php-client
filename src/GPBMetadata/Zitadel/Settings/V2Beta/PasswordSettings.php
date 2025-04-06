<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/password_settings.proto

namespace GPBMetadata\Zitadel\Settings\V2Beta;

class PasswordSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Zitadel\Settings\V2Beta\Settings::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xE8\x08\x0A/zitadel/settings/v2beta/password_settings.proto\x12\x17zitadel.settings.v2beta\x1A&zitadel/settings/v2beta/settings.proto\"\xD1\x05\x0A\x1APasswordComplexitySettings\x12R\x0A\x0Amin_length\x18\x01 \x01(\x04B3\x92A02)Defines the minimum length of a password.J\x03\"8\"R\x09minLength\x12m\x0A\x12requires_uppercase\x18\x02 \x01(\x08B>\x92A;29defines if the password MUST contain an upper case letterR\x11requiresUppercase\x12k\x0A\x12requires_lowercase\x18\x03 \x01(\x08B<\x92A927defines if the password MUST contain a lowercase letterR\x11requiresLowercase\x12[\x0A\x0Frequires_number\x18\x04 \x01(\x08B2\x92A/2-defines if the password MUST contain a numberR\x0ErequiresNumber\x12e\x0A\x0Frequires_symbol\x18\x05 \x01(\x08B<\x92A927defines if the password MUST contain a symbol. E.g. \"\$\"R\x0ErequiresSymbol\x12\xBE\x01\x0A\x13resource_owner_type\x18\x06 \x01(\x0E2*.zitadel.settings.v2beta.ResourceOwnerTypeBb\x92A_2]resource_owner_type returns if the settings is managed on the organization or on the instanceR\x11resourceOwnerType\"\xD7\x01\x0A\x16PasswordExpirySettings\x12,\x0A\x0Cmax_age_days\x18\x01 \x01(\x04B\x0A\x92A\x07J\x05\"365\"R\x0AmaxAgeDays\x123\x0A\x10expire_warn_days\x18\x02 \x01(\x04B\x09\x92A\x06J\x04\"10\"R\x0EexpireWarnDays\x12Z\x0A\x13resource_owner_type\x18\x03 \x01(\x0E2*.zitadel.settings.v2beta.ResourceOwnerTypeR\x11resourceOwnerTypeB>Z<github.com/zitadel/zitadel/pkg/grpc/settings/v2beta;settingsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

