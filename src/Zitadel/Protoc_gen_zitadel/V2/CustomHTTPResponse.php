<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/protoc_gen_zitadel/v2/options.proto

namespace Zitadel\Protoc_gen_zitadel\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.protoc_gen_zitadel.v2.CustomHTTPResponse</code>
 */
class CustomHTTPResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 success_code = 1 [json_name = "successCode"];</code>
     */
    protected $success_code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $success_code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\ProtocGenZitadel\V2\Options::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 success_code = 1 [json_name = "successCode"];</code>
     * @return int
     */
    public function getSuccessCode()
    {
        return $this->success_code;
    }

    /**
     * Generated from protobuf field <code>int32 success_code = 1 [json_name = "successCode"];</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->success_code = $var;

        return $this;
    }

}

