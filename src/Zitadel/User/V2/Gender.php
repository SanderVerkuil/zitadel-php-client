<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user.proto

namespace Zitadel\User\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.user.v2.Gender</code>
 */
class Gender
{
    /**
     * Generated from protobuf enum <code>GENDER_UNSPECIFIED = 0;</code>
     */
    const GENDER_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>GENDER_FEMALE = 1;</code>
     */
    const GENDER_FEMALE = 1;
    /**
     * Generated from protobuf enum <code>GENDER_MALE = 2;</code>
     */
    const GENDER_MALE = 2;
    /**
     * Generated from protobuf enum <code>GENDER_DIVERSE = 3;</code>
     */
    const GENDER_DIVERSE = 3;

    private static $valueToName = [
        self::GENDER_UNSPECIFIED => 'GENDER_UNSPECIFIED',
        self::GENDER_FEMALE => 'GENDER_FEMALE',
        self::GENDER_MALE => 'GENDER_MALE',
        self::GENDER_DIVERSE => 'GENDER_DIVERSE',
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

