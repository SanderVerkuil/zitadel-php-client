<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/authenticator.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.LDAPCredentials</code>
 */
class LDAPCredentials extends \Google\Protobuf\Internal\Message
{
    /**
     * Username used to login through LDAP.
     *
     * Generated from protobuf field <code>string username = 1 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $username = '';
    /**
     * Password used to login through LDAP.
     *
     * Generated from protobuf field <code>string password = 2 [json_name = "password", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username
     *           Username used to login through LDAP.
     *     @type string $password
     *           Password used to login through LDAP.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Authenticator::initOnce();
        parent::__construct($data);
    }

    /**
     * Username used to login through LDAP.
     *
     * Generated from protobuf field <code>string username = 1 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Username used to login through LDAP.
     *
     * Generated from protobuf field <code>string username = 1 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Password used to login through LDAP.
     *
     * Generated from protobuf field <code>string password = 2 [json_name = "password", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Password used to login through LDAP.
     *
     * Generated from protobuf field <code>string password = 2 [json_name = "password", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

