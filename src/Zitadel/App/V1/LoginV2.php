<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/app.proto

namespace Zitadel\App\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.app.v1.LoginV2</code>
 */
class LoginV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Optionally specify a base uri of the login UI. If unspecified the default URI will be used.
     *
     * Generated from protobuf field <code>optional string base_uri = 1 [json_name = "baseUri"];</code>
     */
    protected $base_uri = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_uri
     *           Optionally specify a base uri of the login UI. If unspecified the default URI will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\App::initOnce();
        parent::__construct($data);
    }

    /**
     * Optionally specify a base uri of the login UI. If unspecified the default URI will be used.
     *
     * Generated from protobuf field <code>optional string base_uri = 1 [json_name = "baseUri"];</code>
     * @return string
     */
    public function getBaseUri()
    {
        return isset($this->base_uri) ? $this->base_uri : '';
    }

    public function hasBaseUri()
    {
        return isset($this->base_uri);
    }

    public function clearBaseUri()
    {
        unset($this->base_uri);
    }

    /**
     * Optionally specify a base uri of the login UI. If unspecified the default URI will be used.
     *
     * Generated from protobuf field <code>optional string base_uri = 1 [json_name = "baseUri"];</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_uri = $var;

        return $this;
    }

}

