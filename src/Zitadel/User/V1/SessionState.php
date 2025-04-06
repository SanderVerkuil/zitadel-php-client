<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user.proto

namespace Zitadel\User\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.user.v1.SessionState</code>
 */
class SessionState
{
    /**
     * Generated from protobuf enum <code>SESSION_STATE_UNSPECIFIED = 0;</code>
     */
    const SESSION_STATE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>SESSION_STATE_ACTIVE = 1;</code>
     */
    const SESSION_STATE_ACTIVE = 1;
    /**
     * Generated from protobuf enum <code>SESSION_STATE_TERMINATED = 2;</code>
     */
    const SESSION_STATE_TERMINATED = 2;

    private static $valueToName = [
        self::SESSION_STATE_UNSPECIFIED => 'SESSION_STATE_UNSPECIFIED',
        self::SESSION_STATE_ACTIVE => 'SESSION_STATE_ACTIVE',
        self::SESSION_STATE_TERMINATED => 'SESSION_STATE_TERMINATED',
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

