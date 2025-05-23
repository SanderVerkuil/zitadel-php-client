<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/user_service.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2beta.AddHumanUserRequest</code>
 */
class AddHumanUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * optionally set your own id unique for the user.
     *
     * Generated from protobuf field <code>optional string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $user_id = null;
    /**
     * optionally set a unique username, if none is provided the email will be used.
     *
     * Generated from protobuf field <code>optional string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $username = null;
    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Organization organization = 11 [json_name = "organization"];</code>
     */
    protected $organization = null;
    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanProfile profile = 4 [json_name = "profile", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     */
    protected $profile = null;
    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanEmail email = 5 [json_name = "email", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     */
    protected $email = null;
    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanPhone phone = 10 [json_name = "phone"];</code>
     */
    protected $phone = null;
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2beta.SetMetadataEntry metadata = 6 [json_name = "metadata"];</code>
     */
    private $metadata;
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2beta.IDPLink idp_links = 9 [json_name = "idpLinks"];</code>
     */
    private $idp_links;
    /**
     * An Implementation of RFC 6238 is used, with HMAC-SHA-1 and time-step of 30 seconds.
     * Currently no other options are supported, and if anything different is used the validation will fail.
     *
     * Generated from protobuf field <code>optional string totp_secret = 12 [json_name = "totpSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $totp_secret = null;
    protected $password_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_id
     *           optionally set your own id unique for the user.
     *     @type string $username
     *           optionally set a unique username, if none is provided the email will be used.
     *     @type \Zitadel\Object\V2beta\Organization $organization
     *     @type \Zitadel\User\V2beta\SetHumanProfile $profile
     *     @type \Zitadel\User\V2beta\SetHumanEmail $email
     *     @type \Zitadel\User\V2beta\SetHumanPhone $phone
     *     @type array<\Zitadel\User\V2beta\SetMetadataEntry>|\Google\Protobuf\Internal\RepeatedField $metadata
     *     @type \Zitadel\User\V2beta\Password $password
     *     @type \Zitadel\User\V2beta\HashedPassword $hashed_password
     *     @type array<\Zitadel\User\V2beta\IDPLink>|\Google\Protobuf\Internal\RepeatedField $idp_links
     *     @type string $totp_secret
     *           An Implementation of RFC 6238 is used, with HMAC-SHA-1 and time-step of 30 seconds.
     *           Currently no other options are supported, and if anything different is used the validation will fail.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * optionally set your own id unique for the user.
     *
     * Generated from protobuf field <code>optional string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUserId()
    {
        return isset($this->user_id) ? $this->user_id : '';
    }

    public function hasUserId()
    {
        return isset($this->user_id);
    }

    public function clearUserId()
    {
        unset($this->user_id);
    }

    /**
     * optionally set your own id unique for the user.
     *
     * Generated from protobuf field <code>optional string user_id = 1 [json_name = "userId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * optionally set a unique username, if none is provided the email will be used.
     *
     * Generated from protobuf field <code>optional string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUsername()
    {
        return isset($this->username) ? $this->username : '';
    }

    public function hasUsername()
    {
        return isset($this->username);
    }

    public function clearUsername()
    {
        unset($this->username);
    }

    /**
     * optionally set a unique username, if none is provided the email will be used.
     *
     * Generated from protobuf field <code>optional string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * Generated from protobuf field <code>.zitadel.object.v2beta.Organization organization = 11 [json_name = "organization"];</code>
     * @return \Zitadel\Object\V2beta\Organization|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    public function hasOrganization()
    {
        return isset($this->organization);
    }

    public function clearOrganization()
    {
        unset($this->organization);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.Organization organization = 11 [json_name = "organization"];</code>
     * @param \Zitadel\Object\V2beta\Organization $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2beta\Organization::class);
        $this->organization = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanProfile profile = 4 [json_name = "profile", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @return \Zitadel\User\V2beta\SetHumanProfile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanProfile profile = 4 [json_name = "profile", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @param \Zitadel\User\V2beta\SetHumanProfile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\SetHumanProfile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanEmail email = 5 [json_name = "email", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @return \Zitadel\User\V2beta\SetHumanEmail|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function hasEmail()
    {
        return isset($this->email);
    }

    public function clearEmail()
    {
        unset($this->email);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanEmail email = 5 [json_name = "email", (.google.api.field_behavior) = REQUIRED, (.validate.rules) = {</code>
     * @param \Zitadel\User\V2beta\SetHumanEmail $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\SetHumanEmail::class);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanPhone phone = 10 [json_name = "phone"];</code>
     * @return \Zitadel\User\V2beta\SetHumanPhone|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function hasPhone()
    {
        return isset($this->phone);
    }

    public function clearPhone()
    {
        unset($this->phone);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.SetHumanPhone phone = 10 [json_name = "phone"];</code>
     * @param \Zitadel\User\V2beta\SetHumanPhone $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\SetHumanPhone::class);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2beta.SetMetadataEntry metadata = 6 [json_name = "metadata"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2beta.SetMetadataEntry metadata = 6 [json_name = "metadata"];</code>
     * @param array<\Zitadel\User\V2beta\SetMetadataEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\User\V2beta\SetMetadataEntry::class);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.Password password = 7 [json_name = "password"];</code>
     * @return \Zitadel\User\V2beta\Password|null
     */
    public function getPassword()
    {
        return $this->readOneof(7);
    }

    public function hasPassword()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.Password password = 7 [json_name = "password"];</code>
     * @param \Zitadel\User\V2beta\Password $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\Password::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.HashedPassword hashed_password = 8 [json_name = "hashedPassword"];</code>
     * @return \Zitadel\User\V2beta\HashedPassword|null
     */
    public function getHashedPassword()
    {
        return $this->readOneof(8);
    }

    public function hasHashedPassword()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.HashedPassword hashed_password = 8 [json_name = "hashedPassword"];</code>
     * @param \Zitadel\User\V2beta\HashedPassword $var
     * @return $this
     */
    public function setHashedPassword($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\HashedPassword::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2beta.IDPLink idp_links = 9 [json_name = "idpLinks"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdpLinks()
    {
        return $this->idp_links;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2beta.IDPLink idp_links = 9 [json_name = "idpLinks"];</code>
     * @param array<\Zitadel\User\V2beta\IDPLink>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdpLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\User\V2beta\IDPLink::class);
        $this->idp_links = $arr;

        return $this;
    }

    /**
     * An Implementation of RFC 6238 is used, with HMAC-SHA-1 and time-step of 30 seconds.
     * Currently no other options are supported, and if anything different is used the validation will fail.
     *
     * Generated from protobuf field <code>optional string totp_secret = 12 [json_name = "totpSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getTotpSecret()
    {
        return isset($this->totp_secret) ? $this->totp_secret : '';
    }

    public function hasTotpSecret()
    {
        return isset($this->totp_secret);
    }

    public function clearTotpSecret()
    {
        unset($this->totp_secret);
    }

    /**
     * An Implementation of RFC 6238 is used, with HMAC-SHA-1 and time-step of 30 seconds.
     * Currently no other options are supported, and if anything different is used the validation will fail.
     *
     * Generated from protobuf field <code>optional string totp_secret = 12 [json_name = "totpSecret", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTotpSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->totp_secret = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordType()
    {
        return $this->whichOneof("password_type");
    }

}

