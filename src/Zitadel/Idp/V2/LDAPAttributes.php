<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp/v2/idp.proto

namespace Zitadel\Idp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.idp.v2.LDAPAttributes</code>
 */
class LDAPAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id_attribute = 1 [json_name = "idAttribute", (.validate.rules) = {</code>
     */
    protected $id_attribute = '';
    /**
     * Generated from protobuf field <code>string first_name_attribute = 2 [json_name = "firstNameAttribute", (.validate.rules) = {</code>
     */
    protected $first_name_attribute = '';
    /**
     * Generated from protobuf field <code>string last_name_attribute = 3 [json_name = "lastNameAttribute", (.validate.rules) = {</code>
     */
    protected $last_name_attribute = '';
    /**
     * Generated from protobuf field <code>string display_name_attribute = 4 [json_name = "displayNameAttribute", (.validate.rules) = {</code>
     */
    protected $display_name_attribute = '';
    /**
     * Generated from protobuf field <code>string nick_name_attribute = 5 [json_name = "nickNameAttribute", (.validate.rules) = {</code>
     */
    protected $nick_name_attribute = '';
    /**
     * Generated from protobuf field <code>string preferred_username_attribute = 6 [json_name = "preferredUsernameAttribute", (.validate.rules) = {</code>
     */
    protected $preferred_username_attribute = '';
    /**
     * Generated from protobuf field <code>string email_attribute = 7 [json_name = "emailAttribute", (.validate.rules) = {</code>
     */
    protected $email_attribute = '';
    /**
     * Generated from protobuf field <code>string email_verified_attribute = 8 [json_name = "emailVerifiedAttribute", (.validate.rules) = {</code>
     */
    protected $email_verified_attribute = '';
    /**
     * Generated from protobuf field <code>string phone_attribute = 9 [json_name = "phoneAttribute", (.validate.rules) = {</code>
     */
    protected $phone_attribute = '';
    /**
     * Generated from protobuf field <code>string phone_verified_attribute = 10 [json_name = "phoneVerifiedAttribute", (.validate.rules) = {</code>
     */
    protected $phone_verified_attribute = '';
    /**
     * Generated from protobuf field <code>string preferred_language_attribute = 11 [json_name = "preferredLanguageAttribute", (.validate.rules) = {</code>
     */
    protected $preferred_language_attribute = '';
    /**
     * Generated from protobuf field <code>string avatar_url_attribute = 12 [json_name = "avatarUrlAttribute", (.validate.rules) = {</code>
     */
    protected $avatar_url_attribute = '';
    /**
     * Generated from protobuf field <code>string profile_attribute = 13 [json_name = "profileAttribute", (.validate.rules) = {</code>
     */
    protected $profile_attribute = '';
    /**
     * Generated from protobuf field <code>string root_ca = 14 [json_name = "rootCa"];</code>
     */
    protected $root_ca = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id_attribute
     *     @type string $first_name_attribute
     *     @type string $last_name_attribute
     *     @type string $display_name_attribute
     *     @type string $nick_name_attribute
     *     @type string $preferred_username_attribute
     *     @type string $email_attribute
     *     @type string $email_verified_attribute
     *     @type string $phone_attribute
     *     @type string $phone_verified_attribute
     *     @type string $preferred_language_attribute
     *     @type string $avatar_url_attribute
     *     @type string $profile_attribute
     *     @type string $root_ca
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Idp\V2\Idp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id_attribute = 1 [json_name = "idAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getIdAttribute()
    {
        return $this->id_attribute;
    }

    /**
     * Generated from protobuf field <code>string id_attribute = 1 [json_name = "idAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIdAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->id_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string first_name_attribute = 2 [json_name = "firstNameAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getFirstNameAttribute()
    {
        return $this->first_name_attribute;
    }

    /**
     * Generated from protobuf field <code>string first_name_attribute = 2 [json_name = "firstNameAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setFirstNameAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_name_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_name_attribute = 3 [json_name = "lastNameAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getLastNameAttribute()
    {
        return $this->last_name_attribute;
    }

    /**
     * Generated from protobuf field <code>string last_name_attribute = 3 [json_name = "lastNameAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLastNameAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_name_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string display_name_attribute = 4 [json_name = "displayNameAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getDisplayNameAttribute()
    {
        return $this->display_name_attribute;
    }

    /**
     * Generated from protobuf field <code>string display_name_attribute = 4 [json_name = "displayNameAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayNameAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nick_name_attribute = 5 [json_name = "nickNameAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getNickNameAttribute()
    {
        return $this->nick_name_attribute;
    }

    /**
     * Generated from protobuf field <code>string nick_name_attribute = 5 [json_name = "nickNameAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNickNameAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->nick_name_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string preferred_username_attribute = 6 [json_name = "preferredUsernameAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getPreferredUsernameAttribute()
    {
        return $this->preferred_username_attribute;
    }

    /**
     * Generated from protobuf field <code>string preferred_username_attribute = 6 [json_name = "preferredUsernameAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPreferredUsernameAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->preferred_username_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email_attribute = 7 [json_name = "emailAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getEmailAttribute()
    {
        return $this->email_attribute;
    }

    /**
     * Generated from protobuf field <code>string email_attribute = 7 [json_name = "emailAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEmailAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email_verified_attribute = 8 [json_name = "emailVerifiedAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getEmailVerifiedAttribute()
    {
        return $this->email_verified_attribute;
    }

    /**
     * Generated from protobuf field <code>string email_verified_attribute = 8 [json_name = "emailVerifiedAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEmailVerifiedAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->email_verified_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone_attribute = 9 [json_name = "phoneAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getPhoneAttribute()
    {
        return $this->phone_attribute;
    }

    /**
     * Generated from protobuf field <code>string phone_attribute = 9 [json_name = "phoneAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone_verified_attribute = 10 [json_name = "phoneVerifiedAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getPhoneVerifiedAttribute()
    {
        return $this->phone_verified_attribute;
    }

    /**
     * Generated from protobuf field <code>string phone_verified_attribute = 10 [json_name = "phoneVerifiedAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneVerifiedAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_verified_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string preferred_language_attribute = 11 [json_name = "preferredLanguageAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getPreferredLanguageAttribute()
    {
        return $this->preferred_language_attribute;
    }

    /**
     * Generated from protobuf field <code>string preferred_language_attribute = 11 [json_name = "preferredLanguageAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPreferredLanguageAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->preferred_language_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string avatar_url_attribute = 12 [json_name = "avatarUrlAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        return $this->avatar_url_attribute;
    }

    /**
     * Generated from protobuf field <code>string avatar_url_attribute = 12 [json_name = "avatarUrlAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAvatarUrlAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar_url_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string profile_attribute = 13 [json_name = "profileAttribute", (.validate.rules) = {</code>
     * @return string
     */
    public function getProfileAttribute()
    {
        return $this->profile_attribute;
    }

    /**
     * Generated from protobuf field <code>string profile_attribute = 13 [json_name = "profileAttribute", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProfileAttribute($var)
    {
        GPBUtil::checkString($var, True);
        $this->profile_attribute = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string root_ca = 14 [json_name = "rootCa"];</code>
     * @return string
     */
    public function getRootCa()
    {
        return $this->root_ca;
    }

    /**
     * Generated from protobuf field <code>string root_ca = 14 [json_name = "rootCa"];</code>
     * @param string $var
     * @return $this
     */
    public function setRootCa($var)
    {
        GPBUtil::checkString($var, True);
        $this->root_ca = $var;

        return $this;
    }

}

