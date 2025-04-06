<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/session_service.proto

namespace Zitadel\Session\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.session.v2.CreateSessionResponse</code>
 */
class CreateSessionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * Generated from protobuf field <code>string session_id = 2 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $session_id = '';
    /**
     * Generated from protobuf field <code>string session_token = 3 [json_name = "sessionToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $session_token = '';
    /**
     * Generated from protobuf field <code>.zitadel.session.v2.Challenges challenges = 4 [json_name = "challenges"];</code>
     */
    protected $challenges = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2\Details $details
     *     @type string $session_id
     *     @type string $session_token
     *     @type \Zitadel\Session\V2\Challenges $challenges
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Session\V2\SessionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2\Details|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string session_id = 2 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>string session_id = 2 [json_name = "sessionId", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string session_token = 3 [json_name = "sessionToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getSessionToken()
    {
        return $this->session_token;
    }

    /**
     * Generated from protobuf field <code>string session_token = 3 [json_name = "sessionToken", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSessionToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2.Challenges challenges = 4 [json_name = "challenges"];</code>
     * @return \Zitadel\Session\V2\Challenges|null
     */
    public function getChallenges()
    {
        return $this->challenges;
    }

    public function hasChallenges()
    {
        return isset($this->challenges);
    }

    public function clearChallenges()
    {
        unset($this->challenges);
    }

    /**
     * Generated from protobuf field <code>.zitadel.session.v2.Challenges challenges = 4 [json_name = "challenges"];</code>
     * @param \Zitadel\Session\V2\Challenges $var
     * @return $this
     */
    public function setChallenges($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Session\V2\Challenges::class);
        $this->challenges = $var;

        return $this;
    }

}

