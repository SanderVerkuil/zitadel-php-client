<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.GetOIDCInformationResponse</code>
 */
class GetOIDCInformationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string issuer = 1 [json_name = "issuer"];</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>string discovery_endpoint = 2 [json_name = "discoveryEndpoint"];</code>
     */
    protected $discovery_endpoint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer
     *     @type string $discovery_endpoint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string issuer = 1 [json_name = "issuer"];</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Generated from protobuf field <code>string issuer = 1 [json_name = "issuer"];</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string discovery_endpoint = 2 [json_name = "discoveryEndpoint"];</code>
     * @return string
     */
    public function getDiscoveryEndpoint()
    {
        return $this->discovery_endpoint;
    }

    /**
     * Generated from protobuf field <code>string discovery_endpoint = 2 [json_name = "discoveryEndpoint"];</code>
     * @param string $var
     * @return $this
     */
    public function setDiscoveryEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->discovery_endpoint = $var;

        return $this;
    }

}

