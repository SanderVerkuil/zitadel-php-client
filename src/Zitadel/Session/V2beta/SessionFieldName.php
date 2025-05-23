<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2beta/session.proto

namespace Zitadel\Session\V2beta;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.session.v2beta.SessionFieldName</code>
 */
class SessionFieldName
{
    /**
     * Generated from protobuf enum <code>SESSION_FIELD_NAME_UNSPECIFIED = 0;</code>
     */
    const SESSION_FIELD_NAME_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>SESSION_FIELD_NAME_CREATION_DATE = 1;</code>
     */
    const SESSION_FIELD_NAME_CREATION_DATE = 1;

    private static $valueToName = [
        self::SESSION_FIELD_NAME_UNSPECIFIED => 'SESSION_FIELD_NAME_UNSPECIFIED',
        self::SESSION_FIELD_NAME_CREATION_DATE => 'SESSION_FIELD_NAME_CREATION_DATE',
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

