<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/project.proto

namespace GPBMetadata\Zitadel;

class Project
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object_::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x96 \x0A\x15zitadel/project.proto\x12\x12zitadel.project.v1\x1A\x17validate/validate.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\"\xDF\x03\x0A\x07Project\x12(\x0A\x02id\x18\x01 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x02id\x123\x0A\x07details\x18\x02 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12\$\x0A\x04name\x18\x03 \x01(\x09B\x10\x92A\x0DJ\x0B\"MyProject\"R\x04name\x12Y\x0A\x05state\x18\x04 \x01(\x0E2 .zitadel.project.v1.ProjectStateB!\x92A\x1E2\x1Ccurrent state of the projectR\x05state\x124\x0A\x16project_role_assertion\x18\x05 \x01(\x08R\x14projectRoleAssertion\x12,\x0A\x12project_role_check\x18\x06 \x01(\x08R\x10projectRoleCheck\x12*\x0A\x11has_project_check\x18\x07 \x01(\x08R\x0FhasProjectCheck\x12d\x0A\x18private_labeling_setting\x18\x08 \x01(\x0E2*.zitadel.project.v1.PrivateLabelingSettingR\x16privateLabelingSetting\"\x97\x05\x0A\x0EGrantedProject\x123\x0A\x08grant_id\x18\x01 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x07grantId\x12>\x0A\x0Egranted_org_id\x18\x02 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x0CgrantedOrgId\x12B\x0A\x10granted_org_name\x18\x03 \x01(\x09B\x18\x92A\x15J\x13\"Some Organization\"R\x0EgrantedOrgName\x12C\x0A\x11granted_role_keys\x18\x04 \x03(\x09B\x17\x92A\x14J\x12[\"role.super.man\"]R\x0FgrantedRoleKeys\x12d\x0A\x05state\x18\x05 \x01(\x0E2%.zitadel.project.v1.ProjectGrantStateB'\x92A\$2\"current state of the project grantR\x05state\x127\x0A\x0Aproject_id\x18\x06 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x09projectId\x121\x0A\x0Cproject_name\x18\x07 \x01(\x09B\x0E\x92A\x0BJ\x09\"ZITADEL\"R\x0BprojectName\x12B\x0A\x10project_owner_id\x18\x08 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x0EprojectOwnerId\x12<\x0A\x12project_owner_name\x18\x09 \x01(\x09B\x0E\x92A\x0BJ\x09\"ZITADEL\"R\x10projectOwnerName\x123\x0A\x07details\x18\x0A \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\"\xD5\x01\x0A\x0CProjectQuery\x12E\x0A\x0Aname_query\x18\x01 \x01(\x0B2\$.zitadel.project.v1.ProjectNameQueryH\x00R\x09nameQuery\x12p\x0A\x1Cproject_resource_owner_query\x18\x02 \x01(\x0B2-.zitadel.project.v1.ProjectResourceOwnerQueryH\x00R\x19projectResourceOwnerQueryB\x0C\x0A\x05query\x12\x03\xF8B\x01\"\xAC\x01\x0A\x10ProjectNameQuery\x12*\x0A\x04name\x18\x01 \x01(\x09B\x16\x92A\x0BJ\x09\"ZITADEL\"\xFAB\x05r\x03\x18\xC8\x01R\x04name\x12l\x0A\x06method\x18\x02 \x01(\x0E2\x1B.zitadel.v1.TextQueryMethodB7\x92A,2*defines which text equality method is used\xFAB\x05\x82\x01\x02\x10\x01R\x06method\"d\x0A\x19ProjectResourceOwnerQuery\x12G\x0A\x0Eresource_owner\x18\x01 \x01(\x09B \x92A\x15J\x13\"69629023906488334\"\xFAB\x05r\x03\x18\xC8\x01R\x0DresourceOwner\"\xBE\x01\x0A\x04Role\x12'\x0A\x03key\x18\x01 \x01(\x09B\x15\x92A\x12J\x10\"role.super.man\"R\x03key\x123\x0A\x07details\x18\x02 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x123\x0A\x0Cdisplay_name\x18\x03 \x01(\x09B\x10\x92A\x0DJ\x0B\"Super man\"R\x0BdisplayName\x12#\x0A\x05group\x18\x04 \x01(\x09B\x0D\x92A\x0AJ\x08\"people\"R\x05group\"\xB4\x01\x0A\x09RoleQuery\x12?\x0A\x09key_query\x18\x01 \x01(\x0B2 .zitadel.project.v1.RoleKeyQueryH\x00R\x08keyQuery\x12X\x0A\x12display_name_query\x18\x02 \x01(\x0B2(.zitadel.project.v1.RoleDisplayNameQueryH\x00R\x10displayNameQueryB\x0C\x0A\x05query\x12\x03\xF8B\x01\"\xAD\x01\x0A\x0CRoleKeyQuery\x12/\x0A\x03key\x18\x01 \x01(\x09B\x1D\x92A\x12J\x10\"role.super.man\"\xFAB\x05r\x03\x18\xC8\x01R\x03key\x12l\x0A\x06method\x18\x02 \x01(\x0E2\x1B.zitadel.v1.TextQueryMethodB7\x92A,2*defines which text equality method is used\xFAB\x05\x82\x01\x02\x10\x01R\x06method\"\xBD\x01\x0A\x14RoleDisplayNameQuery\x127\x0A\x0Cdisplay_name\x18\x01 \x01(\x09B\x14\x92A\x09J\x07\"SUPER\"\xFAB\x05r\x03\x18\xC8\x01R\x0BdisplayName\x12l\x0A\x06method\x18\x02 \x01(\x0E2\x1B.zitadel.v1.TextQueryMethodB7\x92A,2*defines which text equality method is used\xFAB\x05\x82\x01\x02\x10\x01R\x06method\"\xCB\x01\x0A\x11ProjectGrantQuery\x12Y\x0A\x12project_name_query\x18\x01 \x01(\x0B2).zitadel.project.v1.GrantProjectNameQueryH\x00R\x10projectNameQuery\x12M\x0A\x0Erole_key_query\x18\x02 \x01(\x0B2%.zitadel.project.v1.GrantRoleKeyQueryH\x00R\x0CroleKeyQueryB\x0C\x0A\x05query\x12\x03\xF8B\x01\"\xF8\x02\x0A\x14AllProjectGrantQuery\x12Y\x0A\x12project_name_query\x18\x01 \x01(\x0B2).zitadel.project.v1.GrantProjectNameQueryH\x00R\x10projectNameQuery\x12M\x0A\x0Erole_key_query\x18\x02 \x01(\x0B2%.zitadel.project.v1.GrantRoleKeyQueryH\x00R\x0CroleKeyQuery\x12N\x0A\x10project_id_query\x18\x03 \x01(\x0B2\".zitadel.project.v1.ProjectIDQueryH\x00R\x0EprojectIdQuery\x12X\x0A\x14granted_org_id_query\x18\x04 \x01(\x0B2%.zitadel.project.v1.GrantedOrgIDQueryH\x00R\x11grantedOrgIdQueryB\x0C\x0A\x05query\x12\x03\xF8B\x01\"\xB1\x01\x0A\x15GrantProjectNameQuery\x12*\x0A\x04name\x18\x01 \x01(\x09B\x16\x92A\x0BJ\x09\"ZITADEL\"\xFAB\x05r\x03\x18\xC8\x01R\x04name\x12l\x0A\x06method\x18\x02 \x01(\x0E2\x1B.zitadel.v1.TextQueryMethodB7\x92A,2*defines which text equality method is used\xFAB\x05\x82\x01\x02\x10\x01R\x06method\"\xBB\x01\x0A\x11GrantRoleKeyQuery\x128\x0A\x08role_key\x18\x01 \x01(\x09B\x1D\x92A\x12J\x10\"role.super.man\"\xFAB\x05r\x03\x18\xC8\x01R\x07roleKey\x12l\x0A\x06method\x18\x02 \x01(\x0E2\x1B.zitadel.v1.TextQueryMethodB7\x92A,2*defines which text equality method is used\xFAB\x05\x82\x01\x02\x10\x01R\x06method\"Q\x0A\x0EProjectIDQuery\x12?\x0A\x0Aproject_id\x18\x01 \x01(\x09B \x92A\x15J\x13\"69629023906488334\"\xFAB\x05r\x03\x18\xC8\x01R\x09projectId\"[\x0A\x11GrantedOrgIDQuery\x12F\x0A\x0Egranted_org_id\x18\x01 \x01(\x09B \x92A\x15J\x13\"69629023906488334\"\xFAB\x05r\x03\x18\xC8\x01R\x0CgrantedOrgId*c\x0A\x0CProjectState\x12\x1D\x0A\x19PROJECT_STATE_UNSPECIFIED\x10\x00\x12\x18\x0A\x14PROJECT_STATE_ACTIVE\x10\x01\x12\x1A\x0A\x16PROJECT_STATE_INACTIVE\x10\x02*\xCB\x01\x0A\x16PrivateLabelingSetting\x12(\x0A\$PRIVATE_LABELING_SETTING_UNSPECIFIED\x10\x00\x12B\x0A>PRIVATE_LABELING_SETTING_ENFORCE_PROJECT_RESOURCE_OWNER_POLICY\x10\x01\x12C\x0A?PRIVATE_LABELING_SETTING_ALLOW_LOGIN_USER_RESOURCE_OWNER_POLICY\x10\x02*z\x0A\x11ProjectGrantState\x12#\x0A\x1FPROJECT_GRANT_STATE_UNSPECIFIED\x10\x00\x12\x1E\x0A\x1APROJECT_GRANT_STATE_ACTIVE\x10\x01\x12 \x0A\x1CPROJECT_GRANT_STATE_INACTIVE\x10\x02B-Z+github.com/zitadel/zitadel/pkg/grpc/projectb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

