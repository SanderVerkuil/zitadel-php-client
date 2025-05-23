<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp/v2/idp_service.proto

namespace Zitadel\Idp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.idp.v2.GetIDPByIDResponse</code>
 */
class GetIDPByIDResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.IDP idp = 1 [json_name = "idp"];</code>
     */
    protected $idp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Idp\V2\IDP $idp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Idp\V2\IdpService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.IDP idp = 1 [json_name = "idp"];</code>
     * @return \Zitadel\Idp\V2\IDP|null
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
     * Generated from protobuf field <code>.zitadel.idp.v2.IDP idp = 1 [json_name = "idp"];</code>
     * @param \Zitadel\Idp\V2\IDP $var
     * @return $this
     */
    public function setIdp($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\IDP::class);
        $this->idp = $var;

        return $this;
    }

}

