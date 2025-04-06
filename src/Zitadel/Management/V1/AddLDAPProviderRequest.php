<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.AddLDAPProviderRequest</code>
 */
class AddLDAPProviderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated string servers = 2 [json_name = "servers", (.validate.rules) = {</code>
     */
    private $servers;
    /**
     * Generated from protobuf field <code>bool start_tls = 3 [json_name = "startTls"];</code>
     */
    protected $start_tls = false;
    /**
     * Generated from protobuf field <code>string base_dn = 4 [json_name = "baseDn", (.validate.rules) = {</code>
     */
    protected $base_dn = '';
    /**
     * Generated from protobuf field <code>string bind_dn = 5 [json_name = "bindDn", (.validate.rules) = {</code>
     */
    protected $bind_dn = '';
    /**
     * Generated from protobuf field <code>string bind_password = 6 [json_name = "bindPassword", (.validate.rules) = {</code>
     */
    protected $bind_password = '';
    /**
     * Generated from protobuf field <code>string user_base = 7 [json_name = "userBase", (.validate.rules) = {</code>
     */
    protected $user_base = '';
    /**
     * Generated from protobuf field <code>repeated string user_object_classes = 8 [json_name = "userObjectClasses", (.validate.rules) = {</code>
     */
    private $user_object_classes;
    /**
     * Generated from protobuf field <code>repeated string user_filters = 9 [json_name = "userFilters", (.validate.rules) = {</code>
     */
    private $user_filters;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 10 [json_name = "timeout"];</code>
     */
    protected $timeout = null;
    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.LDAPAttributes attributes = 11 [json_name = "attributes"];</code>
     */
    protected $attributes = null;
    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 12 [json_name = "providerOptions"];</code>
     */
    protected $provider_options = null;
    /**
     * Root_ca is for self signing certificates for TLS connections to LDAP servers it is intended to be filled with a .pem file.
     *
     * Generated from protobuf field <code>bytes root_ca = 13 [json_name = "rootCa", (.validate.rules) = {</code>
     */
    protected $root_ca = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $servers
     *     @type bool $start_tls
     *     @type string $base_dn
     *     @type string $bind_dn
     *     @type string $bind_password
     *     @type string $user_base
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_object_classes
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_filters
     *     @type \Google\Protobuf\Duration $timeout
     *     @type \Zitadel\Idp\V1\LDAPAttributes $attributes
     *     @type \Zitadel\Idp\V1\Options $provider_options
     *     @type string $root_ca
     *           Root_ca is for self signing certificates for TLS connections to LDAP servers it is intended to be filled with a .pem file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string servers = 2 [json_name = "servers", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServers()
    {
        return $this->servers;
    }

    /**
     * Generated from protobuf field <code>repeated string servers = 2 [json_name = "servers", (.validate.rules) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->servers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool start_tls = 3 [json_name = "startTls"];</code>
     * @return bool
     */
    public function getStartTls()
    {
        return $this->start_tls;
    }

    /**
     * Generated from protobuf field <code>bool start_tls = 3 [json_name = "startTls"];</code>
     * @param bool $var
     * @return $this
     */
    public function setStartTls($var)
    {
        GPBUtil::checkBool($var);
        $this->start_tls = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string base_dn = 4 [json_name = "baseDn", (.validate.rules) = {</code>
     * @return string
     */
    public function getBaseDn()
    {
        return $this->base_dn;
    }

    /**
     * Generated from protobuf field <code>string base_dn = 4 [json_name = "baseDn", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBaseDn($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_dn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bind_dn = 5 [json_name = "bindDn", (.validate.rules) = {</code>
     * @return string
     */
    public function getBindDn()
    {
        return $this->bind_dn;
    }

    /**
     * Generated from protobuf field <code>string bind_dn = 5 [json_name = "bindDn", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBindDn($var)
    {
        GPBUtil::checkString($var, True);
        $this->bind_dn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bind_password = 6 [json_name = "bindPassword", (.validate.rules) = {</code>
     * @return string
     */
    public function getBindPassword()
    {
        return $this->bind_password;
    }

    /**
     * Generated from protobuf field <code>string bind_password = 6 [json_name = "bindPassword", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBindPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->bind_password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_base = 7 [json_name = "userBase", (.validate.rules) = {</code>
     * @return string
     */
    public function getUserBase()
    {
        return $this->user_base;
    }

    /**
     * Generated from protobuf field <code>string user_base = 7 [json_name = "userBase", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserBase($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_base = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string user_object_classes = 8 [json_name = "userObjectClasses", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserObjectClasses()
    {
        return $this->user_object_classes;
    }

    /**
     * Generated from protobuf field <code>repeated string user_object_classes = 8 [json_name = "userObjectClasses", (.validate.rules) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserObjectClasses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_object_classes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string user_filters = 9 [json_name = "userFilters", (.validate.rules) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserFilters()
    {
        return $this->user_filters;
    }

    /**
     * Generated from protobuf field <code>repeated string user_filters = 9 [json_name = "userFilters", (.validate.rules) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_filters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 10 [json_name = "timeout"];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 10 [json_name = "timeout"];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.LDAPAttributes attributes = 11 [json_name = "attributes"];</code>
     * @return \Zitadel\Idp\V1\LDAPAttributes|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    public function hasAttributes()
    {
        return isset($this->attributes);
    }

    public function clearAttributes()
    {
        unset($this->attributes);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.LDAPAttributes attributes = 11 [json_name = "attributes"];</code>
     * @param \Zitadel\Idp\V1\LDAPAttributes $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V1\LDAPAttributes::class);
        $this->attributes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 12 [json_name = "providerOptions"];</code>
     * @return \Zitadel\Idp\V1\Options|null
     */
    public function getProviderOptions()
    {
        return $this->provider_options;
    }

    public function hasProviderOptions()
    {
        return isset($this->provider_options);
    }

    public function clearProviderOptions()
    {
        unset($this->provider_options);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v1.Options provider_options = 12 [json_name = "providerOptions"];</code>
     * @param \Zitadel\Idp\V1\Options $var
     * @return $this
     */
    public function setProviderOptions($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V1\Options::class);
        $this->provider_options = $var;

        return $this;
    }

    /**
     * Root_ca is for self signing certificates for TLS connections to LDAP servers it is intended to be filled with a .pem file.
     *
     * Generated from protobuf field <code>bytes root_ca = 13 [json_name = "rootCa", (.validate.rules) = {</code>
     * @return string
     */
    public function getRootCa()
    {
        return $this->root_ca;
    }

    /**
     * Root_ca is for self signing certificates for TLS connections to LDAP servers it is intended to be filled with a .pem file.
     *
     * Generated from protobuf field <code>bytes root_ca = 13 [json_name = "rootCa", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRootCa($var)
    {
        GPBUtil::checkString($var, False);
        $this->root_ca = $var;

        return $this;
    }

}

