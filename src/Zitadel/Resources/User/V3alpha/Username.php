<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/user/v3alpha/authenticator.proto

namespace Zitadel\Resources\User\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.user.v3alpha.Username</code>
 */
class Username extends \Google\Protobuf\Internal\Message
{
    /**
     * unique identifier of the username.
     *
     * Generated from protobuf field <code>string username_id = 1 [json_name = "usernameId"];</code>
     */
    protected $username_id = '';
    /**
     * The user's unique username. It is used for identification during authentication.
     *
     * Generated from protobuf field <code>string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $username = '';
    /**
     * By default usernames must be unique across all organizations in an instance.
     * This option allow to restrict the uniqueness to the user's own organization.
     * As a result, this username can only be used if the authentication is limited
     * to the corresponding organization.
     * This can be useful if you provide multiple usernames for a single user, where one
     * if specific to your organization, e.g.:
     * - gigi-giraffe\@zitadel.com (unique across organizations)
     * - gigi-giraffe (unique only inside the ZITADEL organization)
     *
     * Generated from protobuf field <code>bool is_organization_specific = 3 [json_name = "isOrganizationSpecific"];</code>
     */
    protected $is_organization_specific = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username_id
     *           unique identifier of the username.
     *     @type string $username
     *           The user's unique username. It is used for identification during authentication.
     *     @type bool $is_organization_specific
     *           By default usernames must be unique across all organizations in an instance.
     *           This option allow to restrict the uniqueness to the user's own organization.
     *           As a result, this username can only be used if the authentication is limited
     *           to the corresponding organization.
     *           This can be useful if you provide multiple usernames for a single user, where one
     *           if specific to your organization, e.g.:
     *           - gigi-giraffe\@zitadel.com (unique across organizations)
     *           - gigi-giraffe (unique only inside the ZITADEL organization)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\User\V3Alpha\Authenticator::initOnce();
        parent::__construct($data);
    }

    /**
     * unique identifier of the username.
     *
     * Generated from protobuf field <code>string username_id = 1 [json_name = "usernameId"];</code>
     * @return string
     */
    public function getUsernameId()
    {
        return $this->username_id;
    }

    /**
     * unique identifier of the username.
     *
     * Generated from protobuf field <code>string username_id = 1 [json_name = "usernameId"];</code>
     * @param string $var
     * @return $this
     */
    public function setUsernameId($var)
    {
        GPBUtil::checkString($var, True);
        $this->username_id = $var;

        return $this;
    }

    /**
     * The user's unique username. It is used for identification during authentication.
     *
     * Generated from protobuf field <code>string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The user's unique username. It is used for identification during authentication.
     *
     * Generated from protobuf field <code>string username = 2 [json_name = "username", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
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
     * By default usernames must be unique across all organizations in an instance.
     * This option allow to restrict the uniqueness to the user's own organization.
     * As a result, this username can only be used if the authentication is limited
     * to the corresponding organization.
     * This can be useful if you provide multiple usernames for a single user, where one
     * if specific to your organization, e.g.:
     * - gigi-giraffe\@zitadel.com (unique across organizations)
     * - gigi-giraffe (unique only inside the ZITADEL organization)
     *
     * Generated from protobuf field <code>bool is_organization_specific = 3 [json_name = "isOrganizationSpecific"];</code>
     * @return bool
     */
    public function getIsOrganizationSpecific()
    {
        return $this->is_organization_specific;
    }

    /**
     * By default usernames must be unique across all organizations in an instance.
     * This option allow to restrict the uniqueness to the user's own organization.
     * As a result, this username can only be used if the authentication is limited
     * to the corresponding organization.
     * This can be useful if you provide multiple usernames for a single user, where one
     * if specific to your organization, e.g.:
     * - gigi-giraffe\@zitadel.com (unique across organizations)
     * - gigi-giraffe (unique only inside the ZITADEL organization)
     *
     * Generated from protobuf field <code>bool is_organization_specific = 3 [json_name = "isOrganizationSpecific"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOrganizationSpecific($var)
    {
        GPBUtil::checkBool($var);
        $this->is_organization_specific = $var;

        return $this;
    }

}

