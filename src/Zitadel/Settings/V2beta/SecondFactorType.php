<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/login_settings.proto

namespace Zitadel\Settings\V2beta;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.settings.v2beta.SecondFactorType</code>
 */
class SecondFactorType
{
    /**
     * Generated from protobuf enum <code>SECOND_FACTOR_TYPE_UNSPECIFIED = 0;</code>
     */
    const SECOND_FACTOR_TYPE_UNSPECIFIED = 0;
    /**
     * This is the type for TOTP
     *
     * Generated from protobuf enum <code>SECOND_FACTOR_TYPE_OTP = 1;</code>
     */
    const SECOND_FACTOR_TYPE_OTP = 1;
    /**
     * Generated from protobuf enum <code>SECOND_FACTOR_TYPE_U2F = 2;</code>
     */
    const SECOND_FACTOR_TYPE_U2F = 2;
    /**
     * Generated from protobuf enum <code>SECOND_FACTOR_TYPE_OTP_EMAIL = 3;</code>
     */
    const SECOND_FACTOR_TYPE_OTP_EMAIL = 3;
    /**
     * Generated from protobuf enum <code>SECOND_FACTOR_TYPE_OTP_SMS = 4;</code>
     */
    const SECOND_FACTOR_TYPE_OTP_SMS = 4;

    private static $valueToName = [
        self::SECOND_FACTOR_TYPE_UNSPECIFIED => 'SECOND_FACTOR_TYPE_UNSPECIFIED',
        self::SECOND_FACTOR_TYPE_OTP => 'SECOND_FACTOR_TYPE_OTP',
        self::SECOND_FACTOR_TYPE_U2F => 'SECOND_FACTOR_TYPE_U2F',
        self::SECOND_FACTOR_TYPE_OTP_EMAIL => 'SECOND_FACTOR_TYPE_OTP_EMAIL',
        self::SECOND_FACTOR_TYPE_OTP_SMS => 'SECOND_FACTOR_TYPE_OTP_SMS',
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

