<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.GetUserGrantByIDResponse</code>
 */
class GetUserGrantByIDResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserGrant user_grant = 1 [json_name = "userGrant"];</code>
     */
    protected $user_grant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\User\V1\UserGrant $user_grant
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserGrant user_grant = 1 [json_name = "userGrant"];</code>
     * @return \Zitadel\User\V1\UserGrant|null
     */
    public function getUserGrant()
    {
        return $this->user_grant;
    }

    public function hasUserGrant()
    {
        return isset($this->user_grant);
    }

    public function clearUserGrant()
    {
        unset($this->user_grant);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.UserGrant user_grant = 1 [json_name = "userGrant"];</code>
     * @param \Zitadel\User\V1\UserGrant $var
     * @return $this
     */
    public function setUserGrant($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V1\UserGrant::class);
        $this->user_grant = $var;

        return $this;
    }

}

