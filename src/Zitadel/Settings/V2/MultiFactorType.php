<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2/login_settings.proto

namespace Zitadel\Settings\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.settings.v2.MultiFactorType</code>
 */
class MultiFactorType
{
    /**
     * Generated from protobuf enum <code>MULTI_FACTOR_TYPE_UNSPECIFIED = 0;</code>
     */
    const MULTI_FACTOR_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>MULTI_FACTOR_TYPE_U2F_WITH_VERIFICATION = 1;</code>
     */
    const MULTI_FACTOR_TYPE_U2F_WITH_VERIFICATION = 1;

    private static $valueToName = [
        self::MULTI_FACTOR_TYPE_UNSPECIFIED => 'MULTI_FACTOR_TYPE_UNSPECIFIED',
        self::MULTI_FACTOR_TYPE_U2F_WITH_VERIFICATION => 'MULTI_FACTOR_TYPE_U2F_WITH_VERIFICATION',
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

