<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/app.proto

namespace Zitadel\App\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.app.v1.AppState</code>
 */
class AppState
{
    /**
     * Generated from protobuf enum <code>APP_STATE_UNSPECIFIED = 0;</code>
     */
    const APP_STATE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>APP_STATE_ACTIVE = 1;</code>
     */
    const APP_STATE_ACTIVE = 1;
    /**
     * Generated from protobuf enum <code>APP_STATE_INACTIVE = 2;</code>
     */
    const APP_STATE_INACTIVE = 2;

    private static $valueToName = [
        self::APP_STATE_UNSPECIFIED => 'APP_STATE_UNSPECIFIED',
        self::APP_STATE_ACTIVE => 'APP_STATE_ACTIVE',
        self::APP_STATE_INACTIVE => 'APP_STATE_INACTIVE',
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

