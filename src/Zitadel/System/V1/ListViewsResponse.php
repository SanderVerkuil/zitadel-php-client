<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/system.proto

namespace Zitadel\System\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.system.v1.ListViewsResponse</code>
 */
class ListViewsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *TODO: list details
     *
     * Generated from protobuf field <code>repeated .zitadel.system.v1.View result = 1 [json_name = "result"];</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Zitadel\System\V1\View>|\Google\Protobuf\Internal\RepeatedField $result
     *          TODO: list details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\System::initOnce();
        parent::__construct($data);
    }

    /**
     *TODO: list details
     *
     * Generated from protobuf field <code>repeated .zitadel.system.v1.View result = 1 [json_name = "result"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     *TODO: list details
     *
     * Generated from protobuf field <code>repeated .zitadel.system.v1.View result = 1 [json_name = "result"];</code>
     * @param array<\Zitadel\System\V1\View>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\System\V1\View::class);
        $this->result = $arr;

        return $this;
    }

}

