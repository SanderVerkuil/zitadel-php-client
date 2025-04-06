<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2beta/settings_service.proto

namespace Zitadel\Settings\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2beta.GetLegalAndSupportSettingsRequest</code>
 */
class GetLegalAndSupportSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.RequestContext ctx = 1 [json_name = "ctx"];</code>
     */
    protected $ctx = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2beta\RequestContext $ctx
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2Beta\SettingsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.RequestContext ctx = 1 [json_name = "ctx"];</code>
     * @return \Zitadel\Object\V2beta\RequestContext|null
     */
    public function getCtx()
    {
        return $this->ctx;
    }

    public function hasCtx()
    {
        return isset($this->ctx);
    }

    public function clearCtx()
    {
        unset($this->ctx);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2beta.RequestContext ctx = 1 [json_name = "ctx"];</code>
     * @param \Zitadel\Object\V2beta\RequestContext $var
     * @return $this
     */
    public function setCtx($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2beta\RequestContext::class);
        $this->ctx = $var;

        return $this;
    }

}

