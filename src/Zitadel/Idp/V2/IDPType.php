<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp/v2/idp.proto

namespace Zitadel\Idp\V2;

use UnexpectedValueException;

/**
 * Protobuf type <code>zitadel.idp.v2.IDPType</code>
 */
class IDPType
{
    /**
     * Generated from protobuf enum <code>IDP_TYPE_UNSPECIFIED = 0;</code>
     */
    const IDP_TYPE_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_OIDC = 1;</code>
     */
    const IDP_TYPE_OIDC = 1;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_JWT = 2;</code>
     */
    const IDP_TYPE_JWT = 2;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_LDAP = 3;</code>
     */
    const IDP_TYPE_LDAP = 3;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_OAUTH = 4;</code>
     */
    const IDP_TYPE_OAUTH = 4;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_AZURE_AD = 5;</code>
     */
    const IDP_TYPE_AZURE_AD = 5;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_GITHUB = 6;</code>
     */
    const IDP_TYPE_GITHUB = 6;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_GITHUB_ES = 7;</code>
     */
    const IDP_TYPE_GITHUB_ES = 7;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_GITLAB = 8;</code>
     */
    const IDP_TYPE_GITLAB = 8;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_GITLAB_SELF_HOSTED = 9;</code>
     */
    const IDP_TYPE_GITLAB_SELF_HOSTED = 9;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_GOOGLE = 10;</code>
     */
    const IDP_TYPE_GOOGLE = 10;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_APPLE = 11;</code>
     */
    const IDP_TYPE_APPLE = 11;
    /**
     * Generated from protobuf enum <code>IDP_TYPE_SAML = 12;</code>
     */
    const IDP_TYPE_SAML = 12;

    private static $valueToName = [
        self::IDP_TYPE_UNSPECIFIED => 'IDP_TYPE_UNSPECIFIED',
        self::IDP_TYPE_OIDC => 'IDP_TYPE_OIDC',
        self::IDP_TYPE_JWT => 'IDP_TYPE_JWT',
        self::IDP_TYPE_LDAP => 'IDP_TYPE_LDAP',
        self::IDP_TYPE_OAUTH => 'IDP_TYPE_OAUTH',
        self::IDP_TYPE_AZURE_AD => 'IDP_TYPE_AZURE_AD',
        self::IDP_TYPE_GITHUB => 'IDP_TYPE_GITHUB',
        self::IDP_TYPE_GITHUB_ES => 'IDP_TYPE_GITHUB_ES',
        self::IDP_TYPE_GITLAB => 'IDP_TYPE_GITLAB',
        self::IDP_TYPE_GITLAB_SELF_HOSTED => 'IDP_TYPE_GITLAB_SELF_HOSTED',
        self::IDP_TYPE_GOOGLE => 'IDP_TYPE_GOOGLE',
        self::IDP_TYPE_APPLE => 'IDP_TYPE_APPLE',
        self::IDP_TYPE_SAML => 'IDP_TYPE_SAML',
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

