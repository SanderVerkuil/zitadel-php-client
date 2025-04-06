<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/auth.proto

namespace Zitadel\User\V2beta;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.user.v2beta.PasskeyAuthenticator</code>
 */
class PasskeyAuthenticator
{
    /**
     * Generated from protobuf enum <code>PASSKEY_AUTHENTICATOR_UNSPECIFIED = 0;</code>
     */
    const PASSKEY_AUTHENTICATOR_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>PASSKEY_AUTHENTICATOR_PLATFORM = 1;</code>
     */
    const PASSKEY_AUTHENTICATOR_PLATFORM = 1;
    /**
     * Generated from protobuf enum <code>PASSKEY_AUTHENTICATOR_CROSS_PLATFORM = 2;</code>
     */
    const PASSKEY_AUTHENTICATOR_CROSS_PLATFORM = 2;

    private static $valueToName = [
        self::PASSKEY_AUTHENTICATOR_UNSPECIFIED => 'PASSKEY_AUTHENTICATOR_UNSPECIFIED',
        self::PASSKEY_AUTHENTICATOR_PLATFORM => 'PASSKEY_AUTHENTICATOR_PLATFORM',
        self::PASSKEY_AUTHENTICATOR_CROSS_PLATFORM => 'PASSKEY_AUTHENTICATOR_CROSS_PLATFORM',
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

