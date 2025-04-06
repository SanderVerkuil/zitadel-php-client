<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/object/v2/object.proto

namespace Zitadel\Object\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.object.v2.Organization</code>
 */
class Organization extends \Google\Protobuf\Internal\Message
{
    protected $org;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type string $org_domain
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Object\V2\Object::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId"];</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->readOneof(1);
    }

    public function hasOrgId()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string org_id = 1 [json_name = "orgId"];</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string org_domain = 2 [json_name = "orgDomain"];</code>
     * @return string
     */
    public function getOrgDomain()
    {
        return $this->readOneof(2);
    }

    public function hasOrgDomain()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string org_domain = 2 [json_name = "orgDomain"];</code>
     * @param string $var
     * @return $this
     */
    public function setOrgDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOrg()
    {
        return $this->whichOneof("org");
    }

}

