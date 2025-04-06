<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2/login_settings.proto

namespace Zitadel\Settings\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.settings.v2.PasskeysType</code>
 */
class PasskeysType
{
    /**
     * Generated from protobuf enum <code>PASSKEYS_TYPE_NOT_ALLOWED = 0;</code>
     */
    const PASSKEYS_TYPE_NOT_ALLOWED = 0;
    /**
     * Generated from protobuf enum <code>PASSKEYS_TYPE_ALLOWED = 1;</code>
     */
    const PASSKEYS_TYPE_ALLOWED = 1;

    private static $valueToName = [
        self::PASSKEYS_TYPE_NOT_ALLOWED => 'PASSKEYS_TYPE_NOT_ALLOWED',
        self::PASSKEYS_TYPE_ALLOWED => 'PASSKEYS_TYPE_ALLOWED',
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

