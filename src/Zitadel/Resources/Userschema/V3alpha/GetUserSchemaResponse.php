<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/userschema/v3alpha/user_schema_service.proto

namespace Zitadel\Resources\Userschema\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.userschema.v3alpha.GetUserSchemaResponse</code>
 */
class GetUserSchemaResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.resources.userschema.v3alpha.GetUserSchema user_schema = 2 [json_name = "userSchema"];</code>
     */
    protected $user_schema = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\Userschema\V3alpha\GetUserSchema $user_schema
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Userschema\V3Alpha\UserSchemaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.userschema.v3alpha.GetUserSchema user_schema = 2 [json_name = "userSchema"];</code>
     * @return \Zitadel\Resources\Userschema\V3alpha\GetUserSchema|null
     */
    public function getUserSchema()
    {
        return $this->user_schema;
    }

    public function hasUserSchema()
    {
        return isset($this->user_schema);
    }

    public function clearUserSchema()
    {
        unset($this->user_schema);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.userschema.v3alpha.GetUserSchema user_schema = 2 [json_name = "userSchema"];</code>
     * @param \Zitadel\Resources\Userschema\V3alpha\GetUserSchema $var
     * @return $this
     */
    public function setUserSchema($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Userschema\V3alpha\GetUserSchema::class);
        $this->user_schema = $var;

        return $this;
    }

}

