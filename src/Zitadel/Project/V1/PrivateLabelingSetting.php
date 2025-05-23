<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/project.proto

namespace Zitadel\Project\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.project.v1.PrivateLabelingSetting</code>
 */
class PrivateLabelingSetting
{
    /**
     * Generated from protobuf enum <code>PRIVATE_LABELING_SETTING_UNSPECIFIED = 0;</code>
     */
    const PRIVATE_LABELING_SETTING_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>PRIVATE_LABELING_SETTING_ENFORCE_PROJECT_RESOURCE_OWNER_POLICY = 1;</code>
     */
    const PRIVATE_LABELING_SETTING_ENFORCE_PROJECT_RESOURCE_OWNER_POLICY = 1;
    /**
     * Generated from protobuf enum <code>PRIVATE_LABELING_SETTING_ALLOW_LOGIN_USER_RESOURCE_OWNER_POLICY = 2;</code>
     */
    const PRIVATE_LABELING_SETTING_ALLOW_LOGIN_USER_RESOURCE_OWNER_POLICY = 2;

    private static $valueToName = [
        self::PRIVATE_LABELING_SETTING_UNSPECIFIED => 'PRIVATE_LABELING_SETTING_UNSPECIFIED',
        self::PRIVATE_LABELING_SETTING_ENFORCE_PROJECT_RESOURCE_OWNER_POLICY => 'PRIVATE_LABELING_SETTING_ENFORCE_PROJECT_RESOURCE_OWNER_POLICY',
        self::PRIVATE_LABELING_SETTING_ALLOW_LOGIN_USER_RESOURCE_OWNER_POLICY => 'PRIVATE_LABELING_SETTING_ALLOW_LOGIN_USER_RESOURCE_OWNER_POLICY',
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

