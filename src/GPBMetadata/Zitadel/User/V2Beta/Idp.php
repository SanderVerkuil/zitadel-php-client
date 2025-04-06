<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/user/v2beta/idp.proto

namespace GPBMetadata\Zitadel\User\V2Beta;

class Idp
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x9D\x14\x0A\x1Dzitadel/user/v2beta/idp.proto\x12\x13zitadel.user.v2beta\x1A\x1Cgoogle/protobuf/struct.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\"\xDD\x01\x0A\x0FLDAPCredentials\x12c\x0A\x08username\x18\x01 \x01(\x09BG\x92A72#Username used to login through LDAPJ\x0A\"username\"x\xC8\x01\x80\x01\x01\xFAB\x0Ar\x08\x10\x01\x18\xC8\x01\x90\x01\x01R\x08username\x12e\x0A\x08password\x18\x02 \x01(\x09BI\x92A92#Password used to login through LDAPJ\x0C\"Password1!\"x\xC8\x01\x80\x01\x01\xFAB\x0Ar\x08\x10\x01\x18\xC8\x01\x90\x01\x01R\x08password\"\xD2\x02\x0A\x0CRedirectURLs\x12\xA3\x01\x0A\x0Bsuccess_url\x18\x01 \x01(\x09B\x81\x01\x92Aq2AURL on which the user will be redirected after a successful loginJ&\"https://custom.com/login/idp/success\"x\x80\x10\x80\x01\x01\xFAB\x0Ar\x08\x10\x01\x18\x80\x10\x90\x01\x01R\x0AsuccessUrl\x12\x9B\x01\x0A\x0Bfailure_url\x18\x02 \x01(\x09Bz\x92Aj2=URL on which the user will be redirected after a failed loginJ#\"https://custom.com/login/idp/fail\"x\x80\x10\x80\x01\x01\xFAB\x0Ar\x08\x10\x01\x18\x80\x10\x90\x01\x01R\x0AfailureUrl\"\xC9\x02\x0A\x09IDPIntent\x12Y\x0A\x0Didp_intent_id\x18\x01 \x01(\x09B5\x92A22\x14ID of the IDP intentJ\x14\"163840776835432705\"x\xC8\x01\x80\x01\x01R\x0BidpIntentId\x12r\x0A\x10idp_intent_token\x18\x02 \x01(\x09BH\x92AE2\x17token of the IDP intentJ\$\"SJKL3ioIDpo342ioqw98fjp3sdf32wahb=\"x\xC8\x01\x80\x01\x01R\x0EidpIntentToken\x12m\x0A\x07user_id\x18\x03 \x01(\x09BT\x92AQ26ID of the ZITADEL user if external user already linkedJ\x14\"163840776835432345\"x\xC8\x01R\x06userId\"\xD8\x06\x0A\x0EIDPInformation\x12\x8F\x01\x0A\x05oauth\x18\x01 \x01(\x0B2..zitadel.user.v2beta.IDPOAuthAccessInformationBG\x92AD2BOAuth/OIDC access (and id_token) returned by the identity providerH\x00R\x05oauth\x12\x82\x01\x0A\x04ldap\x18\x06 \x01(\x0B2-.zitadel.user.v2beta.IDPLDAPAccessInformationB=\x92A:28LDAP entity attributes returned by the identity providerH\x00R\x04ldap\x12x\x0A\x04saml\x18\x07 \x01(\x0B2-.zitadel.user.v2beta.IDPSAMLAccessInformationB3\x92A02.SAMLResponse returned by the identity providerH\x00R\x04saml\x12_\x0A\x06idp_id\x18\x02 \x01(\x09BH\x92AE2\x1BID of the identity providerJ&\"d654e6ba-70a3-48ef-a95d-37c8d8a7901a\"R\x05idpId\x12e\x0A\x07user_id\x18\x03 \x01(\x09BL\x92AI2'ID of the user of the identity providerJ\x1E\"6516849804890468048461403518\"R\x06userId\x12d\x0A\x09user_name\x18\x04 \x01(\x09BG\x92AD2-username of the user of the identity providerJ\x13\"user@external.com\"R\x08userName\x12}\x0A\x0Fraw_information\x18\x05 \x01(\x0B2\x17.google.protobuf.StructB;\x92A826complete information returned by the identity providerR\x0ErawInformationB\x08\x0A\x06access\"k\x0A\x19IDPOAuthAccessInformation\x12!\x0A\x0Caccess_token\x18\x01 \x01(\x09R\x0BaccessToken\x12\x1E\x0A\x08id_token\x18\x02 \x01(\x09H\x00R\x07idToken\x88\x01\x01B\x0B\x0A\x09_id_token\"S\x0A\x18IDPLDAPAccessInformation\x127\x0A\x0Aattributes\x18\x01 \x01(\x0B2\x17.google.protobuf.StructR\x0Aattributes\"8\x0A\x18IDPSAMLAccessInformation\x12\x1C\x0A\x09assertion\x18\x01 \x01(\x0CR\x09assertion\"\xE7\x02\x0A\x07IDPLink\x12o\x0A\x06idp_id\x18\x01 \x01(\x09BX\x92AK2\x1BID of the identity providerJ&\"d654e6ba-70a3-48ef-a95d-37c8d8a7901a\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x05idpId\x12u\x0A\x07user_id\x18\x02 \x01(\x09B\\\x92AO2'ID of the user of the identity providerJ\x1E\"6516849804890468048461403518\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x06userId\x12t\x0A\x09user_name\x18\x03 \x01(\x09BW\x92AJ2-username of the user of the identity providerJ\x13\"user@external.com\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x08userNameB6Z4github.com/zitadel/zitadel/pkg/grpc/user/v2beta;userb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

