<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp.proto

namespace GPBMetadata\Zitadel;

class Idp
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object_::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xB1_\x0A\x11zitadel/idp.proto\x12\x0Ezitadel.idp.v1\x1A\x17validate/validate.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x1Egoogle/protobuf/duration.proto\"\x83\x05\x0A\x03IDP\x12(\x0A\x02id\x18\x01 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x02id\x123\x0A\x07details\x18\x02 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12W\x0A\x05state\x18\x03 \x01(\x0E2\x18.zitadel.idp.v1.IDPStateB'\x92A\$2\"the state of the identity providerR\x05state\x12!\x0A\x04name\x18\x04 \x01(\x09B\x0D\x92A\x0AJ\x08\"google\"R\x04name\x12\x90\x01\x0A\x0Cstyling_type\x18\x05 \x01(\x0E2\x1E.zitadel.idp.v1.IDPStylingTypeBM\x92AJ2Hsome identity providers specify the styling of the button to their loginR\x0BstylingType\x12d\x0A\x05owner\x18\x06 \x01(\x0E2\x1C.zitadel.idp.v1.IDPOwnerTypeB0\x92A-2+the administrator of this identity providerR\x05owner\x12=\x0A\x0Boidc_config\x18\x07 \x01(\x0B2\x1A.zitadel.idp.v1.OIDCConfigH\x00R\x0AoidcConfig\x12:\x0A\x0Ajwt_config\x18\x09 \x01(\x0B2\x19.zitadel.idp.v1.JWTConfigH\x00R\x09jwtConfig\x12#\x0A\x0Dauto_register\x18\x08 \x01(\x08R\x0CautoRegisterB\x08\x0A\x06config\"\xC6\x04\x0A\x0BIDPUserLink\x12E\x0A\x07user_id\x18\x01 \x01(\x09B,\x92A)2\x12the id of the userJ\x13\"69629023906488334\"R\x06userId\x12P\x0A\x06idp_id\x18\x02 \x01(\x09B9\x92A62\x1Fthe id of the identity providerJ\x13\"69629023906488334\"R\x05idpId\x12K\x0A\x08idp_name\x18\x03 \x01(\x09B0\x92A-2!the name of the identity providerJ\x08\"google\"R\x07idpName\x12r\x0A\x10provided_user_id\x18\x04 \x01(\x09BH\x92AE24the id of the user provided by the identity providerJ\x0D\"as-12-df-89\"R\x0EprovidedUserId\x12n\x0A\x12provided_user_name\x18\x05 \x01(\x09B@\x92A=2\x1Fthe id of the identity providerJ\x1A\"gigi.long-neck@gmail.com\"R\x10providedUserName\x12m\x0A\x08idp_type\x18\x06 \x01(\x0E2\x17.zitadel.idp.v1.IDPTypeB9\x92A624the authorization framework of the identity providerR\x07idpType\"\xB6\x02\x0A\x12IDPLoginPolicyLink\x12P\x0A\x06idp_id\x18\x01 \x01(\x09B9\x92A62\x1Fthe id of the identity providerJ\x13\"69629023906488334\"R\x05idpId\x12K\x0A\x08idp_name\x18\x02 \x01(\x09B0\x92A-2!the name of the identity providerJ\x08\"google\"R\x07idpName\x12\x80\x01\x0A\x08idp_type\x18\x03 \x01(\x0E2\x17.zitadel.idp.v1.IDPTypeBL\x92AI24the authorization framework of the identity providerJ\x11[\"IDP_TYPE_OIDC\"]R\x07idpType\"\xF7\x04\x0A\x0AOIDCConfig\x12N\x0A\x09client_id\x18\x01 \x01(\x09B1\x92A.2,client id generated by the identity providerR\x08clientId\x12d\x0A\x06issuer\x18\x02 \x01(\x09BL\x92AI2(the OIDC issuer of the identity providerJ\x1D\"https://accounts.google.com\"R\x06issuer\x12\x88\x01\x0A\x06scopes\x18\x03 \x03(\x09Bp\x92Am2Kthe scopes requested by ZITADEL during the request on the identity providerJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\x12\x99\x01\x0A\x14display_name_mapping\x18\x04 \x01(\x0E2 .zitadel.idp.v1.OIDCMappingFieldBE\x92AB2@definition which field is mapped to the display name of the userR\x12displayNameMapping\x12\x8B\x01\x0A\x10username_mapping\x18\x05 \x01(\x0E2 .zitadel.idp.v1.OIDCMappingFieldB>\x92A;29definition which field is mapped to the email of the userR\x0FusernameMapping\"\x9E\x04\x0A\x09JWTConfig\x12|\x0A\x0Cjwt_endpoint\x18\x01 \x01(\x09BY\x92AL2+the endpoint where the JWT can be extractedJ\x1D\"https://accounts.google.com\"\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0BjwtEndpoint\x12l\x0A\x06issuer\x18\x02 \x01(\x09BT\x92AG2&the issuer of the JWT (for validation)J\x1D\"https://accounts.google.com\"\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x06issuer\x12\x98\x01\x0A\x0Dkeys_endpoint\x18\x03 \x01(\x09Bs\x92Af2@the endpoint to the key (JWK) which is used to sign the JWT withJ\"\"https://accounts.google.com/keys\"\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0CkeysEndpoint\x12\x89\x01\x0A\x0Bheader_name\x18\x04 \x01(\x09Bh\x92A[2Ithe name of the header where the JWT is sent in, default is authorizationJ\x0E\"x-auth-token\"\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0AheaderName\">\x0A\x0AIDPIDQuery\x120\x0A\x02id\x18\x01 \x01(\x09B \x92A\x15J\x13\"69629023906488334\"\xFAB\x05r\x03\x18\xC8\x01R\x02id\"\xA7\x01\x0A\x0CIDPNameQuery\x12)\x0A\x04name\x18\x01 \x01(\x09B\x15\x92A\x0AJ\x08\"google\"\xFAB\x05r\x03\x18\xC8\x01R\x04name\x12l\x0A\x06method\x18\x02 \x01(\x0E2\x1B.zitadel.v1.TextQueryMethodB7\x92A,2*defines which text equality method is used\xFAB\x05\x82\x01\x02\x10\x01R\x06method\"\x8D\x01\x0A\x11IDPOwnerTypeQuery\x12x\x0A\x0Aowner_type\x18\x01 \x01(\x0E2\x1C.zitadel.idp.v1.IDPOwnerTypeB;\x92A02.search for custom or global identity providers\xFAB\x05\x82\x01\x02\x10\x01R\x09ownerType\"\xDA\x02\x0A\x08Provider\x12(\x0A\x02id\x18\x01 \x01(\x09B\x18\x92A\x15J\x13\"69629023906488334\"R\x02id\x123\x0A\x07details\x18\x02 \x01(\x0B2\x19.zitadel.v1.ObjectDetailsR\x07details\x12.\x0A\x05state\x18\x03 \x01(\x0E2\x18.zitadel.idp.v1.IDPStateR\x05state\x12!\x0A\x04name\x18\x04 \x01(\x09B\x0D\x92A\x0AJ\x08\"Google\"R\x04name\x122\x0A\x05owner\x18\x05 \x01(\x0E2\x1C.zitadel.idp.v1.IDPOwnerTypeR\x05owner\x120\x0A\x04type\x18\x06 \x01(\x0E2\x1C.zitadel.idp.v1.ProviderTypeR\x04type\x126\x0A\x06config\x18\x07 \x01(\x0B2\x1E.zitadel.idp.v1.ProviderConfigR\x06config\"\x8C\x06\x0A\x0EProviderConfig\x121\x0A\x07options\x18\x01 \x01(\x0B2\x17.zitadel.idp.v1.OptionsR\x07options\x120\x0A\x04ldap\x18\x02 \x01(\x0B2\x1A.zitadel.idp.v1.LDAPConfigH\x00R\x04ldap\x126\x0A\x06google\x18\x03 \x01(\x0B2\x1C.zitadel.idp.v1.GoogleConfigH\x00R\x06google\x123\x0A\x05oauth\x18\x04 \x01(\x0B2\x1B.zitadel.idp.v1.OAuthConfigH\x00R\x05oauth\x127\x0A\x04oidc\x18\x05 \x01(\x0B2!.zitadel.idp.v1.GenericOIDCConfigH\x00R\x04oidc\x12-\x0A\x03jwt\x18\x06 \x01(\x0B2\x19.zitadel.idp.v1.JWTConfigH\x00R\x03jwt\x126\x0A\x06github\x18\x07 \x01(\x0B2\x1C.zitadel.idp.v1.GitHubConfigH\x00R\x06github\x12K\x0A\x09github_es\x18\x08 \x01(\x0B2,.zitadel.idp.v1.GitHubEnterpriseServerConfigH\x00R\x08githubEs\x126\x0A\x06gitlab\x18\x09 \x01(\x0B2\x1C.zitadel.idp.v1.GitLabConfigH\x00R\x06gitlab\x12V\x0A\x12gitlab_self_hosted\x18\x0A \x01(\x0B2&.zitadel.idp.v1.GitLabSelfHostedConfigH\x00R\x10gitlabSelfHosted\x12:\x0A\x08azure_ad\x18\x0B \x01(\x0B2\x1D.zitadel.idp.v1.AzureADConfigH\x00R\x07azureAd\x123\x0A\x05apple\x18\x0C \x01(\x0B2\x1B.zitadel.idp.v1.AppleConfigH\x00R\x05apple\x120\x0A\x04saml\x18\x0D \x01(\x0B2\x1A.zitadel.idp.v1.SAMLConfigH\x00R\x04samlB\x08\x0A\x06config\"\xD1\x06\x0A\x0BOAuthConfig\x12[\x0A\x09client_id\x18\x01 \x01(\x09B>\x92A;2,client id generated by the identity providerJ\x0B\"client-id\"R\x08clientId\x12\xA4\x01\x0A\x16authorization_endpoint\x18\x02 \x01(\x09Bm\x92Aj28the endpoint where ZITADEL send the user to authenticateJ.\"https://accounts.google.com/o/oauth2/v2/auth\"R\x15authorizationEndpoint\x12\x7F\x0A\x0Etoken_endpoint\x18\x03 \x01(\x09BX\x92AU2,the endpoint where ZITADEL can get the tokenJ%\"https://oauth2.googleapis.com/token\"R\x0DtokenEndpoint\x12\x95\x01\x0A\x0Duser_endpoint\x18\x04 \x01(\x09Bp\x92Am27the endpoint where ZITADEL can get the user informationJ2\"https://openidconnect.googleapis.com/v1/userinfo\"R\x0CuserEndpoint\x12\x88\x01\x0A\x06scopes\x18\x05 \x03(\x09Bp\x92Am2Kthe scopes requested by ZITADEL during the request on the identity providerJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\x12\x7F\x0A\x0Cid_attribute\x18\x06 \x01(\x09B\\\x92AY2Ldefines how the attribute is called where ZITADEL can get the id of the userJ\x09\"user_id\"R\x0BidAttribute\x12\x19\x0A\x08use_pkce\x18\x07 \x01(\x08R\x07usePkce\"\x9F\x04\x0A\x11GenericOIDCConfig\x12e\x0A\x06issuer\x18\x01 \x01(\x09BM\x92AJ2(the OIDC issuer of the identity providerJ\x1E\"https://accounts.google.com/\"R\x06issuer\x12[\x0A\x09client_id\x18\x02 \x01(\x09B>\x92A;2,client id generated by the identity providerJ\x0B\"client-id\"R\x08clientId\x12\x88\x01\x0A\x06scopes\x18\x03 \x03(\x09Bp\x92Am2Kthe scopes requested by ZITADEL during the request on the identity providerJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\x12\x94\x01\x0A\x13is_id_token_mapping\x18\x04 \x01(\x08Be\x92Ab2Zif true, provider information get mapped from the id token, not from the userinfo endpointJ\x04trueR\x10isIdTokenMapping\x12\$\x0A\x08use_pkce\x18\x05 \x01(\x08B\x09\x92A\x06J\x04trueR\x07usePkce\"\xD9\x01\x0A\x0CGitHubConfig\x12N\x0A\x09client_id\x18\x01 \x01(\x09B1\x92A.2\x1Fthe client ID of the GitHub AppJ\x0B\"client-id\"R\x08clientId\x12y\x0A\x06scopes\x18\x02 \x03(\x09Ba\x92A^2<the scopes requested by ZITADEL during the request to GitHubJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\"\xEC\x02\x0A\x1CGitHubEnterpriseServerConfig\x12N\x0A\x09client_id\x18\x01 \x01(\x09B1\x92A.2\x1Fthe client ID of the GitHub AppJ\x0B\"client-id\"R\x08clientId\x125\x0A\x16authorization_endpoint\x18\x02 \x01(\x09R\x15authorizationEndpoint\x12%\x0A\x0Etoken_endpoint\x18\x03 \x01(\x09R\x0DtokenEndpoint\x12#\x0A\x0Duser_endpoint\x18\x04 \x01(\x09R\x0CuserEndpoint\x12y\x0A\x06scopes\x18\x05 \x03(\x09Ba\x92A^2<the scopes requested by ZITADEL during the request to GitHubJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\"\xDD\x01\x0A\x0CGoogleConfig\x12R\x0A\x09client_id\x18\x01 \x01(\x09B5\x92A22#client id of the Google applicationJ\x0B\"client-id\"R\x08clientId\x12y\x0A\x06scopes\x18\x02 \x03(\x09Ba\x92A^2<the scopes requested by ZITADEL during the request to GoogleJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\"\xDD\x01\x0A\x0CGitLabConfig\x12R\x0A\x09client_id\x18\x01 \x01(\x09B5\x92A22#client id of the GitLab applicationJ\x0B\"client-id\"R\x08clientId\x12y\x0A\x06scopes\x18\x02 \x03(\x09Ba\x92A^2<the scopes requested by ZITADEL during the request to GitLabJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\"\xFF\x01\x0A\x16GitLabSelfHostedConfig\x12\x16\x0A\x06issuer\x18\x01 \x01(\x09R\x06issuer\x12R\x0A\x09client_id\x18\x02 \x01(\x09B5\x92A22#client id of the GitLab applicationJ\x0B\"client-id\"R\x08clientId\x12y\x0A\x06scopes\x18\x03 \x03(\x09Ba\x92A^2<the scopes requested by ZITADEL during the request to GitLabJ\x1E[\"openid\", \"profile\", \"email\"]R\x06scopes\"\xF3\x02\x0A\x0ALDAPConfig\x12\x18\x0A\x07servers\x18\x01 \x03(\x09R\x07servers\x12\x1B\x0A\x09start_tls\x18\x02 \x01(\x08R\x08startTls\x12\x17\x0A\x07base_dn\x18\x03 \x01(\x09R\x06baseDn\x12\x17\x0A\x07bind_dn\x18\x04 \x01(\x09R\x06bindDn\x12\x1B\x0A\x09user_base\x18\x05 \x01(\x09R\x08userBase\x12.\x0A\x13user_object_classes\x18\x06 \x03(\x09R\x11userObjectClasses\x12!\x0A\x0Cuser_filters\x18\x07 \x03(\x09R\x0BuserFilters\x123\x0A\x07timeout\x18\x08 \x01(\x0B2\x19.google.protobuf.DurationR\x07timeout\x12>\x0A\x0Aattributes\x18\x09 \x01(\x0B2\x1E.zitadel.idp.v1.LDAPAttributesR\x0Aattributes\x12\x17\x0A\x07root_ca\x18\x0A \x01(\x0CR\x06rootCa\"\xD1\x02\x0A\x0ASAMLConfig\x12!\x0A\x0Cmetadata_xml\x18\x01 \x01(\x0CR\x0BmetadataXml\x125\x0A\x07binding\x18\x02 \x01(\x0E2\x1B.zitadel.idp.v1.SAMLBindingR\x07binding\x12.\x0A\x13with_signed_request\x18\x03 \x01(\x08R\x11withSignedRequest\x12F\x0A\x0Ename_id_format\x18\x04 \x01(\x0E2 .zitadel.idp.v1.SAMLNameIDFormatR\x0CnameIdFormat\x12L\x0A transient_mapping_attribute_name\x18\x05 \x01(\x09H\x00R\x1DtransientMappingAttributeName\x88\x01\x01B#\x0A!_transient_mapping_attribute_name\"\xD7\x04\x0A\x0DAzureADConfig\x12T\x0A\x09client_id\x18\x01 \x01(\x09B7\x92A42%client id of the Azure AD applicationJ\x0B\"client-id\"R\x08clientId\x12\x8E\x01\x0A\x06tenant\x18\x02 \x01(\x0B2\x1D.zitadel.idp.v1.AzureADTenantBW\x92AT2RDefines what user accounts should be able to login (Personal, Organizational, All)R\x06tenant\x12\xD3\x01\x0A\x0Eemail_verified\x18\x03 \x01(\x08B\xAB\x01\x92A\xA7\x012\xA4\x01Azure AD doesn't send if the email has been verified. Enable this if the user email should always be added verified in ZITADEL (no verification emails will be sent)R\x0DemailVerified\x12\x88\x01\x0A\x06scopes\x18\x04 \x03(\x09Bp\x92Am2>the scopes requested by ZITADEL during the request to Azure ADJ+[\"openid\", \"profile\", \"email\", \"User.Read\"]R\x06scopes\"\xF7\x07\x0A\x07Options\x12\xFD\x01\x0A\x12is_linking_allowed\x18\x01 \x01(\x08B\xCE\x01\x92A\xCA\x012\xC7\x01Enable if users should be able to manually link an existing ZITADEL user with an external account. Disable if users should only be allowed to link the proposed account in case of active auto_linking.R\x10isLinkingAllowed\x12\x81\x02\x0A\x13is_creation_allowed\x18\x02 \x01(\x08B\xD0\x01\x92A\xCC\x012\xC9\x01Enable if users should be able to manually create a new account in ZITADEL when using an external account. Disable if users should not be able to edit account information when auto_creation is enabled.R\x11isCreationAllowed\x12\x96\x01\x0A\x10is_auto_creation\x18\x03 \x01(\x08Bl\x92Ai2gEnable if a new account in ZITADEL should be created automatically when login with an external account.R\x0EisAutoCreation\x12\x80\x01\x0A\x0Eis_auto_update\x18\x04 \x01(\x08BZ\x92AW2UEnable if a the ZITADEL account fields should be updated automatically on each login.R\x0CisAutoUpdate\x12\xCB\x01\x0A\x0Cauto_linking\x18\x05 \x01(\x0E2!.zitadel.idp.v1.AutoLinkingOptionB\x84\x01\x92A\x80\x012~Enable if users should get prompted to link an existing ZITADEL user to an external account if the selected attribute matches.R\x0BautoLinking\"\xA6\x06\x0A\x0ELDAPAttributes\x12+\x0A\x0Cid_attribute\x18\x01 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x0BidAttribute\x12:\x0A\x14first_name_attribute\x18\x02 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x12firstNameAttribute\x128\x0A\x13last_name_attribute\x18\x03 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x11lastNameAttribute\x12>\x0A\x16display_name_attribute\x18\x04 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x14displayNameAttribute\x128\x0A\x13nick_name_attribute\x18\x05 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x11nickNameAttribute\x12J\x0A\x1Cpreferred_username_attribute\x18\x06 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x1ApreferredUsernameAttribute\x121\x0A\x0Femail_attribute\x18\x07 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x0EemailAttribute\x12B\x0A\x18email_verified_attribute\x18\x08 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x16emailVerifiedAttribute\x121\x0A\x0Fphone_attribute\x18\x09 \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x0EphoneAttribute\x12B\x0A\x18phone_verified_attribute\x18\x0A \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x16phoneVerifiedAttribute\x12J\x0A\x1Cpreferred_language_attribute\x18\x0B \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x1ApreferredLanguageAttribute\x12:\x0A\x14avatar_url_attribute\x18\x0C \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x12avatarUrlAttribute\x125\x0A\x11profile_attribute\x18\x0D \x01(\x09B\x08\xFAB\x05r\x03\x18\xC8\x01R\x10profileAttribute\"|\x0A\x0DAzureADTenant\x12D\x0A\x0Btenant_type\x18\x01 \x01(\x0E2!.zitadel.idp.v1.AzureADTenantTypeH\x00R\x0AtenantType\x12\x1D\x0A\x09tenant_id\x18\x02 \x01(\x09H\x00R\x08tenantIdB\x06\x0A\x04type\"\xFB\x02\x0A\x0BAppleConfig\x12e\x0A\x09client_id\x18\x01 \x01(\x09BH\x92AE22Client id (App ID or Service ID) provided by AppleJ\x0F\"com.client.id\"R\x08clientId\x12E\x0A\x07team_id\x18\x02 \x01(\x09B,\x92A)2\x19Team ID provided by AppleJ\x0C\"ALT03JV3OS\"R\x06teamId\x12Q\x0A\x06key_id\x18\x03 \x01(\x09B:\x92A72(ID of the private key generated by AppleJ\x0B\"OGKDK25KD\"R\x05keyId\x12k\x0A\x06scopes\x18\x04 \x03(\x09BS\x92AP2;the scopes requested by ZITADEL during the request to AppleJ\x11[\"name\", \"email\"]R\x06scopes*S\x0A\x08IDPState\x12\x19\x0A\x15IDP_STATE_UNSPECIFIED\x10\x00\x12\x14\x0A\x10IDP_STATE_ACTIVE\x10\x01\x12\x16\x0A\x12IDP_STATE_INACTIVE\x10\x02*G\x0A\x0EIDPStylingType\x12\x1C\x0A\x18STYLING_TYPE_UNSPECIFIED\x10\x00\x12\x17\x0A\x13STYLING_TYPE_GOOGLE\x10\x01*H\x0A\x07IDPType\x12\x18\x0A\x14IDP_TYPE_UNSPECIFIED\x10\x00\x12\x11\x0A\x0DIDP_TYPE_OIDC\x10\x01\x12\x10\x0A\x0CIDP_TYPE_JWT\x10\x03*a\x0A\x0CIDPOwnerType\x12\x1E\x0A\x1AIDP_OWNER_TYPE_UNSPECIFIED\x10\x00\x12\x19\x0A\x15IDP_OWNER_TYPE_SYSTEM\x10\x01\x12\x16\x0A\x12IDP_OWNER_TYPE_ORG\x10\x02*\x7F\x0A\x10OIDCMappingField\x12\"\x0A\x1EOIDC_MAPPING_FIELD_UNSPECIFIED\x10\x00\x12)\x0A%OIDC_MAPPING_FIELD_PREFERRED_USERNAME\x10\x01\x12\x1C\x0A\x18OIDC_MAPPING_FIELD_EMAIL\x10\x02*G\x0A\x0CIDPFieldName\x12\x1E\x0A\x1AIDP_FIELD_NAME_UNSPECIFIED\x10\x00\x12\x17\x0A\x13IDP_FIELD_NAME_NAME\x10\x01*\xEB\x02\x0A\x0CProviderType\x12\x1D\x0A\x19PROVIDER_TYPE_UNSPECIFIED\x10\x00\x12\x16\x0A\x12PROVIDER_TYPE_OIDC\x10\x01\x12\x15\x0A\x11PROVIDER_TYPE_JWT\x10\x02\x12\x16\x0A\x12PROVIDER_TYPE_LDAP\x10\x03\x12\x17\x0A\x13PROVIDER_TYPE_OAUTH\x10\x04\x12\x1A\x0A\x16PROVIDER_TYPE_AZURE_AD\x10\x05\x12\x18\x0A\x14PROVIDER_TYPE_GITHUB\x10\x06\x12\x1B\x0A\x17PROVIDER_TYPE_GITHUB_ES\x10\x07\x12\x18\x0A\x14PROVIDER_TYPE_GITLAB\x10\x08\x12\$\x0A PROVIDER_TYPE_GITLAB_SELF_HOSTED\x10\x09\x12\x18\x0A\x14PROVIDER_TYPE_GOOGLE\x10\x0A\x12\x17\x0A\x13PROVIDER_TYPE_APPLE\x10\x0B\x12\x16\x0A\x12PROVIDER_TYPE_SAML\x10\x0C*x\x0A\x0BSAMLBinding\x12\x1C\x0A\x18SAML_BINDING_UNSPECIFIED\x10\x00\x12\x15\x0A\x11SAML_BINDING_POST\x10\x01\x12\x19\x0A\x15SAML_BINDING_REDIRECT\x10\x02\x12\x19\x0A\x15SAML_BINDING_ARTIFACT\x10\x03*\xA5\x01\x0A\x10SAMLNameIDFormat\x12#\x0A\x1FSAML_NAME_ID_FORMAT_UNSPECIFIED\x10\x00\x12%\x0A!SAML_NAME_ID_FORMAT_EMAIL_ADDRESS\x10\x01\x12\"\x0A\x1ESAML_NAME_ID_FORMAT_PERSISTENT\x10\x02\x12!\x0A\x1DSAML_NAME_ID_FORMAT_TRANSIENT\x10\x03*y\x0A\x11AutoLinkingOption\x12#\x0A\x1FAUTO_LINKING_OPTION_UNSPECIFIED\x10\x00\x12 \x0A\x1CAUTO_LINKING_OPTION_USERNAME\x10\x01\x12\x1D\x0A\x19AUTO_LINKING_OPTION_EMAIL\x10\x02*\x80\x01\x0A\x11AzureADTenantType\x12\x1F\x0A\x1BAZURE_AD_TENANT_TYPE_COMMON\x10\x00\x12&\x0A\"AZURE_AD_TENANT_TYPE_ORGANISATIONS\x10\x01\x12\"\x0A\x1EAZURE_AD_TENANT_TYPE_CONSUMERS\x10\x02B)Z'github.com/zitadel/zitadel/pkg/grpc/idpb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

