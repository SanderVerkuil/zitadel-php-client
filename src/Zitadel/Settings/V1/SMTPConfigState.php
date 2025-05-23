<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings.proto

namespace Zitadel\Settings\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.settings.v1.SMTPConfigState</code>
 */
class SMTPConfigState
{
    /**
     * Generated from protobuf enum <code>SMTP_CONFIG_STATE_UNSPECIFIED = 0;</code>
     */
    const SMTP_CONFIG_STATE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>SMTP_CONFIG_ACTIVE = 1;</code>
     */
    const SMTP_CONFIG_ACTIVE = 1;
    /**
     * Generated from protobuf enum <code>SMTP_CONFIG_INACTIVE = 2;</code>
     */
    const SMTP_CONFIG_INACTIVE = 2;

    private static $valueToName = [
        self::SMTP_CONFIG_STATE_UNSPECIFIED => 'SMTP_CONFIG_STATE_UNSPECIFIED',
        self::SMTP_CONFIG_ACTIVE => 'SMTP_CONFIG_ACTIVE',
        self::SMTP_CONFIG_INACTIVE => 'SMTP_CONFIG_INACTIVE',
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

