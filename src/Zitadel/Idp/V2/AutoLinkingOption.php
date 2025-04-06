<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp/v2/idp.proto

namespace Zitadel\Idp\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.idp.v2.AutoLinkingOption</code>
 */
class AutoLinkingOption
{
    /**
     * AUTO_LINKING_OPTION_UNSPECIFIED disables the auto linking prompt.
     *
     * Generated from protobuf enum <code>AUTO_LINKING_OPTION_UNSPECIFIED = 0;</code>
     */
    const AUTO_LINKING_OPTION_UNSPECIFIED = 0;
    /**
     * AUTO_LINKING_OPTION_USERNAME will use the username of the external user to
     * check for a corresponding ZITADEL user.
     *
     * Generated from protobuf enum <code>AUTO_LINKING_OPTION_USERNAME = 1;</code>
     */
    const AUTO_LINKING_OPTION_USERNAME = 1;
    /**
     * AUTO_LINKING_OPTION_EMAIL  will use the email of the external user to check
     * for a corresponding ZITADEL user with the same verified email Note that in
     * case multiple users match, no prompt will be shown.
     *
     * Generated from protobuf enum <code>AUTO_LINKING_OPTION_EMAIL = 2;</code>
     */
    const AUTO_LINKING_OPTION_EMAIL = 2;

    private static $valueToName = [
        self::AUTO_LINKING_OPTION_UNSPECIFIED => 'AUTO_LINKING_OPTION_UNSPECIFIED',
        self::AUTO_LINKING_OPTION_USERNAME => 'AUTO_LINKING_OPTION_USERNAME',
        self::AUTO_LINKING_OPTION_EMAIL => 'AUTO_LINKING_OPTION_EMAIL',
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

