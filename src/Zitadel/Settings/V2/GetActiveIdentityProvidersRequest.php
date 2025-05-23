<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/settings/v2/settings_service.proto

namespace Zitadel\Settings\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.settings.v2.GetActiveIdentityProvidersRequest</code>
 */
class GetActiveIdentityProvidersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2.RequestContext ctx = 1 [json_name = "ctx"];</code>
     */
    protected $ctx = null;
    /**
     * Generated from protobuf field <code>optional bool creation_allowed = 2 [json_name = "creationAllowed"];</code>
     */
    protected $creation_allowed = null;
    /**
     * Generated from protobuf field <code>optional bool linking_allowed = 3 [json_name = "linkingAllowed"];</code>
     */
    protected $linking_allowed = null;
    /**
     * Generated from protobuf field <code>optional bool auto_creation = 4 [json_name = "autoCreation"];</code>
     */
    protected $auto_creation = null;
    /**
     * Generated from protobuf field <code>optional bool auto_linking = 5 [json_name = "autoLinking"];</code>
     */
    protected $auto_linking = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2\RequestContext $ctx
     *     @type bool $creation_allowed
     *     @type bool $linking_allowed
     *     @type bool $auto_creation
     *     @type bool $auto_linking
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Settings\V2\SettingsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.RequestContext ctx = 1 [json_name = "ctx"];</code>
     * @return \Zitadel\Object\V2\RequestContext|null
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
     * Generated from protobuf field <code>.zitadel.object.v2.RequestContext ctx = 1 [json_name = "ctx"];</code>
     * @param \Zitadel\Object\V2\RequestContext $var
     * @return $this
     */
    public function setCtx($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2\RequestContext::class);
        $this->ctx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool creation_allowed = 2 [json_name = "creationAllowed"];</code>
     * @return bool
     */
    public function getCreationAllowed()
    {
        return isset($this->creation_allowed) ? $this->creation_allowed : false;
    }

    public function hasCreationAllowed()
    {
        return isset($this->creation_allowed);
    }

    public function clearCreationAllowed()
    {
        unset($this->creation_allowed);
    }

    /**
     * Generated from protobuf field <code>optional bool creation_allowed = 2 [json_name = "creationAllowed"];</code>
     * @param bool $var
     * @return $this
     */
    public function setCreationAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->creation_allowed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool linking_allowed = 3 [json_name = "linkingAllowed"];</code>
     * @return bool
     */
    public function getLinkingAllowed()
    {
        return isset($this->linking_allowed) ? $this->linking_allowed : false;
    }

    public function hasLinkingAllowed()
    {
        return isset($this->linking_allowed);
    }

    public function clearLinkingAllowed()
    {
        unset($this->linking_allowed);
    }

    /**
     * Generated from protobuf field <code>optional bool linking_allowed = 3 [json_name = "linkingAllowed"];</code>
     * @param bool $var
     * @return $this
     */
    public function setLinkingAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->linking_allowed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool auto_creation = 4 [json_name = "autoCreation"];</code>
     * @return bool
     */
    public function getAutoCreation()
    {
        return isset($this->auto_creation) ? $this->auto_creation : false;
    }

    public function hasAutoCreation()
    {
        return isset($this->auto_creation);
    }

    public function clearAutoCreation()
    {
        unset($this->auto_creation);
    }

    /**
     * Generated from protobuf field <code>optional bool auto_creation = 4 [json_name = "autoCreation"];</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoCreation($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_creation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool auto_linking = 5 [json_name = "autoLinking"];</code>
     * @return bool
     */
    public function getAutoLinking()
    {
        return isset($this->auto_linking) ? $this->auto_linking : false;
    }

    public function hasAutoLinking()
    {
        return isset($this->auto_linking);
    }

    public function clearAutoLinking()
    {
        unset($this->auto_linking);
    }

    /**
     * Generated from protobuf field <code>optional bool auto_linking = 5 [json_name = "autoLinking"];</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoLinking($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_linking = $var;

        return $this;
    }

}

