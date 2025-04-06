<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/userschema/v3alpha/user_schema.proto

namespace Zitadel\Resources\Userschema\V3alpha;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.resources.userschema.v3alpha.AuthenticatorType</code>
 */
class AuthenticatorType
{
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_UNSPECIFIED = 0;</code>
     */
    const AUTHENTICATOR_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_USERNAME = 1;</code>
     */
    const AUTHENTICATOR_TYPE_USERNAME = 1;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_PASSWORD = 2;</code>
     */
    const AUTHENTICATOR_TYPE_PASSWORD = 2;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_WEBAUTHN = 3;</code>
     */
    const AUTHENTICATOR_TYPE_WEBAUTHN = 3;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_TOTP = 4;</code>
     */
    const AUTHENTICATOR_TYPE_TOTP = 4;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_OTP_EMAIL = 5;</code>
     */
    const AUTHENTICATOR_TYPE_OTP_EMAIL = 5;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_OTP_SMS = 6;</code>
     */
    const AUTHENTICATOR_TYPE_OTP_SMS = 6;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_AUTHENTICATION_KEY = 7;</code>
     */
    const AUTHENTICATOR_TYPE_AUTHENTICATION_KEY = 7;
    /**
     * Generated from protobuf enum <code>AUTHENTICATOR_TYPE_IDENTITY_PROVIDER = 8;</code>
     */
    const AUTHENTICATOR_TYPE_IDENTITY_PROVIDER = 8;

    private static $valueToName = [
        self::AUTHENTICATOR_TYPE_UNSPECIFIED => 'AUTHENTICATOR_TYPE_UNSPECIFIED',
        self::AUTHENTICATOR_TYPE_USERNAME => 'AUTHENTICATOR_TYPE_USERNAME',
        self::AUTHENTICATOR_TYPE_PASSWORD => 'AUTHENTICATOR_TYPE_PASSWORD',
        self::AUTHENTICATOR_TYPE_WEBAUTHN => 'AUTHENTICATOR_TYPE_WEBAUTHN',
        self::AUTHENTICATOR_TYPE_TOTP => 'AUTHENTICATOR_TYPE_TOTP',
        self::AUTHENTICATOR_TYPE_OTP_EMAIL => 'AUTHENTICATOR_TYPE_OTP_EMAIL',
        self::AUTHENTICATOR_TYPE_OTP_SMS => 'AUTHENTICATOR_TYPE_OTP_SMS',
        self::AUTHENTICATOR_TYPE_AUTHENTICATION_KEY => 'AUTHENTICATOR_TYPE_AUTHENTICATION_KEY',
        self::AUTHENTICATOR_TYPE_IDENTITY_PROVIDER => 'AUTHENTICATOR_TYPE_IDENTITY_PROVIDER',
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

