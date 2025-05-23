<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/member.proto

namespace Zitadel\Member\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.member.v1.MemberFieldColumnName</code>
 */
class MemberFieldColumnName
{
    /**
     * Generated from protobuf enum <code>MEMBER_FIELD_NAME_UNSPECIFIED = 0;</code>
     */
    const MEMBER_FIELD_NAME_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>MEMBER_FIELD_NAME_USER_ID = 1;</code>
     */
    const MEMBER_FIELD_NAME_USER_ID = 1;
    /**
     * Generated from protobuf enum <code>MEMBER_FIELD_NAME_CREATION_DATE = 2;</code>
     */
    const MEMBER_FIELD_NAME_CREATION_DATE = 2;
    /**
     * Generated from protobuf enum <code>MEMBER_FIELD_NAME_CHANGE_DATE = 3;</code>
     */
    const MEMBER_FIELD_NAME_CHANGE_DATE = 3;
    /**
     * Generated from protobuf enum <code>MEMBER_FIELD_NAME_USER_RESOURCE_OWNER = 4;</code>
     */
    const MEMBER_FIELD_NAME_USER_RESOURCE_OWNER = 4;

    private static $valueToName = [
        self::MEMBER_FIELD_NAME_UNSPECIFIED => 'MEMBER_FIELD_NAME_UNSPECIFIED',
        self::MEMBER_FIELD_NAME_USER_ID => 'MEMBER_FIELD_NAME_USER_ID',
        self::MEMBER_FIELD_NAME_CREATION_DATE => 'MEMBER_FIELD_NAME_CREATION_DATE',
        self::MEMBER_FIELD_NAME_CHANGE_DATE => 'MEMBER_FIELD_NAME_CHANGE_DATE',
        self::MEMBER_FIELD_NAME_USER_RESOURCE_OWNER => 'MEMBER_FIELD_NAME_USER_RESOURCE_OWNER',
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

