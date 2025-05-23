<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/v1.proto

namespace Zitadel\V1\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.v1.v1.DataOIDCIDP</code>
 */
class DataOIDCIDP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string idp_id = 1 [json_name = "idpId"];</code>
     */
    protected $idp_id = '';
    /**
     * Generated from protobuf field <code>.zitadel.management.v1.AddOrgOIDCIDPRequest idp = 2 [json_name = "idp"];</code>
     */
    protected $idp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $idp_id
     *     @type \Zitadel\Management\V1\AddOrgOIDCIDPRequest $idp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\V1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string idp_id = 1 [json_name = "idpId"];</code>
     * @return string
     */
    public function getIdpId()
    {
        return $this->idp_id;
    }

    /**
     * Generated from protobuf field <code>string idp_id = 1 [json_name = "idpId"];</code>
     * @param string $var
     * @return $this
     */
    public function setIdpId($var)
    {
        GPBUtil::checkString($var, True);
        $this->idp_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.AddOrgOIDCIDPRequest idp = 2 [json_name = "idp"];</code>
     * @return \Zitadel\Management\V1\AddOrgOIDCIDPRequest|null
     */
    public function getIdp()
    {
        return $this->idp;
    }

    public function hasIdp()
    {
        return isset($this->idp);
    }

    public function clearIdp()
    {
        unset($this->idp);
    }

    /**
     * Generated from protobuf field <code>.zitadel.management.v1.AddOrgOIDCIDPRequest idp = 2 [json_name = "idp"];</code>
     * @param \Zitadel\Management\V1\AddOrgOIDCIDPRequest $var
     * @return $this
     */
    public function setIdp($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Management\V1\AddOrgOIDCIDPRequest::class);
        $this->idp = $var;

        return $this;
    }

}

