<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/management.proto

namespace Zitadel\Management\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.management.v1.RemoveOrgDomainRequest</code>
 */
class RemoveOrgDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string domain = 1 [json_name = "domain", (.validate.rules) = {</code>
     */
    protected $domain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Management::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string domain = 1 [json_name = "domain", (.validate.rules) = {</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>string domain = 1 [json_name = "domain", (.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

}

