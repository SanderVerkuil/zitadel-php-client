<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2/user_service.proto

namespace Zitadel\User\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2.ListAuthenticationMethodTypesResponse</code>
 */
class ListAuthenticationMethodTypesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2.ListDetails details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthenticationMethodType auth_method_types = 2 [json_name = "authMethodTypes"];</code>
     */
    private $auth_method_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2\ListDetails $details
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $auth_method_types
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2\UserService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.ListDetails details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2\ListDetails|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.ListDetails details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2\ListDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2\ListDetails::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthenticationMethodType auth_method_types = 2 [json_name = "authMethodTypes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthMethodTypes()
    {
        return $this->auth_method_types;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v2.AuthenticationMethodType auth_method_types = 2 [json_name = "authMethodTypes"];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthMethodTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Zitadel\User\V2\AuthenticationMethodType::class);
        $this->auth_method_types = $arr;

        return $this;
    }

}

