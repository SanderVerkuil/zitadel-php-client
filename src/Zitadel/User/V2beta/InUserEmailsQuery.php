<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/query.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query for users with email in list of emails.
 *
 * Generated from protobuf message <code>zitadel.user.v2beta.InUserEmailsQuery</code>
 */
class InUserEmailsQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string user_emails = 1 [json_name = "userEmails", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    private $user_emails;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $user_emails
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string user_emails = 1 [json_name = "userEmails", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserEmails()
    {
        return $this->user_emails;
    }

    /**
     * Generated from protobuf field <code>repeated string user_emails = 1 [json_name = "userEmails", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_emails = $arr;

        return $this;
    }

}

