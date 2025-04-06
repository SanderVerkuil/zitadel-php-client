<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Auth\V1;

/**
 */
class AuthServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Auth\V1\HealthzRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Healthz(\Zitadel\Auth\V1\HealthzRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/Healthz',
        $argument,
        ['\Zitadel\Auth\V1\HealthzResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetSupportedLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSupportedLanguages(\Zitadel\Auth\V1\GetSupportedLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetSupportedLanguages',
        $argument,
        ['\Zitadel\Auth\V1\GetSupportedLanguagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyUser(\Zitadel\Auth\V1\GetMyUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyUser',
        $argument,
        ['\Zitadel\Auth\V1\GetMyUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyUser(\Zitadel\Auth\V1\RemoveMyUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyUser',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyUserChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyUserChanges(\Zitadel\Auth\V1\ListMyUserChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyUserChanges',
        $argument,
        ['\Zitadel\Auth\V1\ListMyUserChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyUserSessionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyUserSessions(\Zitadel\Auth\V1\ListMyUserSessionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyUserSessions',
        $argument,
        ['\Zitadel\Auth\V1\ListMyUserSessionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyMetadata(\Zitadel\Auth\V1\ListMyMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyMetadata',
        $argument,
        ['\Zitadel\Auth\V1\ListMyMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyMetadata(\Zitadel\Auth\V1\GetMyMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyMetadata',
        $argument,
        ['\Zitadel\Auth\V1\GetMyMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyRefreshTokensRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyRefreshTokens(\Zitadel\Auth\V1\ListMyRefreshTokensRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyRefreshTokens',
        $argument,
        ['\Zitadel\Auth\V1\ListMyRefreshTokensResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RevokeMyRefreshTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RevokeMyRefreshToken(\Zitadel\Auth\V1\RevokeMyRefreshTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RevokeMyRefreshToken',
        $argument,
        ['\Zitadel\Auth\V1\RevokeMyRefreshTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RevokeAllMyRefreshTokensRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RevokeAllMyRefreshTokens(\Zitadel\Auth\V1\RevokeAllMyRefreshTokensRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RevokeAllMyRefreshTokens',
        $argument,
        ['\Zitadel\Auth\V1\RevokeAllMyRefreshTokensResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\UpdateMyUserNameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateMyUserName(\Zitadel\Auth\V1\UpdateMyUserNameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/UpdateMyUserName',
        $argument,
        ['\Zitadel\Auth\V1\UpdateMyUserNameResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyPasswordComplexityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyPasswordComplexityPolicy(\Zitadel\Auth\V1\GetMyPasswordComplexityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyPasswordComplexityPolicy',
        $argument,
        ['\Zitadel\Auth\V1\GetMyPasswordComplexityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\UpdateMyPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateMyPassword(\Zitadel\Auth\V1\UpdateMyPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/UpdateMyPassword',
        $argument,
        ['\Zitadel\Auth\V1\UpdateMyPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyProfile(\Zitadel\Auth\V1\GetMyProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyProfile',
        $argument,
        ['\Zitadel\Auth\V1\GetMyProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\UpdateMyProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateMyProfile(\Zitadel\Auth\V1\UpdateMyProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/UpdateMyProfile',
        $argument,
        ['\Zitadel\Auth\V1\UpdateMyProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyEmail(\Zitadel\Auth\V1\GetMyEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyEmail',
        $argument,
        ['\Zitadel\Auth\V1\GetMyEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\SetMyEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetMyEmail(\Zitadel\Auth\V1\SetMyEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/SetMyEmail',
        $argument,
        ['\Zitadel\Auth\V1\SetMyEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\VerifyMyEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyMyEmail(\Zitadel\Auth\V1\VerifyMyEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/VerifyMyEmail',
        $argument,
        ['\Zitadel\Auth\V1\VerifyMyEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ResendMyEmailVerificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendMyEmailVerification(\Zitadel\Auth\V1\ResendMyEmailVerificationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ResendMyEmailVerification',
        $argument,
        ['\Zitadel\Auth\V1\ResendMyEmailVerificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyPhone(\Zitadel\Auth\V1\GetMyPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyPhone',
        $argument,
        ['\Zitadel\Auth\V1\GetMyPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\SetMyPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetMyPhone(\Zitadel\Auth\V1\SetMyPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/SetMyPhone',
        $argument,
        ['\Zitadel\Auth\V1\SetMyPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\VerifyMyPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyMyPhone(\Zitadel\Auth\V1\VerifyMyPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/VerifyMyPhone',
        $argument,
        ['\Zitadel\Auth\V1\VerifyMyPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resends an sms to the last given phone number, to verify it
     * @param \Zitadel\Auth\V1\ResendMyPhoneVerificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendMyPhoneVerification(\Zitadel\Auth\V1\ResendMyPhoneVerificationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ResendMyPhoneVerification',
        $argument,
        ['\Zitadel\Auth\V1\ResendMyPhoneVerificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyPhone(\Zitadel\Auth\V1\RemoveMyPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyPhone',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyAvatarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyAvatar(\Zitadel\Auth\V1\RemoveMyAvatarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyAvatar',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyAvatarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyLinkedIDPsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyLinkedIDPs(\Zitadel\Auth\V1\ListMyLinkedIDPsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyLinkedIDPs',
        $argument,
        ['\Zitadel\Auth\V1\ListMyLinkedIDPsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyLinkedIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyLinkedIDP(\Zitadel\Auth\V1\RemoveMyLinkedIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyLinkedIDP',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyLinkedIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyAuthFactorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyAuthFactors(\Zitadel\Auth\V1\ListMyAuthFactorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyAuthFactors',
        $argument,
        ['\Zitadel\Auth\V1\ListMyAuthFactorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\AddMyAuthFactorOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMyAuthFactorOTP(\Zitadel\Auth\V1\AddMyAuthFactorOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/AddMyAuthFactorOTP',
        $argument,
        ['\Zitadel\Auth\V1\AddMyAuthFactorOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\VerifyMyAuthFactorOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyMyAuthFactorOTP(\Zitadel\Auth\V1\VerifyMyAuthFactorOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/VerifyMyAuthFactorOTP',
        $argument,
        ['\Zitadel\Auth\V1\VerifyMyAuthFactorOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyAuthFactorOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyAuthFactorOTP(\Zitadel\Auth\V1\RemoveMyAuthFactorOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyAuthFactorOTP',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyAuthFactorOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\AddMyAuthFactorOTPSMSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMyAuthFactorOTPSMS(\Zitadel\Auth\V1\AddMyAuthFactorOTPSMSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/AddMyAuthFactorOTPSMS',
        $argument,
        ['\Zitadel\Auth\V1\AddMyAuthFactorOTPSMSResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyAuthFactorOTPSMSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyAuthFactorOTPSMS(\Zitadel\Auth\V1\RemoveMyAuthFactorOTPSMSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyAuthFactorOTPSMS',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyAuthFactorOTPSMSResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\AddMyAuthFactorOTPEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMyAuthFactorOTPEmail(\Zitadel\Auth\V1\AddMyAuthFactorOTPEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/AddMyAuthFactorOTPEmail',
        $argument,
        ['\Zitadel\Auth\V1\AddMyAuthFactorOTPEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyAuthFactorOTPEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyAuthFactorOTPEmail(\Zitadel\Auth\V1\RemoveMyAuthFactorOTPEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyAuthFactorOTPEmail',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyAuthFactorOTPEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\AddMyAuthFactorU2FRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMyAuthFactorU2F(\Zitadel\Auth\V1\AddMyAuthFactorU2FRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/AddMyAuthFactorU2F',
        $argument,
        ['\Zitadel\Auth\V1\AddMyAuthFactorU2FResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\VerifyMyAuthFactorU2FRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyMyAuthFactorU2F(\Zitadel\Auth\V1\VerifyMyAuthFactorU2FRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/VerifyMyAuthFactorU2F',
        $argument,
        ['\Zitadel\Auth\V1\VerifyMyAuthFactorU2FResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyAuthFactorU2FRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyAuthFactorU2F(\Zitadel\Auth\V1\RemoveMyAuthFactorU2FRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyAuthFactorU2F',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyAuthFactorU2FResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyPasswordlessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyPasswordless(\Zitadel\Auth\V1\ListMyPasswordlessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyPasswordless',
        $argument,
        ['\Zitadel\Auth\V1\ListMyPasswordlessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\AddMyPasswordlessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMyPasswordless(\Zitadel\Auth\V1\AddMyPasswordlessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/AddMyPasswordless',
        $argument,
        ['\Zitadel\Auth\V1\AddMyPasswordlessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\AddMyPasswordlessLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMyPasswordlessLink(\Zitadel\Auth\V1\AddMyPasswordlessLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/AddMyPasswordlessLink',
        $argument,
        ['\Zitadel\Auth\V1\AddMyPasswordlessLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\SendMyPasswordlessLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendMyPasswordlessLink(\Zitadel\Auth\V1\SendMyPasswordlessLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/SendMyPasswordlessLink',
        $argument,
        ['\Zitadel\Auth\V1\SendMyPasswordlessLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\VerifyMyPasswordlessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyMyPasswordless(\Zitadel\Auth\V1\VerifyMyPasswordlessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/VerifyMyPasswordless',
        $argument,
        ['\Zitadel\Auth\V1\VerifyMyPasswordlessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\RemoveMyPasswordlessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMyPasswordless(\Zitadel\Auth\V1\RemoveMyPasswordlessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/RemoveMyPasswordless',
        $argument,
        ['\Zitadel\Auth\V1\RemoveMyPasswordlessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyUserGrantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyUserGrants(\Zitadel\Auth\V1\ListMyUserGrantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyUserGrants',
        $argument,
        ['\Zitadel\Auth\V1\ListMyUserGrantsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyProjectOrgsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyProjectOrgs(\Zitadel\Auth\V1\ListMyProjectOrgsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyProjectOrgs',
        $argument,
        ['\Zitadel\Auth\V1\ListMyProjectOrgsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyZitadelPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyZitadelPermissions(\Zitadel\Auth\V1\ListMyZitadelPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyZitadelPermissions',
        $argument,
        ['\Zitadel\Auth\V1\ListMyZitadelPermissionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyProjectPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyProjectPermissions(\Zitadel\Auth\V1\ListMyProjectPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyProjectPermissions',
        $argument,
        ['\Zitadel\Auth\V1\ListMyProjectPermissionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\ListMyMembershipsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMyMemberships(\Zitadel\Auth\V1\ListMyMembershipsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/ListMyMemberships',
        $argument,
        ['\Zitadel\Auth\V1\ListMyMembershipsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyLabelPolicy(\Zitadel\Auth\V1\GetMyLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyLabelPolicy',
        $argument,
        ['\Zitadel\Auth\V1\GetMyLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyPrivacyPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyPrivacyPolicy(\Zitadel\Auth\V1\GetMyPrivacyPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyPrivacyPolicy',
        $argument,
        ['\Zitadel\Auth\V1\GetMyPrivacyPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Auth\V1\GetMyLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyLoginPolicy(\Zitadel\Auth\V1\GetMyLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.auth.v1.AuthService/GetMyLoginPolicy',
        $argument,
        ['\Zitadel\Auth\V1\GetMyLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

}
