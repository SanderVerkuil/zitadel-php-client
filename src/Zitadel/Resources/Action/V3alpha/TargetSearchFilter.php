<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/resources/action/v3alpha/query.proto

namespace Zitadel\Resources\Action\V3alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.resources.action.v3alpha.TargetSearchFilter</code>
 */
class TargetSearchFilter extends \Google\Protobuf\Internal\Message
{
    protected $filter;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Resources\Action\V3alpha\TargetNameFilter $target_name_filter
     *     @type \Zitadel\Resources\Action\V3alpha\InTargetIDsFilter $in_target_ids_filter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Resources\Action\V3Alpha\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.TargetNameFilter target_name_filter = 1 [json_name = "targetNameFilter"];</code>
     * @return \Zitadel\Resources\Action\V3alpha\TargetNameFilter|null
     */
    public function getTargetNameFilter()
    {
        return $this->readOneof(1);
    }

    public function hasTargetNameFilter()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.TargetNameFilter target_name_filter = 1 [json_name = "targetNameFilter"];</code>
     * @param \Zitadel\Resources\Action\V3alpha\TargetNameFilter $var
     * @return $this
     */
    public function setTargetNameFilter($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\TargetNameFilter::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.InTargetIDsFilter in_target_ids_filter = 2 [json_name = "inTargetIdsFilter"];</code>
     * @return \Zitadel\Resources\Action\V3alpha\InTargetIDsFilter|null
     */
    public function getInTargetIdsFilter()
    {
        return $this->readOneof(2);
    }

    public function hasInTargetIdsFilter()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.resources.action.v3alpha.InTargetIDsFilter in_target_ids_filter = 2 [json_name = "inTargetIdsFilter"];</code>
     * @param \Zitadel\Resources\Action\V3alpha\InTargetIDsFilter $var
     * @return $this
     */
    public function setInTargetIdsFilter($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Resources\Action\V3alpha\InTargetIDsFilter::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
        return $this->whichOneof("filter");
    }

}

