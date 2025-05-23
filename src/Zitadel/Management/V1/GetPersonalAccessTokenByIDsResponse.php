<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.GetPersonalAccessTokenByIDsResponse</code>
 */
class GetPersonalAccessTokenByIDsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.user.v1.PersonalAccessToken token = 1 [json_name = "token"];</code>
     */
    protected $token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\User\V1\PersonalAccessToken $token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.PersonalAccessToken token = 1 [json_name = "token"];</code>
     * @return \Zitadel\User\V1\PersonalAccessToken|null
     */
    public function getToken()
    {
        return $this->token;
    }

    public function hasToken()
    {
        return isset($this->token);
    }

    public function clearToken()
    {
        unset($this->token);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v1.PersonalAccessToken token = 1 [json_name = "token"];</code>
     * @param \Zitadel\User\V1\PersonalAccessToken $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V1\PersonalAccessToken::class);
        $this->token = $var;

        return $this;
    }

}

