<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/session.proto

namespace Zitadel\Session\V2\UserAgent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A header may have multiple values.
 * In Go, headers are defined
 * as map[string][]string, but protobuf
 * doesn't allow this scheme.
 *
 * Generated from protobuf message <code>zitadel.session.v2.UserAgent.HeaderValues</code>
 */
class HeaderValues extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string values = 1 [json_name = "values"];</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string values = 1 [json_name = "values"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated string values = 1 [json_name = "values"];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

}

