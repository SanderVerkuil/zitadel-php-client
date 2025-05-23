<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/auth.proto

namespace Zitadel\Auth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.auth.v1.ListMyPasswordlessResponse</code>
 */
class ListMyPasswordlessResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v1.WebAuthNToken result = 1 [json_name = "result"];</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Zitadel\User\V1\WebAuthNToken>|\Google\Protobuf\Internal\RepeatedField $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v1.WebAuthNToken result = 1 [json_name = "result"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>repeated .zitadel.user.v1.WebAuthNToken result = 1 [json_name = "result"];</code>
     * @param array<\Zitadel\User\V1\WebAuthNToken>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\User\V1\WebAuthNToken::class);
        $this->result = $arr;

        return $this;
    }

}

