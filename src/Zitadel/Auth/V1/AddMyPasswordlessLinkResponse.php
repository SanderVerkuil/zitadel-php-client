<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/auth.proto

namespace Zitadel\Auth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.auth.v1.AddMyPasswordlessLinkResponse</code>
 */
class AddMyPasswordlessLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>string link = 2 [json_name = "link", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $link = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration expiration = 3 [json_name = "expiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $expiration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\V1\ObjectDetails $details
     *     @type string $link
     *     @type \Google\Protobuf\Duration $expiration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     * @return \Zitadel\V1\ObjectDetails|null
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
     * Generated from protobuf field <code>.zitadel.v1.ObjectDetails details = 1 [json_name = "details"];</code>
     * @param \Zitadel\V1\ObjectDetails $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\V1\ObjectDetails::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string link = 2 [json_name = "link", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Generated from protobuf field <code>string link = 2 [json_name = "link", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration expiration = 3 [json_name = "expiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    public function hasExpiration()
    {
        return isset($this->expiration);
    }

    public function clearExpiration()
    {
        unset($this->expiration);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration expiration = 3 [json_name = "expiration", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setExpiration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->expiration = $var;

        return $this;
    }

}

