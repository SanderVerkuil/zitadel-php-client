<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/system.proto

namespace Zitadel\System\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.system.v1.ExistsDomainResponse</code>
 */
class ExistsDomainResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool exists = 1 [json_name = "exists"];</code>
     */
    protected $exists = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $exists
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\System::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool exists = 1 [json_name = "exists"];</code>
     * @return bool
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * Generated from protobuf field <code>bool exists = 1 [json_name = "exists"];</code>
     * @param bool $var
     * @return $this
     */
    public function setExists($var)
    {
        GPBUtil::checkBool($var);
        $this->exists = $var;

        return $this;
    }

}

