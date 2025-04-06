<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/query.proto

namespace Zitadel\User\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.user.v2.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>TYPE_HUMAN = 1;</code>
     */
    const TYPE_HUMAN = 1;
    /**
     * Generated from protobuf enum <code>TYPE_MACHINE = 2;</code>
     */
    const TYPE_MACHINE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::TYPE_HUMAN => 'TYPE_HUMAN',
        self::TYPE_MACHINE => 'TYPE_MACHINE',
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

