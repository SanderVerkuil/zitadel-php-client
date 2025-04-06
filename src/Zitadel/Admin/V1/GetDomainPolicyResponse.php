<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/admin.proto

namespace Zitadel\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.admin.v1.GetDomainPolicyResponse</code>
 */
class GetDomainPolicyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.DomainPolicy policy = 1 [json_name = "policy"];</code>
     */
    protected $policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Policy\V1\DomainPolicy $policy
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.DomainPolicy policy = 1 [json_name = "policy"];</code>
     * @return \Zitadel\Policy\V1\DomainPolicy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * Generated from protobuf field <code>.zitadel.policy.v1.DomainPolicy policy = 1 [json_name = "policy"];</code>
     * @param \Zitadel\Policy\V1\DomainPolicy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Policy\V1\DomainPolicy::class);
        $this->policy = $var;

        return $this;
    }

}

