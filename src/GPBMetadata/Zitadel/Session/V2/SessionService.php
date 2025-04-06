<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/session_service.proto

namespace GPBMetadata\Zitadel\Session\V2;

class SessionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Zitadel\Object\V2\Object::initOnce();
        \GPBMetadata\Zitadel\ProtocGenZitadel\V2\Options::initOnce();
        \GPBMetadata\Zitadel\Session\V2\Challenge::initOnce();
        \GPBMetadata\Zitadel\Session\V2\Session::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\ProtocGenOpenapiv2\Options\Annotations::initOnce();
        \GPBMetadata\Validate\Validate::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xC7D\x0A(zitadel/session/v2/session_service.proto\x12\x12zitadel.session.v2\x1A+zitadel/protoc_gen_zitadel/v2/options.proto\x1A\"zitadel/session/v2/challenge.proto\x1A zitadel/session/v2/session.proto\x1A\x1Cgoogle/api/annotations.proto\x1A\x1Fgoogle/api/field_behavior.proto\x1A\x1Cgoogle/protobuf/struct.proto\x1A\x1Egoogle/protobuf/duration.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\"\xD1\x01\x0A\x13ListSessionsRequest\x122\x0A\x05query\x18\x01 \x01(\x0B2\x1C.zitadel.object.v2.ListQueryR\x05query\x129\x0A\x07queries\x18\x02 \x03(\x0B2\x1F.zitadel.session.v2.SearchQueryR\x07queries\x12K\x0A\x0Esorting_column\x18\x03 \x01(\x0E2\$.zitadel.session.v2.SessionFieldNameR\x0DsortingColumn\"\x89\x01\x0A\x14ListSessionsResponse\x128\x0A\x07details\x18\x01 \x01(\x0B2\x1E.zitadel.object.v2.ListDetailsR\x07details\x127\x0A\x08sessions\x18\x02 \x03(\x0B2\x1B.zitadel.session.v2.SessionR\x08sessions\"n\x0A\x11GetSessionRequest\x12\x1D\x0A\x0Asession_id\x18\x01 \x01(\x09R\x09sessionId\x12(\x0A\x0Dsession_token\x18\x02 \x01(\x09H\x00R\x0CsessionToken\x88\x01\x01B\x10\x0A\x0E_session_token\"K\x0A\x12GetSessionResponse\x125\x0A\x07session\x18\x01 \x01(\x0B2\x1B.zitadel.session.v2.SessionR\x07session\"\xB1\x05\x0A\x14CreateSessionRequest\x12\x93\x01\x0A\x06checks\x18\x01 \x01(\x0B2\x1A.zitadel.session.v2.ChecksB_\x92A\\2Z\"Check for user and password. Successful checks will be stated as factors on the session.\"R\x06checks\x12\x8C\x01\x0A\x08metadata\x18\x02 \x03(\x0B26.zitadel.session.v2.CreateSessionRequest.MetadataEntryB8\x92A523\"custom key value list to be stored on the session\"R\x08metadata\x12E\x0A\x0Achallenges\x18\x03 \x01(\x0B2%.zitadel.session.v2.RequestChallengesR\x0Achallenges\x12<\x0A\x0Auser_agent\x18\x04 \x01(\x0B2\x1D.zitadel.session.v2.UserAgentR\x09userAgent\x12\xA4\x01\x0A\x08lifetime\x18\x05 \x01(\x0B2\x19.google.protobuf.DurationBh\x92A]2Q\"duration (in seconds) after which the session will be automatically invalidated\"J\x08\"18000s\"\xFAB\x05\xAA\x01\x02*\x00H\x00R\x08lifetime\x88\x01\x01\x1A;\x0A\x0DMetadataEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12\x14\x0A\x05value\x18\x02 \x01(\x0CR\x05value:\x028\x01B\x0B\x0A\x09_lifetime\"\x81\x03\x0A\x15CreateSessionResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\x12M\x0A\x0Asession_id\x18\x02 \x01(\x09B.\x92A+2\x13\"id of the session\"J\x14\"222430354126975533\"R\x09sessionId\x12\xA2\x01\x0A\x0Dsession_token\x18\x03 \x01(\x09B}\x92Az2x\"The current token of the session, which is required for delete session, get session or the request of other resources.\"R\x0CsessionToken\x12>\x0A\x0Achallenges\x18\x04 \x01(\x0B2\x1E.zitadel.session.v2.ChallengesR\x0Achallenges\"\xB6\x06\x0A\x11SetSessionRequest\x12g\x0A\x0Asession_id\x18\x01 \x01(\x09BH\x92A;2\x1D\"id of the session to update\"J\x14\"222430354126975533\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x09sessionId\x12^\x0A\x0Dsession_token\x18\x02 \x01(\x09B9\x92A,2\$\"DEPRECATED: this field is ignored.\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x00\x18\xC8\x01R\x0CsessionToken\x12\x93\x01\x0A\x06checks\x18\x03 \x01(\x0B2\x1A.zitadel.session.v2.ChecksB_\x92A\\2Z\"Check for user and password. Successful checks will be stated as factors on the session.\"R\x06checks\x12\x89\x01\x0A\x08metadata\x18\x04 \x03(\x0B23.zitadel.session.v2.SetSessionRequest.MetadataEntryB8\x92A523\"custom key value list to be stored on the session\"R\x08metadata\x12E\x0A\x0Achallenges\x18\x05 \x01(\x0B2%.zitadel.session.v2.RequestChallengesR\x0Achallenges\x12\xA4\x01\x0A\x08lifetime\x18\x06 \x01(\x0B2\x19.google.protobuf.DurationBh\x92A]2Q\"duration (in seconds) after which the session will be automatically invalidated\"J\x08\"18000s\"\xFAB\x05\xAA\x01\x02*\x00H\x00R\x08lifetime\x88\x01\x01\x1A;\x0A\x0DMetadataEntry\x12\x10\x0A\x03key\x18\x01 \x01(\x09R\x03key\x12\x14\x0A\x05value\x18\x02 \x01(\x0CR\x05value:\x028\x01B\x0B\x0A\x09_lifetime\"\xAF\x02\x0A\x12SetSessionResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\x12\xA2\x01\x0A\x0Dsession_token\x18\x02 \x01(\x09B}\x92Az2x\"The current token of the session, which is required for delete session, get session or the request of other resources.\"R\x0CsessionToken\x12>\x0A\x0Achallenges\x18\x03 \x01(\x0B2\x1E.zitadel.session.v2.ChallengesR\x0Achallenges\"\x9E\x03\x0A\x14DeleteSessionRequest\x12j\x0A\x0Asession_id\x18\x01 \x01(\x09BK\x92A>2 \"id of the session to terminate\"J\x14\"222430354126975533\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x09sessionId\x12\x87\x02\x0A\x0Dsession_token\x18\x02 \x01(\x09B\xDC\x01\x92A\xD8\x012\xD5\x01\"The current token of the session, previously returned on the create / update request. The token is required unless the authenticated user terminates the own session or is granted the `session.delete` permission.\"H\x00R\x0CsessionToken\x88\x01\x01B\x10\x0A\x0E_session_token\"M\x0A\x15DeleteSessionResponse\x124\x0A\x07details\x18\x01 \x01(\x0B2\x1A.zitadel.object.v2.DetailsR\x07details\"\xB2\x0D\x0A\x06Checks\x12q\x0A\x04user\x18\x01 \x01(\x0B2\x1D.zitadel.session.v2.CheckUserB9\x92A624\"checks the user and updates the session on success\"H\x00R\x04user\x88\x01\x01\x12\xE2\x02\x0A\x08password\x18\x02 \x01(\x0B2!.zitadel.session.v2.CheckPasswordB\x9D\x02\x92A\x99\x022\x96\x02\"Checks the password and updates the session on success. Requires that the user is already checked, either in the previous or the same request. On failed password check id: \"COMMAND-3M0fs\" wll be returned. On user locked out id: \"COMMAND-JLK35\"/\"COMMAND-SFA3t\" will be returned\"H\x01R\x08password\x88\x01\x01\x12\xFC\x01\x0A\x0Aweb_auth_n\x18\x03 \x01(\x0B2!.zitadel.session.v2.CheckWebAuthNB\xB5\x01\x92A\xB1\x012\xAE\x01\"Checks the public key credential issued by the WebAuthN client. Requires that the user is already checked and a WebAuthN challenge to be requested, in any previous request.\"H\x02R\x08webAuthN\x88\x01\x01\x12\xB0\x01\x0A\x0Aidp_intent\x18\x04 \x01(\x0B2\".zitadel.session.v2.CheckIDPIntentBh\x92Ae2c\"Checks the IDP intent. Requires that the userlink is already checked and a successful idp intent.\"H\x03R\x09idpIntent\x88\x01\x01\x12\xE4\x01\x0A\x04totp\x18\x05 \x01(\x0B2\x1D.zitadel.session.v2.CheckTOTPB\xAB\x01\x92A\xA7\x012\xA4\x01\"Checks the Time-based One-Time Password and updates the session on success. Requires that the user is already checked, either in the previous or the same request.\"H\x04R\x04totp\x88\x01\x01\x12\xEB\x01\x0A\x07otp_sms\x18\x06 \x01(\x0B2\x1C.zitadel.session.v2.CheckOTPB\xAE\x01\x92A\xAA\x012\xA7\x01\"Checks the One-Time Password sent over SMS and updates the session on success. Requires that the user is already checked, either in the previous or the same request.\"H\x05R\x06otpSms\x88\x01\x01\x12\xF1\x01\x0A\x09otp_email\x18\x07 \x01(\x0B2\x1C.zitadel.session.v2.CheckOTPB\xB0\x01\x92A\xAC\x012\xA9\x01\"Checks the One-Time Password sent over Email and updates the session on success. Requires that the user is already checked, either in the previous or the same request.\"H\x06R\x08otpEmail\x88\x01\x01B\x07\x0A\x05_userB\x0B\x0A\x09_passwordB\x0D\x0A\x0B_web_auth_nB\x0D\x0A\x0B_idp_intentB\x07\x0A\x05_totpB\x0A\x0A\x08_otp_smsB\x0C\x0A\x0A_otp_email\"\xB5\x01\x0A\x09CheckUser\x12V\x0A\x07user_id\x18\x01 \x01(\x09B;\x92A.J&\"d654e6ba-70a3-48ef-a95d-37c8d8a7901a\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01H\x00R\x06userId\x12F\x0A\x0Alogin_name\x18\x02 \x01(\x09B%\x92A\x18J\x10\"mini@mouse.com\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01H\x00R\x09loginNameB\x08\x0A\x06search\"O\x0A\x0DCheckPassword\x12>\x0A\x08password\x18\x01 \x01(\x09B\"\x92A\x15J\x0D\"V3ryS3cure!\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x08password\"\xC9\x01\x0A\x0DCheckWebAuthN\x12\xB7\x01\x0A\x19credential_assertion_data\x18\x01 \x01(\x0B2\x17.google.protobuf.StructBb\x92AS2JJSON representation of public key credential issued by the webAuthN clientx\x80\x80@\x80\x017\xE2A\x01\x02\xFAB\x05\x8A\x01\x02\x10\x01R\x17credentialAssertionData\"\x8D\x03\x0A\x0ECheckIDPIntent\x12\xB8\x01\x0A\x0Didp_intent_id\x18\x01 \x01(\x09B\x93\x01\x92A\x85\x012UID of the idp intent, previously returned on the success response of the IDP callbackJ&\"d654e6ba-70a3-48ef-a95d-37c8d8a7901a\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0BidpIntentId\x12\xBF\x01\x0A\x10idp_intent_token\x18\x02 \x01(\x09B\x94\x01\x92A\x86\x012Xtoken of the idp intent, previously returned on the success response of the IDP callbackJ\$\"SJKL3ioIDpo342ioqw98fjp3sdf32wahb=\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x0EidpIntentToken\"<\x0A\x09CheckTOTP\x12/\x0A\x04code\x18\x01 \x01(\x09B\x1B\x92A\x0FJ\x08\"323764\"x\x06\x80\x01\x06\xFAB\x06r\x04\x10\x06\x18\x06R\x04code\"8\x0A\x08CheckOTP\x12,\x0A\x04code\x18\x01 \x01(\x09B\x18\x92A\x0EJ\x09\"3237642\"\x80\x01\x01\xFAB\x04r\x02\x10\x01R\x04code2\xDA\x0A\x0A\x0ESessionService\x12\x87\x02\x0A\x0CListSessions\x12'.zitadel.session.v2.ListSessionsRequest\x1A(.zitadel.session.v2.ListSessionsResponse\"\xA3\x01\x92Am\x12\x0FSearch sessions\x1A\x13Search for sessionsJ\x0B\x0A\x03200\x12\x04\x0A\x02OKJ8\x0A\x03400\x121\x0A\x12invalid list query\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatus\x8A\xB5\x18\x11\x0A\x0F\x0A\x0Dauthenticated\x82\xD3\xE4\x93\x02\x18\"\x13/v2/sessions/search:\x01*\x12\x8D\x02\x0A\x0AGetSession\x12%.zitadel.session.v2.GetSessionRequest\x1A&.zitadel.session.v2.GetSessionResponse\"\xAF\x01\x92Av\x12\x0DGet a session\x1AXGet a session and all its information like the time of the user or password verificationJ\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x11\x0A\x0F\x0A\x0Dauthenticated\x82\xD3\xE4\x93\x02\x1B\x12\x19/v2/sessions/{session_id}\x12\xA6\x02\x0A\x0DCreateSession\x12(.zitadel.session.v2.CreateSessionRequest\x1A).zitadel.session.v2.CreateSessionResponse\"\xBF\x01\x92A\x8A\x01\x12\x14Create a new session\x1AeCreate a new session. A token will be returned, which is required for further updates of the session.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x16\x0A\x0F\x0A\x0Dauthenticated\x12\x03\x08\xC9\x01\x82\xD3\xE4\x93\x02\x11\"\x0C/v2/sessions:\x01*\x12\xF5\x01\x0A\x0ASetSession\x12%.zitadel.session.v2.SetSessionRequest\x1A&.zitadel.session.v2.SetSessionResponse\"\x97\x01\x92A[\x12\x1AUpdate an existing session\x1A0Update an existing session with new information.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x11\x0A\x0F\x0A\x0Dauthenticated\x82\xD3\xE4\x93\x02\x1E2\x19/v2/sessions/{session_id}:\x01*\x12\x8C\x02\x0A\x0DDeleteSession\x12(.zitadel.session.v2.DeleteSessionRequest\x1A).zitadel.session.v2.DeleteSessionResponse\"\xA5\x01\x92Ai\x12\x1DTerminate an existing session\x1A;Terminate your own session or if granted any other session.J\x0B\x0A\x03200\x12\x04\x0A\x02OK\x8A\xB5\x18\x11\x0A\x0F\x0A\x0Dauthenticated\x82\xD3\xE4\x93\x02\x1E*\x19/v2/sessions/{session_id}:\x01*B\xA6\x08Z6github.com/zitadel/zitadel/pkg/grpc/session/v2;session\x92A\xEA\x07\x12\xC8\x02\x0A\x0FSession Service\x12\xBB\x01This API is intended to manage sessions in a ZITADEL instance. Follow the guides on how to [build your own Login UI](/docs/guides/integrate/login-ui) and learn how to use the Session API.\".\x0A\x07ZITADEL\x12\x13https://zitadel.com\x1A\x0Ehi@zitadel.com*B\x0A\x0AApache 2.0\x124https://github.com/zitadel/zitadel/blob/main/LICENSE2\x032.0\x1A\x0E\$CUSTOM-DOMAIN\"\x01/*\x02\x02\x012\x10application/json2\x10application/grpc2\x1Aapplication/grpc-web+proto:\x10application/json:\x10application/grpc:\x1Aapplication/grpc-web+protoRm\x0A\x03403\x12f\x0AGReturned when the user does not have permission to access the resource.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusRP\x0A\x03404\x12I\x0A*Returned when the resource does not exist.\x12\x1B\x0A\x19\x1A\x17#/definitions/rpcStatusZ\xC2\x01\x0A\xBF\x01\x0A\x06OAuth2\x12\xB4\x01\x08\x03(\x042!\$CUSTOM-DOMAIN/oauth/v2/authorize:\x1D\$CUSTOM-DOMAIN/oauth/v2/tokenBl\x0A\x10\x0A\x06openid\x12\x06openid\x0AX\x0A*urn:zitadel:iam:org:project:id:zitadel:aud\x12*urn:zitadel:iam:org:project:id:zitadel:audb@\x0A>\x0A\x06OAuth2\x124\x0A\x06openid\x0A*urn:zitadel:iam:org:project:id:zitadel:audr>\x0A\"Detailed information about ZITADEL\x12\x18https://zitadel.com/docsb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

