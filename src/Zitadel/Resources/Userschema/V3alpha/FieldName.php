<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/userschema/v3alpha/user_schema.proto

namespace Zitadel\Resources\Userschema\V3alpha;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.resources.userschema.v3alpha.FieldName</code>
 */
class FieldName
{
    /**
     * Generated from protobuf enum <code>FIELD_NAME_UNSPECIFIED = 0;</code>
     */
    const FIELD_NAME_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>FIELD_NAME_TYPE = 1;</code>
     */
    const FIELD_NAME_TYPE = 1;
    /**
     * Generated from protobuf enum <code>FIELD_NAME_STATE = 2;</code>
     */
    const FIELD_NAME_STATE = 2;
    /**
     * Generated from protobuf enum <code>FIELD_NAME_REVISION = 3;</code>
     */
    const FIELD_NAME_REVISION = 3;
    /**
     * Generated from protobuf enum <code>FIELD_NAME_CHANGE_DATE = 4;</code>
     */
    const FIELD_NAME_CHANGE_DATE = 4;
    /**
     * Generated from protobuf enum <code>FIELD_NAME_CREATION_DATE = 5;</code>
     */
    const FIELD_NAME_CREATION_DATE = 5;

    private static $valueToName = [
        self::FIELD_NAME_UNSPECIFIED => 'FIELD_NAME_UNSPECIFIED',
        self::FIELD_NAME_TYPE => 'FIELD_NAME_TYPE',
        self::FIELD_NAME_STATE => 'FIELD_NAME_STATE',
        self::FIELD_NAME_REVISION => 'FIELD_NAME_REVISION',
        self::FIELD_NAME_CHANGE_DATE => 'FIELD_NAME_CHANGE_DATE',
        self::FIELD_NAME_CREATION_DATE => 'FIELD_NAME_CREATION_DATE',
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

