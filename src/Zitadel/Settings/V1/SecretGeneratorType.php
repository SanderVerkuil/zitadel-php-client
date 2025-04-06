<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings.proto

namespace Zitadel\Settings\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.settings.v1.SecretGeneratorType</code>
 */
class SecretGeneratorType
{
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_UNSPECIFIED = 0;</code>
     */
    const SECRET_GENERATOR_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_INIT_CODE = 1;</code>
     */
    const SECRET_GENERATOR_TYPE_INIT_CODE = 1;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_VERIFY_EMAIL_CODE = 2;</code>
     */
    const SECRET_GENERATOR_TYPE_VERIFY_EMAIL_CODE = 2;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_VERIFY_PHONE_CODE = 3;</code>
     */
    const SECRET_GENERATOR_TYPE_VERIFY_PHONE_CODE = 3;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_PASSWORD_RESET_CODE = 4;</code>
     */
    const SECRET_GENERATOR_TYPE_PASSWORD_RESET_CODE = 4;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_PASSWORDLESS_INIT_CODE = 5;</code>
     */
    const SECRET_GENERATOR_TYPE_PASSWORDLESS_INIT_CODE = 5;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_APP_SECRET = 6;</code>
     */
    const SECRET_GENERATOR_TYPE_APP_SECRET = 6;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_OTP_SMS = 7;</code>
     */
    const SECRET_GENERATOR_TYPE_OTP_SMS = 7;
    /**
     * Generated from protobuf enum <code>SECRET_GENERATOR_TYPE_OTP_EMAIL = 8;</code>
     */
    const SECRET_GENERATOR_TYPE_OTP_EMAIL = 8;

    private static $valueToName = [
        self::SECRET_GENERATOR_TYPE_UNSPECIFIED => 'SECRET_GENERATOR_TYPE_UNSPECIFIED',
        self::SECRET_GENERATOR_TYPE_INIT_CODE => 'SECRET_GENERATOR_TYPE_INIT_CODE',
        self::SECRET_GENERATOR_TYPE_VERIFY_EMAIL_CODE => 'SECRET_GENERATOR_TYPE_VERIFY_EMAIL_CODE',
        self::SECRET_GENERATOR_TYPE_VERIFY_PHONE_CODE => 'SECRET_GENERATOR_TYPE_VERIFY_PHONE_CODE',
        self::SECRET_GENERATOR_TYPE_PASSWORD_RESET_CODE => 'SECRET_GENERATOR_TYPE_PASSWORD_RESET_CODE',
        self::SECRET_GENERATOR_TYPE_PASSWORDLESS_INIT_CODE => 'SECRET_GENERATOR_TYPE_PASSWORDLESS_INIT_CODE',
        self::SECRET_GENERATOR_TYPE_APP_SECRET => 'SECRET_GENERATOR_TYPE_APP_SECRET',
        self::SECRET_GENERATOR_TYPE_OTP_SMS => 'SECRET_GENERATOR_TYPE_OTP_SMS',
        self::SECRET_GENERATOR_TYPE_OTP_EMAIL => 'SECRET_GENERATOR_TYPE_OTP_EMAIL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

