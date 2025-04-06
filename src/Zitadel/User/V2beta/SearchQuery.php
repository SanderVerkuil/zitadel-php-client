<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/query.proto

namespace Zitadel\User\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.user.v2beta.SearchQuery</code>
 */
class SearchQuery extends \Google\Protobuf\Internal\Message
{
    protected $query;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\User\V2beta\UserNameQuery $user_name_query
     *     @type \Zitadel\User\V2beta\FirstNameQuery $first_name_query
     *     @type \Zitadel\User\V2beta\LastNameQuery $last_name_query
     *     @type \Zitadel\User\V2beta\NickNameQuery $nick_name_query
     *     @type \Zitadel\User\V2beta\DisplayNameQuery $display_name_query
     *     @type \Zitadel\User\V2beta\EmailQuery $email_query
     *     @type \Zitadel\User\V2beta\StateQuery $state_query
     *     @type \Zitadel\User\V2beta\TypeQuery $type_query
     *     @type \Zitadel\User\V2beta\LoginNameQuery $login_name_query
     *     @type \Zitadel\User\V2beta\InUserIDQuery $in_user_ids_query
     *     @type \Zitadel\User\V2beta\OrQuery $or_query
     *     @type \Zitadel\User\V2beta\AndQuery $and_query
     *     @type \Zitadel\User\V2beta\NotQuery $not_query
     *     @type \Zitadel\User\V2beta\InUserEmailsQuery $in_user_emails_query
     *     @type \Zitadel\User\V2beta\OrganizationIdQuery $organization_id_query
     *     @type \Zitadel\User\V2beta\PhoneQuery $phone_query
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\User\V2Beta\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.UserNameQuery user_name_query = 1 [json_name = "userNameQuery"];</code>
     * @return \Zitadel\User\V2beta\UserNameQuery|null
     */
    public function getUserNameQuery()
    {
        return $this->readOneof(1);
    }

    public function hasUserNameQuery()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.UserNameQuery user_name_query = 1 [json_name = "userNameQuery"];</code>
     * @param \Zitadel\User\V2beta\UserNameQuery $var
     * @return $this
     */
    public function setUserNameQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\UserNameQuery::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.FirstNameQuery first_name_query = 2 [json_name = "firstNameQuery"];</code>
     * @return \Zitadel\User\V2beta\FirstNameQuery|null
     */
    public function getFirstNameQuery()
    {
        return $this->readOneof(2);
    }

    public function hasFirstNameQuery()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.FirstNameQuery first_name_query = 2 [json_name = "firstNameQuery"];</code>
     * @param \Zitadel\User\V2beta\FirstNameQuery $var
     * @return $this
     */
    public function setFirstNameQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\FirstNameQuery::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.LastNameQuery last_name_query = 3 [json_name = "lastNameQuery"];</code>
     * @return \Zitadel\User\V2beta\LastNameQuery|null
     */
    public function getLastNameQuery()
    {
        return $this->readOneof(3);
    }

    public function hasLastNameQuery()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.LastNameQuery last_name_query = 3 [json_name = "lastNameQuery"];</code>
     * @param \Zitadel\User\V2beta\LastNameQuery $var
     * @return $this
     */
    public function setLastNameQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\LastNameQuery::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.NickNameQuery nick_name_query = 4 [json_name = "nickNameQuery"];</code>
     * @return \Zitadel\User\V2beta\NickNameQuery|null
     */
    public function getNickNameQuery()
    {
        return $this->readOneof(4);
    }

    public function hasNickNameQuery()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.NickNameQuery nick_name_query = 4 [json_name = "nickNameQuery"];</code>
     * @param \Zitadel\User\V2beta\NickNameQuery $var
     * @return $this
     */
    public function setNickNameQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\NickNameQuery::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.DisplayNameQuery display_name_query = 5 [json_name = "displayNameQuery"];</code>
     * @return \Zitadel\User\V2beta\DisplayNameQuery|null
     */
    public function getDisplayNameQuery()
    {
        return $this->readOneof(5);
    }

    public function hasDisplayNameQuery()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.DisplayNameQuery display_name_query = 5 [json_name = "displayNameQuery"];</code>
     * @param \Zitadel\User\V2beta\DisplayNameQuery $var
     * @return $this
     */
    public function setDisplayNameQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\DisplayNameQuery::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.EmailQuery email_query = 6 [json_name = "emailQuery"];</code>
     * @return \Zitadel\User\V2beta\EmailQuery|null
     */
    public function getEmailQuery()
    {
        return $this->readOneof(6);
    }

    public function hasEmailQuery()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.EmailQuery email_query = 6 [json_name = "emailQuery"];</code>
     * @param \Zitadel\User\V2beta\EmailQuery $var
     * @return $this
     */
    public function setEmailQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\EmailQuery::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.StateQuery state_query = 7 [json_name = "stateQuery"];</code>
     * @return \Zitadel\User\V2beta\StateQuery|null
     */
    public function getStateQuery()
    {
        return $this->readOneof(7);
    }

    public function hasStateQuery()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.StateQuery state_query = 7 [json_name = "stateQuery"];</code>
     * @param \Zitadel\User\V2beta\StateQuery $var
     * @return $this
     */
    public function setStateQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\StateQuery::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.TypeQuery type_query = 8 [json_name = "typeQuery"];</code>
     * @return \Zitadel\User\V2beta\TypeQuery|null
     */
    public function getTypeQuery()
    {
        return $this->readOneof(8);
    }

    public function hasTypeQuery()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.TypeQuery type_query = 8 [json_name = "typeQuery"];</code>
     * @param \Zitadel\User\V2beta\TypeQuery $var
     * @return $this
     */
    public function setTypeQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\TypeQuery::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.LoginNameQuery login_name_query = 9 [json_name = "loginNameQuery"];</code>
     * @return \Zitadel\User\V2beta\LoginNameQuery|null
     */
    public function getLoginNameQuery()
    {
        return $this->readOneof(9);
    }

    public function hasLoginNameQuery()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.LoginNameQuery login_name_query = 9 [json_name = "loginNameQuery"];</code>
     * @param \Zitadel\User\V2beta\LoginNameQuery $var
     * @return $this
     */
    public function setLoginNameQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\LoginNameQuery::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.InUserIDQuery in_user_ids_query = 10 [json_name = "inUserIdsQuery"];</code>
     * @return \Zitadel\User\V2beta\InUserIDQuery|null
     */
    public function getInUserIdsQuery()
    {
        return $this->readOneof(10);
    }

    public function hasInUserIdsQuery()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.InUserIDQuery in_user_ids_query = 10 [json_name = "inUserIdsQuery"];</code>
     * @param \Zitadel\User\V2beta\InUserIDQuery $var
     * @return $this
     */
    public function setInUserIdsQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\InUserIDQuery::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.OrQuery or_query = 11 [json_name = "orQuery"];</code>
     * @return \Zitadel\User\V2beta\OrQuery|null
     */
    public function getOrQuery()
    {
        return $this->readOneof(11);
    }

    public function hasOrQuery()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.OrQuery or_query = 11 [json_name = "orQuery"];</code>
     * @param \Zitadel\User\V2beta\OrQuery $var
     * @return $this
     */
    public function setOrQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\OrQuery::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.AndQuery and_query = 12 [json_name = "andQuery"];</code>
     * @return \Zitadel\User\V2beta\AndQuery|null
     */
    public function getAndQuery()
    {
        return $this->readOneof(12);
    }

    public function hasAndQuery()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.AndQuery and_query = 12 [json_name = "andQuery"];</code>
     * @param \Zitadel\User\V2beta\AndQuery $var
     * @return $this
     */
    public function setAndQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\AndQuery::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.NotQuery not_query = 13 [json_name = "notQuery"];</code>
     * @return \Zitadel\User\V2beta\NotQuery|null
     */
    public function getNotQuery()
    {
        return $this->readOneof(13);
    }

    public function hasNotQuery()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.NotQuery not_query = 13 [json_name = "notQuery"];</code>
     * @param \Zitadel\User\V2beta\NotQuery $var
     * @return $this
     */
    public function setNotQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\NotQuery::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.InUserEmailsQuery in_user_emails_query = 14 [json_name = "inUserEmailsQuery"];</code>
     * @return \Zitadel\User\V2beta\InUserEmailsQuery|null
     */
    public function getInUserEmailsQuery()
    {
        return $this->readOneof(14);
    }

    public function hasInUserEmailsQuery()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.InUserEmailsQuery in_user_emails_query = 14 [json_name = "inUserEmailsQuery"];</code>
     * @param \Zitadel\User\V2beta\InUserEmailsQuery $var
     * @return $this
     */
    public function setInUserEmailsQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\InUserEmailsQuery::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.OrganizationIdQuery organization_id_query = 15 [json_name = "organizationIdQuery"];</code>
     * @return \Zitadel\User\V2beta\OrganizationIdQuery|null
     */
    public function getOrganizationIdQuery()
    {
        return $this->readOneof(15);
    }

    public function hasOrganizationIdQuery()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.OrganizationIdQuery organization_id_query = 15 [json_name = "organizationIdQuery"];</code>
     * @param \Zitadel\User\V2beta\OrganizationIdQuery $var
     * @return $this
     */
    public function setOrganizationIdQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\OrganizationIdQuery::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.PhoneQuery phone_query = 16 [json_name = "phoneQuery"];</code>
     * @return \Zitadel\User\V2beta\PhoneQuery|null
     */
    public function getPhoneQuery()
    {
        return $this->readOneof(16);
    }

    public function hasPhoneQuery()
    {
        return $this->hasOneof(16);
    }

    /**
     * Generated from protobuf field <code>.zitadel.user.v2beta.PhoneQuery phone_query = 16 [json_name = "phoneQuery"];</code>
     * @param \Zitadel\User\V2beta\PhoneQuery $var
     * @return $this
     */
    public function setPhoneQuery($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\User\V2beta\PhoneQuery::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->whichOneof("query");
    }

}

