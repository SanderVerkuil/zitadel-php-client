<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.DeactivateIDPRequest</code>
 */
class DeactivateIDPRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string idp_id = 1 [json_name = "idpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $idp_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $idp_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string idp_id = 1 [json_name = "idpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getIdpId()
    {
        return $this->idp_id;
    }

    /**
     * Generated from protobuf field <code>string idp_id = 1 [json_name = "idpId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIdpId($var)
    {
        GPBUtil::checkString($var, True);
        $this->idp_id = $var;

        return $this;
    }

}

