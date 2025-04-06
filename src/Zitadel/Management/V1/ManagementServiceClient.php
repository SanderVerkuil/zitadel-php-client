<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Management\V1;

/**
 */
class ManagementServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Management\V1\HealthzRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Healthz(\Zitadel\Management\V1\HealthzRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/Healthz',
        $argument,
        ['\Zitadel\Management\V1\HealthzResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetOIDCInformationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOIDCInformation(\Zitadel\Management\V1\GetOIDCInformationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetOIDCInformation',
        $argument,
        ['\Zitadel\Management\V1\GetOIDCInformationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetIAMRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIAM(\Zitadel\Management\V1\GetIAMRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetIAM',
        $argument,
        ['\Zitadel\Management\V1\GetIAMResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetSupportedLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSupportedLanguages(\Zitadel\Management\V1\GetSupportedLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetSupportedLanguages',
        $argument,
        ['\Zitadel\Management\V1\GetSupportedLanguagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ListUsers, with InUserIDQuery
     * @param \Zitadel\Management\V1\GetUserByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserByID(\Zitadel\Management\V1\GetUserByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetUserByID',
        $argument,
        ['\Zitadel\Management\V1\GetUserByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ListUsers, with LoginNameQuery
     * @param \Zitadel\Management\V1\GetUserByLoginNameGlobalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserByLoginNameGlobal(\Zitadel\Management\V1\GetUserByLoginNameGlobalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetUserByLoginNameGlobal',
        $argument,
        ['\Zitadel\Management\V1\GetUserByLoginNameGlobalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ListUsers
     * @param \Zitadel\Management\V1\ListUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsers(\Zitadel\Management\V1\ListUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListUsers',
        $argument,
        ['\Zitadel\Management\V1\ListUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListUserChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUserChanges(\Zitadel\Management\V1\ListUserChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListUserChanges',
        $argument,
        ['\Zitadel\Management\V1\ListUserChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ListUsers, is unique when no user is returned
     * @param \Zitadel\Management\V1\IsUserUniqueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IsUserUnique(\Zitadel\Management\V1\IsUserUniqueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/IsUserUnique',
        $argument,
        ['\Zitadel\Management\V1\IsUserUniqueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: use ImportHumanUser
     * @param \Zitadel\Management\V1\AddHumanUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddHumanUser(\Zitadel\Management\V1\AddHumanUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddHumanUser',
        $argument,
        ['\Zitadel\Management\V1\AddHumanUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 AddHumanUser
     * @param \Zitadel\Management\V1\ImportHumanUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ImportHumanUser(\Zitadel\Management\V1\ImportHumanUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ImportHumanUser',
        $argument,
        ['\Zitadel\Management\V1\ImportHumanUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddMachineUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMachineUser(\Zitadel\Management\V1\AddMachineUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddMachineUser',
        $argument,
        ['\Zitadel\Management\V1\AddMachineUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 DeactivateUser
     * @param \Zitadel\Management\V1\DeactivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateUser(\Zitadel\Management\V1\DeactivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateUser',
        $argument,
        ['\Zitadel\Management\V1\DeactivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ReactivateUser
     * @param \Zitadel\Management\V1\ReactivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateUser(\Zitadel\Management\V1\ReactivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateUser',
        $argument,
        ['\Zitadel\Management\V1\ReactivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 LockUser
     * @param \Zitadel\Management\V1\LockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LockUser(\Zitadel\Management\V1\LockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/LockUser',
        $argument,
        ['\Zitadel\Management\V1\LockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 UnlockUser
     * @param \Zitadel\Management\V1\UnlockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnlockUser(\Zitadel\Management\V1\UnlockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UnlockUser',
        $argument,
        ['\Zitadel\Management\V1\UnlockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RemoveUser
     * @param \Zitadel\Management\V1\RemoveUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveUser(\Zitadel\Management\V1\RemoveUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveUser',
        $argument,
        ['\Zitadel\Management\V1\RemoveUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 UpdateHumanUser
     * @param \Zitadel\Management\V1\UpdateUserNameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUserName(\Zitadel\Management\V1\UpdateUserNameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateUserName',
        $argument,
        ['\Zitadel\Management\V1\UpdateUserNameResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetUserMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUserMetadata(\Zitadel\Management\V1\SetUserMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetUserMetadata',
        $argument,
        ['\Zitadel\Management\V1\SetUserMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\BulkSetUserMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BulkSetUserMetadata(\Zitadel\Management\V1\BulkSetUserMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/BulkSetUserMetadata',
        $argument,
        ['\Zitadel\Management\V1\BulkSetUserMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListUserMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUserMetadata(\Zitadel\Management\V1\ListUserMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListUserMetadata',
        $argument,
        ['\Zitadel\Management\V1\ListUserMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetUserMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserMetadata(\Zitadel\Management\V1\GetUserMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetUserMetadata',
        $argument,
        ['\Zitadel\Management\V1\GetUserMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveUserMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveUserMetadata(\Zitadel\Management\V1\RemoveUserMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveUserMetadata',
        $argument,
        ['\Zitadel\Management\V1\RemoveUserMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\BulkRemoveUserMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BulkRemoveUserMetadata(\Zitadel\Management\V1\BulkRemoveUserMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/BulkRemoveUserMetadata',
        $argument,
        ['\Zitadel\Management\V1\BulkRemoveUserMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 GetUserByID
     * @param \Zitadel\Management\V1\GetHumanProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetHumanProfile(\Zitadel\Management\V1\GetHumanProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetHumanProfile',
        $argument,
        ['\Zitadel\Management\V1\GetHumanProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 UpdateHumanUser
     * @param \Zitadel\Management\V1\UpdateHumanProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateHumanProfile(\Zitadel\Management\V1\UpdateHumanProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateHumanProfile',
        $argument,
        ['\Zitadel\Management\V1\UpdateHumanProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 GetUserByID
     * @param \Zitadel\Management\V1\GetHumanEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetHumanEmail(\Zitadel\Management\V1\GetHumanEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetHumanEmail',
        $argument,
        ['\Zitadel\Management\V1\GetHumanEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 SetEmail
     * @param \Zitadel\Management\V1\UpdateHumanEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateHumanEmail(\Zitadel\Management\V1\UpdateHumanEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateHumanEmail',
        $argument,
        ['\Zitadel\Management\V1\UpdateHumanEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: not used anymore in user state
     * To resend a verification email use the user service v2 ResendEmailCode
     * @param \Zitadel\Management\V1\ResendHumanInitializationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendHumanInitialization(\Zitadel\Management\V1\ResendHumanInitializationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResendHumanInitialization',
        $argument,
        ['\Zitadel\Management\V1\ResendHumanInitializationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ResendEmailCode
     * @param \Zitadel\Management\V1\ResendHumanEmailVerificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendHumanEmailVerification(\Zitadel\Management\V1\ResendHumanEmailVerificationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResendHumanEmailVerification',
        $argument,
        ['\Zitadel\Management\V1\ResendHumanEmailVerificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 GetUserByID
     * @param \Zitadel\Management\V1\GetHumanPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetHumanPhone(\Zitadel\Management\V1\GetHumanPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetHumanPhone',
        $argument,
        ['\Zitadel\Management\V1\GetHumanPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 SetPhone
     * @param \Zitadel\Management\V1\UpdateHumanPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateHumanPhone(\Zitadel\Management\V1\UpdateHumanPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateHumanPhone',
        $argument,
        ['\Zitadel\Management\V1\UpdateHumanPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 SetPhone
     * @param \Zitadel\Management\V1\RemoveHumanPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanPhone(\Zitadel\Management\V1\RemoveHumanPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanPhone',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ResendPhoneCode
     * @param \Zitadel\Management\V1\ResendHumanPhoneVerificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendHumanPhoneVerification(\Zitadel\Management\V1\ResendHumanPhoneVerificationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResendHumanPhoneVerification',
        $argument,
        ['\Zitadel\Management\V1\ResendHumanPhoneVerificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveHumanAvatarRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanAvatar(\Zitadel\Management\V1\RemoveHumanAvatarRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanAvatar',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanAvatarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 SetPassword
     * @param \Zitadel\Management\V1\SetHumanInitialPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetHumanInitialPassword(\Zitadel\Management\V1\SetHumanInitialPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetHumanInitialPassword',
        $argument,
        ['\Zitadel\Management\V1\SetHumanInitialPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 SetPassword
     * @param \Zitadel\Management\V1\SetHumanPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetHumanPassword(\Zitadel\Management\V1\SetHumanPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetHumanPassword',
        $argument,
        ['\Zitadel\Management\V1\SetHumanPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 PasswordReset
     * @param \Zitadel\Management\V1\SendHumanResetPasswordNotificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendHumanResetPasswordNotification(\Zitadel\Management\V1\SendHumanResetPasswordNotificationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SendHumanResetPasswordNotification',
        $argument,
        ['\Zitadel\Management\V1\SendHumanResetPasswordNotificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ListAuthenticationMethodTypes
     * @param \Zitadel\Management\V1\ListHumanAuthFactorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListHumanAuthFactors(\Zitadel\Management\V1\ListHumanAuthFactorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListHumanAuthFactors',
        $argument,
        ['\Zitadel\Management\V1\ListHumanAuthFactorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RemoveTOTP
     * @param \Zitadel\Management\V1\RemoveHumanAuthFactorOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanAuthFactorOTP(\Zitadel\Management\V1\RemoveHumanAuthFactorOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanAuthFactorOTP',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanAuthFactorOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RemoveU2F
     * @param \Zitadel\Management\V1\RemoveHumanAuthFactorU2FRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanAuthFactorU2F(\Zitadel\Management\V1\RemoveHumanAuthFactorU2FRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanAuthFactorU2F',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanAuthFactorU2FResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RemoveOTPSMS
     * @param \Zitadel\Management\V1\RemoveHumanAuthFactorOTPSMSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanAuthFactorOTPSMS(\Zitadel\Management\V1\RemoveHumanAuthFactorOTPSMSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanAuthFactorOTPSMS',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanAuthFactorOTPSMSResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RemoveOTPEmail
     * @param \Zitadel\Management\V1\RemoveHumanAuthFactorOTPEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanAuthFactorOTPEmail(\Zitadel\Management\V1\RemoveHumanAuthFactorOTPEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanAuthFactorOTPEmail',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanAuthFactorOTPEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ListPasskeys
     * @param \Zitadel\Management\V1\ListHumanPasswordlessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListHumanPasswordless(\Zitadel\Management\V1\ListHumanPasswordlessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListHumanPasswordless',
        $argument,
        ['\Zitadel\Management\V1\ListHumanPasswordlessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RegisterPasskey
     * @param \Zitadel\Management\V1\AddPasswordlessRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddPasswordlessRegistration(\Zitadel\Management\V1\AddPasswordlessRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddPasswordlessRegistration',
        $argument,
        ['\Zitadel\Management\V1\AddPasswordlessRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RegisterPasskey
     * @param \Zitadel\Management\V1\SendPasswordlessRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendPasswordlessRegistration(\Zitadel\Management\V1\SendPasswordlessRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SendPasswordlessRegistration',
        $argument,
        ['\Zitadel\Management\V1\SendPasswordlessRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RemovePasskey
     * @param \Zitadel\Management\V1\RemoveHumanPasswordlessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanPasswordless(\Zitadel\Management\V1\RemoveHumanPasswordlessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanPasswordless',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanPasswordlessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateMachine(\Zitadel\Management\V1\UpdateMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateMachine',
        $argument,
        ['\Zitadel\Management\V1\UpdateMachineResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GenerateMachineSecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateMachineSecret(\Zitadel\Management\V1\GenerateMachineSecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GenerateMachineSecret',
        $argument,
        ['\Zitadel\Management\V1\GenerateMachineSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveMachineSecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMachineSecret(\Zitadel\Management\V1\RemoveMachineSecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveMachineSecret',
        $argument,
        ['\Zitadel\Management\V1\RemoveMachineSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetMachineKeyByIDsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMachineKeyByIDs(\Zitadel\Management\V1\GetMachineKeyByIDsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetMachineKeyByIDs',
        $argument,
        ['\Zitadel\Management\V1\GetMachineKeyByIDsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListMachineKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMachineKeys(\Zitadel\Management\V1\ListMachineKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListMachineKeys',
        $argument,
        ['\Zitadel\Management\V1\ListMachineKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddMachineKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMachineKey(\Zitadel\Management\V1\AddMachineKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddMachineKey',
        $argument,
        ['\Zitadel\Management\V1\AddMachineKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveMachineKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMachineKey(\Zitadel\Management\V1\RemoveMachineKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveMachineKey',
        $argument,
        ['\Zitadel\Management\V1\RemoveMachineKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetPersonalAccessTokenByIDsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPersonalAccessTokenByIDs(\Zitadel\Management\V1\GetPersonalAccessTokenByIDsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetPersonalAccessTokenByIDs',
        $argument,
        ['\Zitadel\Management\V1\GetPersonalAccessTokenByIDsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListPersonalAccessTokensRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPersonalAccessTokens(\Zitadel\Management\V1\ListPersonalAccessTokensRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListPersonalAccessTokens',
        $argument,
        ['\Zitadel\Management\V1\ListPersonalAccessTokensResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddPersonalAccessTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddPersonalAccessToken(\Zitadel\Management\V1\AddPersonalAccessTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddPersonalAccessToken',
        $argument,
        ['\Zitadel\Management\V1\AddPersonalAccessTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemovePersonalAccessTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemovePersonalAccessToken(\Zitadel\Management\V1\RemovePersonalAccessTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemovePersonalAccessToken',
        $argument,
        ['\Zitadel\Management\V1\RemovePersonalAccessTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 ListLinkedIDPs
     * @param \Zitadel\Management\V1\ListHumanLinkedIDPsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListHumanLinkedIDPs(\Zitadel\Management\V1\ListHumanLinkedIDPsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListHumanLinkedIDPs',
        $argument,
        ['\Zitadel\Management\V1\ListHumanLinkedIDPsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: please use user service v2 RemoveLinkedIDP
     * @param \Zitadel\Management\V1\RemoveHumanLinkedIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveHumanLinkedIDP(\Zitadel\Management\V1\RemoveHumanLinkedIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveHumanLinkedIDP',
        $argument,
        ['\Zitadel\Management\V1\RemoveHumanLinkedIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListUserMembershipsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUserMemberships(\Zitadel\Management\V1\ListUserMembershipsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListUserMemberships',
        $argument,
        ['\Zitadel\Management\V1\ListUserMembershipsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetMyOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyOrg(\Zitadel\Management\V1\GetMyOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetMyOrg',
        $argument,
        ['\Zitadel\Management\V1\GetMyOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetOrgByDomainGlobalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrgByDomainGlobal(\Zitadel\Management\V1\GetOrgByDomainGlobalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetOrgByDomainGlobal',
        $argument,
        ['\Zitadel\Management\V1\GetOrgByDomainGlobalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListOrgChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgChanges(\Zitadel\Management\V1\ListOrgChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListOrgChanges',
        $argument,
        ['\Zitadel\Management\V1\ListOrgChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrg(\Zitadel\Management\V1\AddOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddOrg',
        $argument,
        ['\Zitadel\Management\V1\AddOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrg(\Zitadel\Management\V1\UpdateOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateOrg',
        $argument,
        ['\Zitadel\Management\V1\UpdateOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeactivateOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateOrg(\Zitadel\Management\V1\DeactivateOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateOrg',
        $argument,
        ['\Zitadel\Management\V1\DeactivateOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ReactivateOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateOrg(\Zitadel\Management\V1\ReactivateOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateOrg',
        $argument,
        ['\Zitadel\Management\V1\ReactivateOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOrg(\Zitadel\Management\V1\RemoveOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveOrg',
        $argument,
        ['\Zitadel\Management\V1\RemoveOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetOrgMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetOrgMetadata(\Zitadel\Management\V1\SetOrgMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetOrgMetadata',
        $argument,
        ['\Zitadel\Management\V1\SetOrgMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\BulkSetOrgMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BulkSetOrgMetadata(\Zitadel\Management\V1\BulkSetOrgMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/BulkSetOrgMetadata',
        $argument,
        ['\Zitadel\Management\V1\BulkSetOrgMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListOrgMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgMetadata(\Zitadel\Management\V1\ListOrgMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListOrgMetadata',
        $argument,
        ['\Zitadel\Management\V1\ListOrgMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetOrgMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrgMetadata(\Zitadel\Management\V1\GetOrgMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetOrgMetadata',
        $argument,
        ['\Zitadel\Management\V1\GetOrgMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveOrgMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOrgMetadata(\Zitadel\Management\V1\RemoveOrgMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveOrgMetadata',
        $argument,
        ['\Zitadel\Management\V1\RemoveOrgMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\BulkRemoveOrgMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BulkRemoveOrgMetadata(\Zitadel\Management\V1\BulkRemoveOrgMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/BulkRemoveOrgMetadata',
        $argument,
        ['\Zitadel\Management\V1\BulkRemoveOrgMetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListOrgDomainsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgDomains(\Zitadel\Management\V1\ListOrgDomainsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListOrgDomains',
        $argument,
        ['\Zitadel\Management\V1\ListOrgDomainsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddOrgDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrgDomain(\Zitadel\Management\V1\AddOrgDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddOrgDomain',
        $argument,
        ['\Zitadel\Management\V1\AddOrgDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveOrgDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOrgDomain(\Zitadel\Management\V1\RemoveOrgDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveOrgDomain',
        $argument,
        ['\Zitadel\Management\V1\RemoveOrgDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GenerateOrgDomainValidationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GenerateOrgDomainValidation(\Zitadel\Management\V1\GenerateOrgDomainValidationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GenerateOrgDomainValidation',
        $argument,
        ['\Zitadel\Management\V1\GenerateOrgDomainValidationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ValidateOrgDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateOrgDomain(\Zitadel\Management\V1\ValidateOrgDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ValidateOrgDomain',
        $argument,
        ['\Zitadel\Management\V1\ValidateOrgDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetPrimaryOrgDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPrimaryOrgDomain(\Zitadel\Management\V1\SetPrimaryOrgDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetPrimaryOrgDomain',
        $argument,
        ['\Zitadel\Management\V1\SetPrimaryOrgDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListOrgMemberRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgMemberRoles(\Zitadel\Management\V1\ListOrgMemberRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListOrgMemberRoles',
        $argument,
        ['\Zitadel\Management\V1\ListOrgMemberRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListOrgMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgMembers(\Zitadel\Management\V1\ListOrgMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListOrgMembers',
        $argument,
        ['\Zitadel\Management\V1\ListOrgMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddOrgMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrgMember(\Zitadel\Management\V1\AddOrgMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddOrgMember',
        $argument,
        ['\Zitadel\Management\V1\AddOrgMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateOrgMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrgMember(\Zitadel\Management\V1\UpdateOrgMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateOrgMember',
        $argument,
        ['\Zitadel\Management\V1\UpdateOrgMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveOrgMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOrgMember(\Zitadel\Management\V1\RemoveOrgMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveOrgMember',
        $argument,
        ['\Zitadel\Management\V1\RemoveOrgMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetProjectByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProjectByID(\Zitadel\Management\V1\GetProjectByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetProjectByID',
        $argument,
        ['\Zitadel\Management\V1\GetProjectByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetGrantedProjectByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGrantedProjectByID(\Zitadel\Management\V1\GetGrantedProjectByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetGrantedProjectByID',
        $argument,
        ['\Zitadel\Management\V1\GetGrantedProjectByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjects(\Zitadel\Management\V1\ListProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjects',
        $argument,
        ['\Zitadel\Management\V1\ListProjectsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListGrantedProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListGrantedProjects(\Zitadel\Management\V1\ListGrantedProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListGrantedProjects',
        $argument,
        ['\Zitadel\Management\V1\ListGrantedProjectsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListGrantedProjectRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListGrantedProjectRoles(\Zitadel\Management\V1\ListGrantedProjectRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListGrantedProjectRoles',
        $argument,
        ['\Zitadel\Management\V1\ListGrantedProjectRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectChanges(\Zitadel\Management\V1\ListProjectChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectChanges',
        $argument,
        ['\Zitadel\Management\V1\ListProjectChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddProject(\Zitadel\Management\V1\AddProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddProject',
        $argument,
        ['\Zitadel\Management\V1\AddProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProject(\Zitadel\Management\V1\UpdateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateProject',
        $argument,
        ['\Zitadel\Management\V1\UpdateProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeactivateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateProject(\Zitadel\Management\V1\DeactivateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateProject',
        $argument,
        ['\Zitadel\Management\V1\DeactivateProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ReactivateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateProject(\Zitadel\Management\V1\ReactivateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateProject',
        $argument,
        ['\Zitadel\Management\V1\ReactivateProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveProject(\Zitadel\Management\V1\RemoveProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveProject',
        $argument,
        ['\Zitadel\Management\V1\RemoveProjectResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectRoles(\Zitadel\Management\V1\ListProjectRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectRoles',
        $argument,
        ['\Zitadel\Management\V1\ListProjectRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddProjectRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddProjectRole(\Zitadel\Management\V1\AddProjectRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddProjectRole',
        $argument,
        ['\Zitadel\Management\V1\AddProjectRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\BulkAddProjectRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BulkAddProjectRoles(\Zitadel\Management\V1\BulkAddProjectRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/BulkAddProjectRoles',
        $argument,
        ['\Zitadel\Management\V1\BulkAddProjectRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateProjectRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProjectRole(\Zitadel\Management\V1\UpdateProjectRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateProjectRole',
        $argument,
        ['\Zitadel\Management\V1\UpdateProjectRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveProjectRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveProjectRole(\Zitadel\Management\V1\RemoveProjectRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveProjectRole',
        $argument,
        ['\Zitadel\Management\V1\RemoveProjectRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectMemberRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectMemberRoles(\Zitadel\Management\V1\ListProjectMemberRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectMemberRoles',
        $argument,
        ['\Zitadel\Management\V1\ListProjectMemberRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectMembers(\Zitadel\Management\V1\ListProjectMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectMembers',
        $argument,
        ['\Zitadel\Management\V1\ListProjectMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddProjectMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddProjectMember(\Zitadel\Management\V1\AddProjectMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddProjectMember',
        $argument,
        ['\Zitadel\Management\V1\AddProjectMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateProjectMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProjectMember(\Zitadel\Management\V1\UpdateProjectMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateProjectMember',
        $argument,
        ['\Zitadel\Management\V1\UpdateProjectMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveProjectMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveProjectMember(\Zitadel\Management\V1\RemoveProjectMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveProjectMember',
        $argument,
        ['\Zitadel\Management\V1\RemoveProjectMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetAppByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAppByID(\Zitadel\Management\V1\GetAppByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetAppByID',
        $argument,
        ['\Zitadel\Management\V1\GetAppByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListApps(\Zitadel\Management\V1\ListAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListApps',
        $argument,
        ['\Zitadel\Management\V1\ListAppsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListAppChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAppChanges(\Zitadel\Management\V1\ListAppChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListAppChanges',
        $argument,
        ['\Zitadel\Management\V1\ListAppChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddOIDCAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOIDCApp(\Zitadel\Management\V1\AddOIDCAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddOIDCApp',
        $argument,
        ['\Zitadel\Management\V1\AddOIDCAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddSAMLAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSAMLApp(\Zitadel\Management\V1\AddSAMLAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddSAMLApp',
        $argument,
        ['\Zitadel\Management\V1\AddSAMLAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddAPIAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAPIApp(\Zitadel\Management\V1\AddAPIAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddAPIApp',
        $argument,
        ['\Zitadel\Management\V1\AddAPIAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Changes application
     * @param \Zitadel\Management\V1\UpdateAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateApp(\Zitadel\Management\V1\UpdateAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateApp',
        $argument,
        ['\Zitadel\Management\V1\UpdateAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateOIDCAppConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOIDCAppConfig(\Zitadel\Management\V1\UpdateOIDCAppConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateOIDCAppConfig',
        $argument,
        ['\Zitadel\Management\V1\UpdateOIDCAppConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateSAMLAppConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSAMLAppConfig(\Zitadel\Management\V1\UpdateSAMLAppConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateSAMLAppConfig',
        $argument,
        ['\Zitadel\Management\V1\UpdateSAMLAppConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateAPIAppConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAPIAppConfig(\Zitadel\Management\V1\UpdateAPIAppConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateAPIAppConfig',
        $argument,
        ['\Zitadel\Management\V1\UpdateAPIAppConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeactivateAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateApp(\Zitadel\Management\V1\DeactivateAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateApp',
        $argument,
        ['\Zitadel\Management\V1\DeactivateAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ReactivateAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateApp(\Zitadel\Management\V1\ReactivateAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateApp',
        $argument,
        ['\Zitadel\Management\V1\ReactivateAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveApp(\Zitadel\Management\V1\RemoveAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveApp',
        $argument,
        ['\Zitadel\Management\V1\RemoveAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RegenerateOIDCClientSecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegenerateOIDCClientSecret(\Zitadel\Management\V1\RegenerateOIDCClientSecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RegenerateOIDCClientSecret',
        $argument,
        ['\Zitadel\Management\V1\RegenerateOIDCClientSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RegenerateAPIClientSecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegenerateAPIClientSecret(\Zitadel\Management\V1\RegenerateAPIClientSecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RegenerateAPIClientSecret',
        $argument,
        ['\Zitadel\Management\V1\RegenerateAPIClientSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetAppKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAppKey(\Zitadel\Management\V1\GetAppKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetAppKey',
        $argument,
        ['\Zitadel\Management\V1\GetAppKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListAppKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAppKeys(\Zitadel\Management\V1\ListAppKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListAppKeys',
        $argument,
        ['\Zitadel\Management\V1\ListAppKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddAppKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAppKey(\Zitadel\Management\V1\AddAppKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddAppKey',
        $argument,
        ['\Zitadel\Management\V1\AddAppKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveAppKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveAppKey(\Zitadel\Management\V1\RemoveAppKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveAppKey',
        $argument,
        ['\Zitadel\Management\V1\RemoveAppKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectGrantChangesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectGrantChanges(\Zitadel\Management\V1\ListProjectGrantChangesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectGrantChanges',
        $argument,
        ['\Zitadel\Management\V1\ListProjectGrantChangesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetProjectGrantByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProjectGrantByID(\Zitadel\Management\V1\GetProjectGrantByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetProjectGrantByID',
        $argument,
        ['\Zitadel\Management\V1\GetProjectGrantByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectGrantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectGrants(\Zitadel\Management\V1\ListProjectGrantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectGrants',
        $argument,
        ['\Zitadel\Management\V1\ListProjectGrantsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListAllProjectGrantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAllProjectGrants(\Zitadel\Management\V1\ListAllProjectGrantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListAllProjectGrants',
        $argument,
        ['\Zitadel\Management\V1\ListAllProjectGrantsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddProjectGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddProjectGrant(\Zitadel\Management\V1\AddProjectGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddProjectGrant',
        $argument,
        ['\Zitadel\Management\V1\AddProjectGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateProjectGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProjectGrant(\Zitadel\Management\V1\UpdateProjectGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateProjectGrant',
        $argument,
        ['\Zitadel\Management\V1\UpdateProjectGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeactivateProjectGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateProjectGrant(\Zitadel\Management\V1\DeactivateProjectGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateProjectGrant',
        $argument,
        ['\Zitadel\Management\V1\DeactivateProjectGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ReactivateProjectGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateProjectGrant(\Zitadel\Management\V1\ReactivateProjectGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateProjectGrant',
        $argument,
        ['\Zitadel\Management\V1\ReactivateProjectGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveProjectGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveProjectGrant(\Zitadel\Management\V1\RemoveProjectGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveProjectGrant',
        $argument,
        ['\Zitadel\Management\V1\RemoveProjectGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectGrantMemberRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectGrantMemberRoles(\Zitadel\Management\V1\ListProjectGrantMemberRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectGrantMemberRoles',
        $argument,
        ['\Zitadel\Management\V1\ListProjectGrantMemberRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListProjectGrantMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjectGrantMembers(\Zitadel\Management\V1\ListProjectGrantMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProjectGrantMembers',
        $argument,
        ['\Zitadel\Management\V1\ListProjectGrantMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddProjectGrantMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddProjectGrantMember(\Zitadel\Management\V1\AddProjectGrantMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddProjectGrantMember',
        $argument,
        ['\Zitadel\Management\V1\AddProjectGrantMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateProjectGrantMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProjectGrantMember(\Zitadel\Management\V1\UpdateProjectGrantMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateProjectGrantMember',
        $argument,
        ['\Zitadel\Management\V1\UpdateProjectGrantMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveProjectGrantMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveProjectGrantMember(\Zitadel\Management\V1\RemoveProjectGrantMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveProjectGrantMember',
        $argument,
        ['\Zitadel\Management\V1\RemoveProjectGrantMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetUserGrantByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserGrantByID(\Zitadel\Management\V1\GetUserGrantByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetUserGrantByID',
        $argument,
        ['\Zitadel\Management\V1\GetUserGrantByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListUserGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUserGrants(\Zitadel\Management\V1\ListUserGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListUserGrants',
        $argument,
        ['\Zitadel\Management\V1\ListUserGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddUserGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddUserGrant(\Zitadel\Management\V1\AddUserGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddUserGrant',
        $argument,
        ['\Zitadel\Management\V1\AddUserGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateUserGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUserGrant(\Zitadel\Management\V1\UpdateUserGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateUserGrant',
        $argument,
        ['\Zitadel\Management\V1\UpdateUserGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeactivateUserGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateUserGrant(\Zitadel\Management\V1\DeactivateUserGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateUserGrant',
        $argument,
        ['\Zitadel\Management\V1\DeactivateUserGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ReactivateUserGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateUserGrant(\Zitadel\Management\V1\ReactivateUserGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateUserGrant',
        $argument,
        ['\Zitadel\Management\V1\ReactivateUserGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveUserGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveUserGrant(\Zitadel\Management\V1\RemoveUserGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveUserGrant',
        $argument,
        ['\Zitadel\Management\V1\RemoveUserGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\BulkRemoveUserGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BulkRemoveUserGrant(\Zitadel\Management\V1\BulkRemoveUserGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/BulkRemoveUserGrant',
        $argument,
        ['\Zitadel\Management\V1\BulkRemoveUserGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * deprecated: please use DomainPolicy instead
     * @param \Zitadel\Management\V1\GetOrgIAMPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrgIAMPolicy(\Zitadel\Management\V1\GetOrgIAMPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetOrgIAMPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetOrgIAMPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDomainPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDomainPolicy(\Zitadel\Management\V1\GetDomainPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDomainPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDomainPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLoginPolicy(\Zitadel\Management\V1\GetLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultLoginPolicy(\Zitadel\Management\V1\GetDefaultLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddCustomLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomLoginPolicy(\Zitadel\Management\V1\AddCustomLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddCustomLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddCustomLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateCustomLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomLoginPolicy(\Zitadel\Management\V1\UpdateCustomLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateCustomLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\UpdateCustomLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetLoginPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetLoginPolicyToDefault(\Zitadel\Management\V1\ResetLoginPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetLoginPolicyToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetLoginPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListLoginPolicyIDPsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLoginPolicyIDPs(\Zitadel\Management\V1\ListLoginPolicyIDPsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListLoginPolicyIDPs',
        $argument,
        ['\Zitadel\Management\V1\ListLoginPolicyIDPsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddIDPToLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddIDPToLoginPolicy(\Zitadel\Management\V1\AddIDPToLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddIDPToLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddIDPToLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveIDPFromLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIDPFromLoginPolicy(\Zitadel\Management\V1\RemoveIDPFromLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveIDPFromLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\RemoveIDPFromLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListLoginPolicySecondFactorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLoginPolicySecondFactors(\Zitadel\Management\V1\ListLoginPolicySecondFactorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListLoginPolicySecondFactors',
        $argument,
        ['\Zitadel\Management\V1\ListLoginPolicySecondFactorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddSecondFactorToLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSecondFactorToLoginPolicy(\Zitadel\Management\V1\AddSecondFactorToLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddSecondFactorToLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddSecondFactorToLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveSecondFactorFromLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveSecondFactorFromLoginPolicy(\Zitadel\Management\V1\RemoveSecondFactorFromLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveSecondFactorFromLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\RemoveSecondFactorFromLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListLoginPolicyMultiFactorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLoginPolicyMultiFactors(\Zitadel\Management\V1\ListLoginPolicyMultiFactorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListLoginPolicyMultiFactors',
        $argument,
        ['\Zitadel\Management\V1\ListLoginPolicyMultiFactorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddMultiFactorToLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMultiFactorToLoginPolicy(\Zitadel\Management\V1\AddMultiFactorToLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddMultiFactorToLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddMultiFactorToLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveMultiFactorFromLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMultiFactorFromLoginPolicy(\Zitadel\Management\V1\RemoveMultiFactorFromLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveMultiFactorFromLoginPolicy',
        $argument,
        ['\Zitadel\Management\V1\RemoveMultiFactorFromLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetPasswordComplexityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordComplexityPolicy(\Zitadel\Management\V1\GetPasswordComplexityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetPasswordComplexityPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetPasswordComplexityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultPasswordComplexityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordComplexityPolicy(\Zitadel\Management\V1\GetDefaultPasswordComplexityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultPasswordComplexityPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultPasswordComplexityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddCustomPasswordComplexityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomPasswordComplexityPolicy(\Zitadel\Management\V1\AddCustomPasswordComplexityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddCustomPasswordComplexityPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddCustomPasswordComplexityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateCustomPasswordComplexityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomPasswordComplexityPolicy(\Zitadel\Management\V1\UpdateCustomPasswordComplexityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateCustomPasswordComplexityPolicy',
        $argument,
        ['\Zitadel\Management\V1\UpdateCustomPasswordComplexityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetPasswordComplexityPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetPasswordComplexityPolicyToDefault(\Zitadel\Management\V1\ResetPasswordComplexityPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetPasswordComplexityPolicyToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetPasswordComplexityPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetPasswordAgePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordAgePolicy(\Zitadel\Management\V1\GetPasswordAgePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetPasswordAgePolicy',
        $argument,
        ['\Zitadel\Management\V1\GetPasswordAgePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultPasswordAgePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordAgePolicy(\Zitadel\Management\V1\GetDefaultPasswordAgePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultPasswordAgePolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultPasswordAgePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddCustomPasswordAgePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomPasswordAgePolicy(\Zitadel\Management\V1\AddCustomPasswordAgePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddCustomPasswordAgePolicy',
        $argument,
        ['\Zitadel\Management\V1\AddCustomPasswordAgePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateCustomPasswordAgePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomPasswordAgePolicy(\Zitadel\Management\V1\UpdateCustomPasswordAgePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateCustomPasswordAgePolicy',
        $argument,
        ['\Zitadel\Management\V1\UpdateCustomPasswordAgePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetPasswordAgePolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetPasswordAgePolicyToDefault(\Zitadel\Management\V1\ResetPasswordAgePolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetPasswordAgePolicyToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetPasswordAgePolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetLockoutPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLockoutPolicy(\Zitadel\Management\V1\GetLockoutPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetLockoutPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetLockoutPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultLockoutPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultLockoutPolicy(\Zitadel\Management\V1\GetDefaultLockoutPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultLockoutPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultLockoutPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddCustomLockoutPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomLockoutPolicy(\Zitadel\Management\V1\AddCustomLockoutPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddCustomLockoutPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddCustomLockoutPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateCustomLockoutPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomLockoutPolicy(\Zitadel\Management\V1\UpdateCustomLockoutPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateCustomLockoutPolicy',
        $argument,
        ['\Zitadel\Management\V1\UpdateCustomLockoutPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetLockoutPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetLockoutPolicyToDefault(\Zitadel\Management\V1\ResetLockoutPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetLockoutPolicyToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetLockoutPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetPrivacyPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPrivacyPolicy(\Zitadel\Management\V1\GetPrivacyPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetPrivacyPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetPrivacyPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultPrivacyPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPrivacyPolicy(\Zitadel\Management\V1\GetDefaultPrivacyPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultPrivacyPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultPrivacyPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddCustomPrivacyPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomPrivacyPolicy(\Zitadel\Management\V1\AddCustomPrivacyPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddCustomPrivacyPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddCustomPrivacyPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateCustomPrivacyPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomPrivacyPolicy(\Zitadel\Management\V1\UpdateCustomPrivacyPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateCustomPrivacyPolicy',
        $argument,
        ['\Zitadel\Management\V1\UpdateCustomPrivacyPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetPrivacyPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetPrivacyPolicyToDefault(\Zitadel\Management\V1\ResetPrivacyPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetPrivacyPolicyToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetPrivacyPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetNotificationPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNotificationPolicy(\Zitadel\Management\V1\GetNotificationPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetNotificationPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetNotificationPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultNotificationPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultNotificationPolicy(\Zitadel\Management\V1\GetDefaultNotificationPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultNotificationPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultNotificationPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddCustomNotificationPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomNotificationPolicy(\Zitadel\Management\V1\AddCustomNotificationPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddCustomNotificationPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddCustomNotificationPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateCustomNotificationPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomNotificationPolicy(\Zitadel\Management\V1\UpdateCustomNotificationPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateCustomNotificationPolicy',
        $argument,
        ['\Zitadel\Management\V1\UpdateCustomNotificationPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetNotificationPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetNotificationPolicyToDefault(\Zitadel\Management\V1\ResetNotificationPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetNotificationPolicyToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetNotificationPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLabelPolicy(\Zitadel\Management\V1\GetLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetLabelPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetPreviewLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPreviewLabelPolicy(\Zitadel\Management\V1\GetPreviewLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetPreviewLabelPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetPreviewLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultLabelPolicy(\Zitadel\Management\V1\GetDefaultLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultLabelPolicy',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddCustomLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomLabelPolicy(\Zitadel\Management\V1\AddCustomLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddCustomLabelPolicy',
        $argument,
        ['\Zitadel\Management\V1\AddCustomLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateCustomLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomLabelPolicy(\Zitadel\Management\V1\UpdateCustomLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateCustomLabelPolicy',
        $argument,
        ['\Zitadel\Management\V1\UpdateCustomLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ActivateCustomLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateCustomLabelPolicy(\Zitadel\Management\V1\ActivateCustomLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ActivateCustomLabelPolicy',
        $argument,
        ['\Zitadel\Management\V1\ActivateCustomLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveCustomLabelPolicyLogoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveCustomLabelPolicyLogo(\Zitadel\Management\V1\RemoveCustomLabelPolicyLogoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveCustomLabelPolicyLogo',
        $argument,
        ['\Zitadel\Management\V1\RemoveCustomLabelPolicyLogoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveCustomLabelPolicyLogoDarkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveCustomLabelPolicyLogoDark(\Zitadel\Management\V1\RemoveCustomLabelPolicyLogoDarkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveCustomLabelPolicyLogoDark',
        $argument,
        ['\Zitadel\Management\V1\RemoveCustomLabelPolicyLogoDarkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveCustomLabelPolicyIconRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveCustomLabelPolicyIcon(\Zitadel\Management\V1\RemoveCustomLabelPolicyIconRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveCustomLabelPolicyIcon',
        $argument,
        ['\Zitadel\Management\V1\RemoveCustomLabelPolicyIconResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveCustomLabelPolicyIconDarkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveCustomLabelPolicyIconDark(\Zitadel\Management\V1\RemoveCustomLabelPolicyIconDarkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveCustomLabelPolicyIconDark',
        $argument,
        ['\Zitadel\Management\V1\RemoveCustomLabelPolicyIconDarkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveCustomLabelPolicyFontRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveCustomLabelPolicyFont(\Zitadel\Management\V1\RemoveCustomLabelPolicyFontRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveCustomLabelPolicyFont',
        $argument,
        ['\Zitadel\Management\V1\RemoveCustomLabelPolicyFontResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetLabelPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetLabelPolicyToDefault(\Zitadel\Management\V1\ResetLabelPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetLabelPolicyToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetLabelPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomInitMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomInitMessageText(\Zitadel\Management\V1\GetCustomInitMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomInitMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomInitMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultInitMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultInitMessageText(\Zitadel\Management\V1\GetDefaultInitMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultInitMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultInitMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomInitMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomInitMessageText(\Zitadel\Management\V1\SetCustomInitMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomInitMessageText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomInitMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomInitMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomInitMessageTextToDefault(\Zitadel\Management\V1\ResetCustomInitMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomInitMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomInitMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomPasswordResetMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomPasswordResetMessageText(\Zitadel\Management\V1\GetCustomPasswordResetMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomPasswordResetMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomPasswordResetMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultPasswordResetMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordResetMessageText(\Zitadel\Management\V1\GetDefaultPasswordResetMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultPasswordResetMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultPasswordResetMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomPasswordResetMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomPasswordResetMessageText(\Zitadel\Management\V1\SetCustomPasswordResetMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomPasswordResetMessageText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomPasswordResetMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomPasswordResetMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomPasswordResetMessageTextToDefault(\Zitadel\Management\V1\ResetCustomPasswordResetMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomPasswordResetMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomPasswordResetMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomVerifyEmailMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifyEmailMessageText(\Zitadel\Management\V1\GetCustomVerifyEmailMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomVerifyEmailMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomVerifyEmailMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultVerifyEmailMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifyEmailMessageText(\Zitadel\Management\V1\GetDefaultVerifyEmailMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultVerifyEmailMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultVerifyEmailMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomVerifyEmailMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomVerifyEmailMessageText(\Zitadel\Management\V1\SetCustomVerifyEmailMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomVerifyEmailMessageText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomVerifyEmailMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomVerifyEmailMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifyEmailMessageTextToDefault(\Zitadel\Management\V1\ResetCustomVerifyEmailMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomVerifyEmailMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomVerifyEmailMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomVerifyPhoneMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifyPhoneMessageText(\Zitadel\Management\V1\GetCustomVerifyPhoneMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomVerifyPhoneMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomVerifyPhoneMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultVerifyPhoneMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifyPhoneMessageText(\Zitadel\Management\V1\GetDefaultVerifyPhoneMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultVerifyPhoneMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultVerifyPhoneMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomVerifyPhoneMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomVerifyPhoneMessageText(\Zitadel\Management\V1\SetCustomVerifyPhoneMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomVerifyPhoneMessageText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomVerifyPhoneMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomVerifyPhoneMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifyPhoneMessageTextToDefault(\Zitadel\Management\V1\ResetCustomVerifyPhoneMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomVerifyPhoneMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomVerifyPhoneMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomVerifySMSOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifySMSOTPMessageText(\Zitadel\Management\V1\GetCustomVerifySMSOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomVerifySMSOTPMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomVerifySMSOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultVerifySMSOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifySMSOTPMessageText(\Zitadel\Management\V1\GetDefaultVerifySMSOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultVerifySMSOTPMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultVerifySMSOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomVerifySMSOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomVerifySMSOTPMessageText(\Zitadel\Management\V1\SetCustomVerifySMSOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomVerifySMSOTPMessageText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomVerifySMSOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomVerifySMSOTPMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifySMSOTPMessageTextToDefault(\Zitadel\Management\V1\ResetCustomVerifySMSOTPMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomVerifySMSOTPMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomVerifySMSOTPMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomVerifyEmailOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifyEmailOTPMessageText(\Zitadel\Management\V1\GetCustomVerifyEmailOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomVerifyEmailOTPMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomVerifyEmailOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultVerifyEmailOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifyEmailOTPMessageText(\Zitadel\Management\V1\GetDefaultVerifyEmailOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultVerifyEmailOTPMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultVerifyEmailOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomVerifyEmailOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomVerifyEmailOTPMessageText(\Zitadel\Management\V1\SetCustomVerifyEmailOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomVerifyEmailOTPMessageText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomVerifyEmailOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomVerifyEmailOTPMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifyEmailOTPMessageTextToDefault(\Zitadel\Management\V1\ResetCustomVerifyEmailOTPMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomVerifyEmailOTPMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomVerifyEmailOTPMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomDomainClaimedMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomDomainClaimedMessageText(\Zitadel\Management\V1\GetCustomDomainClaimedMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomDomainClaimedMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomDomainClaimedMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultDomainClaimedMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultDomainClaimedMessageText(\Zitadel\Management\V1\GetDefaultDomainClaimedMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultDomainClaimedMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultDomainClaimedMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomDomainClaimedMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomDomainClaimedMessageCustomText(\Zitadel\Management\V1\SetCustomDomainClaimedMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomDomainClaimedMessageCustomText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomDomainClaimedMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomDomainClaimedMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomDomainClaimedMessageTextToDefault(\Zitadel\Management\V1\ResetCustomDomainClaimedMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomDomainClaimedMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomDomainClaimedMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomPasswordlessRegistrationMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomPasswordlessRegistrationMessageText(\Zitadel\Management\V1\GetCustomPasswordlessRegistrationMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomPasswordlessRegistrationMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomPasswordlessRegistrationMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultPasswordlessRegistrationMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordlessRegistrationMessageText(\Zitadel\Management\V1\GetDefaultPasswordlessRegistrationMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultPasswordlessRegistrationMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultPasswordlessRegistrationMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomPasswordlessRegistrationMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomPasswordlessRegistrationMessageCustomText(\Zitadel\Management\V1\SetCustomPasswordlessRegistrationMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomPasswordlessRegistrationMessageCustomText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomPasswordlessRegistrationMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomPasswordlessRegistrationMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomPasswordlessRegistrationMessageTextToDefault(\Zitadel\Management\V1\ResetCustomPasswordlessRegistrationMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomPasswordlessRegistrationMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomPasswordlessRegistrationMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomPasswordChangeMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomPasswordChangeMessageText(\Zitadel\Management\V1\GetCustomPasswordChangeMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomPasswordChangeMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomPasswordChangeMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultPasswordChangeMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordChangeMessageText(\Zitadel\Management\V1\GetDefaultPasswordChangeMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultPasswordChangeMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultPasswordChangeMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomPasswordChangeMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomPasswordChangeMessageCustomText(\Zitadel\Management\V1\SetCustomPasswordChangeMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomPasswordChangeMessageCustomText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomPasswordChangeMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomPasswordChangeMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomPasswordChangeMessageTextToDefault(\Zitadel\Management\V1\ResetCustomPasswordChangeMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomPasswordChangeMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomPasswordChangeMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomInviteUserMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomInviteUserMessageText(\Zitadel\Management\V1\GetCustomInviteUserMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomInviteUserMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetCustomInviteUserMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultInviteUserMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultInviteUserMessageText(\Zitadel\Management\V1\GetDefaultInviteUserMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultInviteUserMessageText',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultInviteUserMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomInviteUserMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomInviteUserMessageCustomText(\Zitadel\Management\V1\SetCustomInviteUserMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomInviteUserMessageCustomText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomInviteUserMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomInviteUserMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomInviteUserMessageTextToDefault(\Zitadel\Management\V1\ResetCustomInviteUserMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomInviteUserMessageTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomInviteUserMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetCustomLoginTextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomLoginTexts(\Zitadel\Management\V1\GetCustomLoginTextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetCustomLoginTexts',
        $argument,
        ['\Zitadel\Management\V1\GetCustomLoginTextsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetDefaultLoginTextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultLoginTexts(\Zitadel\Management\V1\GetDefaultLoginTextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetDefaultLoginTexts',
        $argument,
        ['\Zitadel\Management\V1\GetDefaultLoginTextsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetCustomLoginTextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomLoginText(\Zitadel\Management\V1\SetCustomLoginTextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetCustomLoginText',
        $argument,
        ['\Zitadel\Management\V1\SetCustomLoginTextsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ResetCustomLoginTextsToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomLoginTextToDefault(\Zitadel\Management\V1\ResetCustomLoginTextsToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ResetCustomLoginTextToDefault',
        $argument,
        ['\Zitadel\Management\V1\ResetCustomLoginTextsToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetOrgIDPByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrgIDPByID(\Zitadel\Management\V1\GetOrgIDPByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetOrgIDPByID',
        $argument,
        ['\Zitadel\Management\V1\GetOrgIDPByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListOrgIDPsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgIDPs(\Zitadel\Management\V1\ListOrgIDPsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListOrgIDPs',
        $argument,
        ['\Zitadel\Management\V1\ListOrgIDPsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddOrgOIDCIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrgOIDCIDP(\Zitadel\Management\V1\AddOrgOIDCIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddOrgOIDCIDP',
        $argument,
        ['\Zitadel\Management\V1\AddOrgOIDCIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\AddOrgJWTIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrgJWTIDP(\Zitadel\Management\V1\AddOrgJWTIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddOrgJWTIDP',
        $argument,
        ['\Zitadel\Management\V1\AddOrgJWTIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeactivateOrgIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateOrgIDP(\Zitadel\Management\V1\DeactivateOrgIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateOrgIDP',
        $argument,
        ['\Zitadel\Management\V1\DeactivateOrgIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ReactivateOrgIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateOrgIDP(\Zitadel\Management\V1\ReactivateOrgIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateOrgIDP',
        $argument,
        ['\Zitadel\Management\V1\ReactivateOrgIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\RemoveOrgIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOrgIDP(\Zitadel\Management\V1\RemoveOrgIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RemoveOrgIDP',
        $argument,
        ['\Zitadel\Management\V1\RemoveOrgIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateOrgIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrgIDP(\Zitadel\Management\V1\UpdateOrgIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateOrgIDP',
        $argument,
        ['\Zitadel\Management\V1\UpdateOrgIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateOrgIDPOIDCConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrgIDPOIDCConfig(\Zitadel\Management\V1\UpdateOrgIDPOIDCConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateOrgIDPOIDCConfig',
        $argument,
        ['\Zitadel\Management\V1\UpdateOrgIDPOIDCConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateOrgIDPJWTConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrgIDPJWTConfig(\Zitadel\Management\V1\UpdateOrgIDPJWTConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateOrgIDPJWTConfig',
        $argument,
        ['\Zitadel\Management\V1\UpdateOrgIDPJWTConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns all identity providers, which match the query
     * Limit should always be set, there is a default limit set by the service
     * @param \Zitadel\Management\V1\ListProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProviders(\Zitadel\Management\V1\ListProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListProviders',
        $argument,
        ['\Zitadel\Management\V1\ListProvidersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns an identity provider of the organization
     * @param \Zitadel\Management\V1\GetProviderByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProviderByID(\Zitadel\Management\V1\GetProviderByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetProviderByID',
        $argument,
        ['\Zitadel\Management\V1\GetProviderByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new OAuth2 identity provider in the organization
     * @param \Zitadel\Management\V1\AddGenericOAuthProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGenericOAuthProvider(\Zitadel\Management\V1\AddGenericOAuthProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddGenericOAuthProvider',
        $argument,
        ['\Zitadel\Management\V1\AddGenericOAuthProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing OAuth2 identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateGenericOAuthProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGenericOAuthProvider(\Zitadel\Management\V1\UpdateGenericOAuthProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateGenericOAuthProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateGenericOAuthProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new OIDC identity provider in the organization
     * @param \Zitadel\Management\V1\AddGenericOIDCProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGenericOIDCProvider(\Zitadel\Management\V1\AddGenericOIDCProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddGenericOIDCProvider',
        $argument,
        ['\Zitadel\Management\V1\AddGenericOIDCProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing OIDC identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateGenericOIDCProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGenericOIDCProvider(\Zitadel\Management\V1\UpdateGenericOIDCProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateGenericOIDCProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateGenericOIDCProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Migrate an existing OIDC identity provider in the organization
     * @param \Zitadel\Management\V1\MigrateGenericOIDCProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MigrateGenericOIDCProvider(\Zitadel\Management\V1\MigrateGenericOIDCProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/MigrateGenericOIDCProvider',
        $argument,
        ['\Zitadel\Management\V1\MigrateGenericOIDCProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new JWT identity provider in the organization
     * @param \Zitadel\Management\V1\AddJWTProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddJWTProvider(\Zitadel\Management\V1\AddJWTProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddJWTProvider',
        $argument,
        ['\Zitadel\Management\V1\AddJWTProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing JWT identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateJWTProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateJWTProvider(\Zitadel\Management\V1\UpdateJWTProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateJWTProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateJWTProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new Azure AD identity provider in the organization
     * @param \Zitadel\Management\V1\AddAzureADProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAzureADProvider(\Zitadel\Management\V1\AddAzureADProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddAzureADProvider',
        $argument,
        ['\Zitadel\Management\V1\AddAzureADProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing Azure AD identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateAzureADProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAzureADProvider(\Zitadel\Management\V1\UpdateAzureADProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateAzureADProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateAzureADProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new GitHub identity provider in the organization
     * @param \Zitadel\Management\V1\AddGitHubProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitHubProvider(\Zitadel\Management\V1\AddGitHubProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddGitHubProvider',
        $argument,
        ['\Zitadel\Management\V1\AddGitHubProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing GitHub identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateGitHubProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitHubProvider(\Zitadel\Management\V1\UpdateGitHubProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateGitHubProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateGitHubProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new GitHub Enterprise Server identity provider in the organization
     * @param \Zitadel\Management\V1\AddGitHubEnterpriseServerProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitHubEnterpriseServerProvider(\Zitadel\Management\V1\AddGitHubEnterpriseServerProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddGitHubEnterpriseServerProvider',
        $argument,
        ['\Zitadel\Management\V1\AddGitHubEnterpriseServerProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing GitHub Enterprise Server identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateGitHubEnterpriseServerProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitHubEnterpriseServerProvider(\Zitadel\Management\V1\UpdateGitHubEnterpriseServerProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateGitHubEnterpriseServerProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateGitHubEnterpriseServerProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new GitLab identity provider in the organization
     * @param \Zitadel\Management\V1\AddGitLabProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitLabProvider(\Zitadel\Management\V1\AddGitLabProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddGitLabProvider',
        $argument,
        ['\Zitadel\Management\V1\AddGitLabProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing GitLab identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateGitLabProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitLabProvider(\Zitadel\Management\V1\UpdateGitLabProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateGitLabProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateGitLabProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new self hosted GitLab identity provider in the organization
     * @param \Zitadel\Management\V1\AddGitLabSelfHostedProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitLabSelfHostedProvider(\Zitadel\Management\V1\AddGitLabSelfHostedProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddGitLabSelfHostedProvider',
        $argument,
        ['\Zitadel\Management\V1\AddGitLabSelfHostedProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing self hosted GitLab identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateGitLabSelfHostedProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitLabSelfHostedProvider(\Zitadel\Management\V1\UpdateGitLabSelfHostedProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateGitLabSelfHostedProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateGitLabSelfHostedProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new Google identity provider in the organization
     * @param \Zitadel\Management\V1\AddGoogleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGoogleProvider(\Zitadel\Management\V1\AddGoogleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddGoogleProvider',
        $argument,
        ['\Zitadel\Management\V1\AddGoogleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing Google identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateGoogleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGoogleProvider(\Zitadel\Management\V1\UpdateGoogleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateGoogleProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateGoogleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new LDAP identity provider in the organization
     * @param \Zitadel\Management\V1\AddLDAPProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddLDAPProvider(\Zitadel\Management\V1\AddLDAPProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddLDAPProvider',
        $argument,
        ['\Zitadel\Management\V1\AddLDAPProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing LDAP identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateLDAPProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateLDAPProvider(\Zitadel\Management\V1\UpdateLDAPProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateLDAPProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateLDAPProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new Apple identity provider in the organization
     * @param \Zitadel\Management\V1\AddAppleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAppleProvider(\Zitadel\Management\V1\AddAppleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddAppleProvider',
        $argument,
        ['\Zitadel\Management\V1\AddAppleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing Apple identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateAppleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAppleProvider(\Zitadel\Management\V1\UpdateAppleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateAppleProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateAppleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new SAML identity provider in the organization
     * @param \Zitadel\Management\V1\AddSAMLProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSAMLProvider(\Zitadel\Management\V1\AddSAMLProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/AddSAMLProvider',
        $argument,
        ['\Zitadel\Management\V1\AddSAMLProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing SAML identity provider in the organization
     * @param \Zitadel\Management\V1\UpdateSAMLProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSAMLProvider(\Zitadel\Management\V1\UpdateSAMLProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateSAMLProvider',
        $argument,
        ['\Zitadel\Management\V1\UpdateSAMLProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Regenerate certificate for an existing SAML identity provider in the organization
     * @param \Zitadel\Management\V1\RegenerateSAMLProviderCertificateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegenerateSAMLProviderCertificate(\Zitadel\Management\V1\RegenerateSAMLProviderCertificateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/RegenerateSAMLProviderCertificate',
        $argument,
        ['\Zitadel\Management\V1\RegenerateSAMLProviderCertificateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove an identity provider
     * Will remove all linked providers of this configuration on the users
     * @param \Zitadel\Management\V1\DeleteProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProvider(\Zitadel\Management\V1\DeleteProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeleteProvider',
        $argument,
        ['\Zitadel\Management\V1\DeleteProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListActionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListActions(\Zitadel\Management\V1\ListActionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListActions',
        $argument,
        ['\Zitadel\Management\V1\ListActionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAction(\Zitadel\Management\V1\GetActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetAction',
        $argument,
        ['\Zitadel\Management\V1\GetActionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\CreateActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAction(\Zitadel\Management\V1\CreateActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/CreateAction',
        $argument,
        ['\Zitadel\Management\V1\CreateActionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\UpdateActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAction(\Zitadel\Management\V1\UpdateActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/UpdateAction',
        $argument,
        ['\Zitadel\Management\V1\UpdateActionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeactivateActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateAction(\Zitadel\Management\V1\DeactivateActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeactivateAction',
        $argument,
        ['\Zitadel\Management\V1\DeactivateActionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ReactivateActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateAction(\Zitadel\Management\V1\ReactivateActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ReactivateAction',
        $argument,
        ['\Zitadel\Management\V1\ReactivateActionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\DeleteActionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAction(\Zitadel\Management\V1\DeleteActionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/DeleteAction',
        $argument,
        ['\Zitadel\Management\V1\DeleteActionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListFlowTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListFlowTypes(\Zitadel\Management\V1\ListFlowTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListFlowTypes',
        $argument,
        ['\Zitadel\Management\V1\ListFlowTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ListFlowTriggerTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListFlowTriggerTypes(\Zitadel\Management\V1\ListFlowTriggerTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ListFlowTriggerTypes',
        $argument,
        ['\Zitadel\Management\V1\ListFlowTriggerTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\GetFlowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFlow(\Zitadel\Management\V1\GetFlowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/GetFlow',
        $argument,
        ['\Zitadel\Management\V1\GetFlowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\ClearFlowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClearFlow(\Zitadel\Management\V1\ClearFlowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/ClearFlow',
        $argument,
        ['\Zitadel\Management\V1\ClearFlowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Management\V1\SetTriggerActionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetTriggerActions(\Zitadel\Management\V1\SetTriggerActionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.management.v1.ManagementService/SetTriggerActions',
        $argument,
        ['\Zitadel\Management\V1\SetTriggerActionsResponse', 'decode'],
        $metadata, $options);
    }

}
