<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.user.v2.AuthFactors</code>
 */
class AuthFactors
{
    /**
     * Generated from protobuf enum <code>OTP = 0;</code>
     */
    const OTP = 0;
    /**
     * Generated from protobuf enum <code>OTP_SMS = 1;</code>
     */
    const OTP_SMS = 1;
    /**
     * Generated from protobuf enum <code>OTP_EMAIL = 2;</code>
     */
    const OTP_EMAIL = 2;
    /**
     * Generated from protobuf enum <code>U2F = 3;</code>
     */
    const U2F = 3;

    private static $valueToName = [
        self::OTP => 'OTP',
        self::OTP_SMS => 'OTP_SMS',
        self::OTP_EMAIL => 'OTP_EMAIL',
        self::U2F => 'U2F',
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

