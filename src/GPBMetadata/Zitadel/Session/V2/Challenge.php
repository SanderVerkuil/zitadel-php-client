<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/session/v2/challenge.proto

namespace GPBMetadata\Zitadel\Session\V2;

class Challenge
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        
        
        $pool->internalAddGeneratedFile(
            "\x0A\xD1\x13\x0A\"zitadel/session/v2/challenge.proto\x12\x12zitadel.session.v2\x1A\x1Cgoogle/protobuf/struct.proto\x1A.protoc-gen-openapiv2/options/annotations.proto\x1A\x17validate/validate.proto\"\xE9\x09\x0A\x11RequestChallenges\x12Q\x0A\x0Aweb_auth_n\x18\x01 \x01(\x0B2..zitadel.session.v2.RequestChallenges.WebAuthNH\x00R\x08webAuthN\x88\x01\x01\x12J\x0A\x07otp_sms\x18\x02 \x01(\x0B2,.zitadel.session.v2.RequestChallenges.OTPSMSH\x01R\x06otpSms\x88\x01\x01\x12P\x0A\x09otp_email\x18\x03 \x01(\x0B2..zitadel.session.v2.RequestChallenges.OTPEmailH\x02R\x08otpEmail\x88\x01\x01\x1A\x8D\x04\x0A\x08WebAuthN\x12}\x0A\x06domain\x18\x01 \x01(\x09Be\x92AT2R\"Domain on which the session was created. Will be used in the WebAuthN challenge.\"\xE2A\x01\x02\xFAB\x07r\x05\x10\x01\x18\xC8\x01R\x06domain\x12\x81\x03\x0A\x1Duser_verification_requirement\x18\x02 \x01(\x0E2/.zitadel.session.v2.UserVerificationRequirementB\x8B\x02\x92A\xF9\x01\x1A@https://www.w3.org/TR/webauthn/#enum-userVerificationRequirement2\xB4\x01\"User verification that is required during validation. When set to `USER_VERIFICATION_REQUIREMENT_REQUIRED` the behaviour is for passkey authentication. Other values will mean U2F\"\xE2A\x01\x02\xFAB\x07\x82\x01\x04\x10\x01 \x00R\x1BuserVerificationRequirement\x1A)\x0A\x06OTPSMS\x12\x1F\x0A\x0Breturn_code\x18\x01 \x01(\x08R\x0AreturnCode\x1A\xFE\x02\x0A\x08OTPEmail\x12V\x0A\x09send_code\x18\x02 \x01(\x0B27.zitadel.session.v2.RequestChallenges.OTPEmail.SendCodeH\x00R\x08sendCode\x12\\\x0A\x0Breturn_code\x18\x03 \x01(\x0B29.zitadel.session.v2.RequestChallenges.OTPEmail.ReturnCodeH\x00R\x0AreturnCode\x1A\x9C\x01\x0A\x08SendCode\x12\x7F\x0A\x0Curl_template\x18\x01 \x01(\x09BW\x92AJJB\"https://example.com/otp/verify?userID={{.UserID}}&code={{.Code}}\"x\xC8\x01\x80\x01\x01\xFAB\x07r\x05\x10\x01\x18\xC8\x01H\x00R\x0BurlTemplate\x88\x01\x01B\x0F\x0A\x0D_url_template\x1A\x0C\x0A\x0AReturnCodeB\x0F\x0A\x0Ddelivery_typeB\x0D\x0A\x0B_web_auth_nB\x0A\x0A\x08_otp_smsB\x0C\x0A\x0A_otp_email\"\xAA\x06\x0A\x0AChallenges\x12J\x0A\x0Aweb_auth_n\x18\x01 \x01(\x0B2'.zitadel.session.v2.Challenges.WebAuthNH\x00R\x08webAuthN\x88\x01\x01\x12\x1C\x0A\x07otp_sms\x18\x02 \x01(\x09H\x01R\x06otpSms\x88\x01\x01\x12 \x0A\x09otp_email\x18\x03 \x01(\x09H\x02R\x08otpEmail\x88\x01\x01\x1A\xE6\x04\x0A\x08WebAuthN\x12\xD9\x04\x0A%public_key_credential_request_options\x18\x01 \x01(\x0B2\x17.google.protobuf.StructB\xED\x03\x92A\xE9\x032\xFA\x01Options for Assertion Generaration (dictionary PublicKeyCredentialRequestOptions). Generated helper methods transform the field to JSON, for use in a WebauthN client. See also: https://www.w3.org/TR/webauthn/#dictdef-publickeycredentialrequestoptionsJ\xE9\x01{\"publicKey\":{\"allowCredentials\":[{\"id\":\"ATmqBg-99qyOZk2zloPdJQyS2R7IkFT7v9Hoos_B_nM\",\"type\":\"public-key\"}],\"challenge\":\"GAOHYz2jE69kJMYo6Laij8yWw9-dKKgbViNhfuy0StA\",\"rpId\":\"localhost\",\"timeout\":300000,\"userVerification\":\"required\"}}R!publicKeyCredentialRequestOptionsB\x0D\x0A\x0B_web_auth_nB\x0A\x0A\x08_otp_smsB\x0C\x0A\x0A_otp_email*\xD4\x01\x0A\x1BUserVerificationRequirement\x12-\x0A)USER_VERIFICATION_REQUIREMENT_UNSPECIFIED\x10\x00\x12*\x0A&USER_VERIFICATION_REQUIREMENT_REQUIRED\x10\x01\x12+\x0A'USER_VERIFICATION_REQUIREMENT_PREFERRED\x10\x02\x12-\x0A)USER_VERIFICATION_REQUIREMENT_DISCOURAGED\x10\x03B8Z6github.com/zitadel/zitadel/pkg/grpc/session/v2;sessionb\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

