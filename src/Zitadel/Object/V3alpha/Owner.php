<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/object/v3alpha/object.proto

namespace Zitadel\Object\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.object.v3alpha.Owner</code>
 */
class Owner extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v3alpha.OwnerType type = 1 [json_name = "type"];</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Object\V3Alpha\Object_::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v3alpha.OwnerType type = 1 [json_name = "type"];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v3alpha.OwnerType type = 1 [json_name = "type"];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zitadel\Object\V3alpha\OwnerType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

