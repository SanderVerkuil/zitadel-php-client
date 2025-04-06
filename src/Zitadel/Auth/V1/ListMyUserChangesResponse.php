<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/auth.proto

namespace Zitadel\Auth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.auth.v1.ListMyUserChangesResponse</code>
 */
class ListMyUserChangesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * zitadel.v1.ListDetails details = 1; was always returned empty (as we cannot get the necessary info)
     *
     * Generated from protobuf field <code>repeated .zitadel.change.v1.Change result = 2 [json_name = "result"];</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Zitadel\Change\V1\Change>|\Google\Protobuf\Internal\RepeatedField $result
     *           zitadel.v1.ListDetails details = 1; was always returned empty (as we cannot get the necessary info)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * zitadel.v1.ListDetails details = 1; was always returned empty (as we cannot get the necessary info)
     *
     * Generated from protobuf field <code>repeated .zitadel.change.v1.Change result = 2 [json_name = "result"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * zitadel.v1.ListDetails details = 1; was always returned empty (as we cannot get the necessary info)
     *
     * Generated from protobuf field <code>repeated .zitadel.change.v1.Change result = 2 [json_name = "result"];</code>
     * @param array<\Zitadel\Change\V1\Change>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Zitadel\Change\V1\Change::class);
        $this->result = $arr;

        return $this;
    }

}

