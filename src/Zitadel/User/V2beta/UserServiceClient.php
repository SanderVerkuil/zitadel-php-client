<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\User\V2beta;

/**
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a new human user
     *
     * Create/import a new user with the type human. The newly created user will get a verification email if either the email address is not marked as verified and you did not request the verification to be returned.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA)
     * @param \Zitadel\User\V2beta\AddHumanUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddHumanUser(\Zitadel\User\V2beta\AddHumanUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/AddHumanUser',
        $argument,
        ['\Zitadel\User\V2beta\AddHumanUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * User by ID
     *
     * Returns the full user object (human or machine) including the profile, email, etc.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\GetUserByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserByID(\Zitadel\User\V2beta\GetUserByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/GetUserByID',
        $argument,
        ['\Zitadel\User\V2beta\GetUserByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search Users
     *
     * Search for users. By default, we will return all users of your instance that you have permission to read. Make sure to include a limit and sorting for pagination.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\ListUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsers(\Zitadel\User\V2beta\ListUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/ListUsers',
        $argument,
        ['\Zitadel\User\V2beta\ListUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change the user email
     *
     * Change the email address of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by email.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\SetEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetEmail(\Zitadel\User\V2beta\SetEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/SetEmail',
        $argument,
        ['\Zitadel\User\V2beta\SetEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resend code to verify user email
     *
     * Resend code to verify user email
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\ResendEmailCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendEmailCode(\Zitadel\User\V2beta\ResendEmailCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/ResendEmailCode',
        $argument,
        ['\Zitadel\User\V2beta\ResendEmailCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify the email
     *
     * Verify the email with the generated code.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\VerifyEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyEmail(\Zitadel\User\V2beta\VerifyEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/VerifyEmail',
        $argument,
        ['\Zitadel\User\V2beta\VerifyEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set the user phone
     *
     * Set the phone number of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by sms.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\SetPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPhone(\Zitadel\User\V2beta\SetPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/SetPhone',
        $argument,
        ['\Zitadel\User\V2beta\SetPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove the user phone
     *
     * Remove the user phone
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RemovePhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemovePhone(\Zitadel\User\V2beta\RemovePhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RemovePhone',
        $argument,
        ['\Zitadel\User\V2beta\RemovePhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resend code to verify user phone
     *
     * Resend code to verify user phone
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\ResendPhoneCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendPhoneCode(\Zitadel\User\V2beta\ResendPhoneCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/ResendPhoneCode',
        $argument,
        ['\Zitadel\User\V2beta\ResendPhoneCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify the phone
     *
     * Verify the phone with the generated code.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\VerifyPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyPhone(\Zitadel\User\V2beta\VerifyPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/VerifyPhone',
        $argument,
        ['\Zitadel\User\V2beta\VerifyPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update User
     *
     * Update all information from a user.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\UpdateHumanUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateHumanUser(\Zitadel\User\V2beta\UpdateHumanUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/UpdateHumanUser',
        $argument,
        ['\Zitadel\User\V2beta\UpdateHumanUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deactivate user
     *
     * The state of the user will be changed to 'deactivated'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'deactivated'. Use deactivate user when the user should not be able to use the account anymore, but you still need access to the user data.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\DeactivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateUser(\Zitadel\User\V2beta\DeactivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/DeactivateUser',
        $argument,
        ['\Zitadel\User\V2beta\DeactivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Reactivate user
     *
     * Reactivate a user with the state 'deactivated'. The user will be able to log in again afterward. The endpoint returns an error if the user is not in the state 'deactivated'.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\ReactivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateUser(\Zitadel\User\V2beta\ReactivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/ReactivateUser',
        $argument,
        ['\Zitadel\User\V2beta\ReactivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lock user
     *
     * The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.).
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\LockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LockUser(\Zitadel\User\V2beta\LockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/LockUser',
        $argument,
        ['\Zitadel\User\V2beta\LockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unlock user
     *
     * The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.).
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\UnlockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnlockUser(\Zitadel\User\V2beta\UnlockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/UnlockUser',
        $argument,
        ['\Zitadel\User\V2beta\UnlockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete user
     *
     * The state of the user will be changed to 'deleted'. The user will not be able to log in anymore. Endpoints requesting this user will return an error 'User not found.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\DeleteUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUser(\Zitadel\User\V2beta\DeleteUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/DeleteUser',
        $argument,
        ['\Zitadel\User\V2beta\DeleteUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start the registration of passkey for a user
     *
     * Start the registration of a passkey for a user, as a response the public key credential creation options are returned, which are used to verify the passkey.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RegisterPasskeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterPasskey(\Zitadel\User\V2beta\RegisterPasskeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RegisterPasskey',
        $argument,
        ['\Zitadel\User\V2beta\RegisterPasskeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a passkey for a user
     *
     * Verify the passkey registration with the public key credential.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\VerifyPasskeyRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyPasskeyRegistration(\Zitadel\User\V2beta\VerifyPasskeyRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/VerifyPasskeyRegistration',
        $argument,
        ['\Zitadel\User\V2beta\VerifyPasskeyRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a passkey registration link for a user
     *
     * Create a passkey registration link which includes a code and either return it or send it to the user.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\CreatePasskeyRegistrationLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePasskeyRegistrationLink(\Zitadel\User\V2beta\CreatePasskeyRegistrationLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/CreatePasskeyRegistrationLink',
        $argument,
        ['\Zitadel\User\V2beta\CreatePasskeyRegistrationLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start the registration of a u2f token for a user
     *
     * Start the registration of a u2f token for a user, as a response the public key credential creation options are returned, which are used to verify the u2f token.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RegisterU2FRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterU2F(\Zitadel\User\V2beta\RegisterU2FRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RegisterU2F',
        $argument,
        ['\Zitadel\User\V2beta\RegisterU2FResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a u2f token for a user
     *
     * Verify the u2f token registration with the public key credential.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\VerifyU2FRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyU2FRegistration(\Zitadel\User\V2beta\VerifyU2FRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/VerifyU2FRegistration',
        $argument,
        ['\Zitadel\User\V2beta\VerifyU2FRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start the registration of a TOTP generator for a user
     *
     * Start the registration of a TOTP generator for a user, as a response a secret returned, which is used to initialize a TOTP app or device.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RegisterTOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterTOTP(\Zitadel\User\V2beta\RegisterTOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RegisterTOTP',
        $argument,
        ['\Zitadel\User\V2beta\RegisterTOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a TOTP generator for a user
     *
     * Verify the TOTP registration with a generated code.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\VerifyTOTPRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyTOTPRegistration(\Zitadel\User\V2beta\VerifyTOTPRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/VerifyTOTPRegistration',
        $argument,
        ['\Zitadel\User\V2beta\VerifyTOTPRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove TOTP generator from a user
     *
     * Remove the configured TOTP generator of a user. As only one TOTP generator per user is allowed, the user will not have TOTP as a second factor afterward.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RemoveTOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveTOTP(\Zitadel\User\V2beta\RemoveTOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RemoveTOTP',
        $argument,
        ['\Zitadel\User\V2beta\RemoveTOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add OTP SMS for a user
     *
     * Add a new One-Time Password (OTP) SMS factor to the authenticated user. OTP SMS will enable the user to verify a OTP with the latest verified phone number. The phone number has to be verified to add the second factor.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\AddOTPSMSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOTPSMS(\Zitadel\User\V2beta\AddOTPSMSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/AddOTPSMS',
        $argument,
        ['\Zitadel\User\V2beta\AddOTPSMSResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove One-Time Password (OTP) SMS from a user
     *
     * Remove the configured One-Time Password (OTP) SMS factor of a user. As only one OTP SMS per user is allowed, the user will not have OTP SMS as a second factor afterward.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RemoveOTPSMSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOTPSMS(\Zitadel\User\V2beta\RemoveOTPSMSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RemoveOTPSMS',
        $argument,
        ['\Zitadel\User\V2beta\RemoveOTPSMSResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add OTP Email for a user
     *
     * Add a new One-Time Password (OTP) Email factor to the authenticated user. OTP Email will enable the user to verify a OTP with the latest verified email. The email has to be verified to add the second factor.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\AddOTPEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOTPEmail(\Zitadel\User\V2beta\AddOTPEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/AddOTPEmail',
        $argument,
        ['\Zitadel\User\V2beta\AddOTPEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove One-Time Password (OTP) Email from a user
     *
     * Remove the configured One-Time Password (OTP) Email factor of a user. As only one OTP Email per user is allowed, the user will not have OTP Email as a second factor afterward.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RemoveOTPEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOTPEmail(\Zitadel\User\V2beta\RemoveOTPEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RemoveOTPEmail',
        $argument,
        ['\Zitadel\User\V2beta\RemoveOTPEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start flow with an identity provider
     *
     * Start a flow with an identity provider, for external login, registration or linking.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\StartIdentityProviderIntentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartIdentityProviderIntent(\Zitadel\User\V2beta\StartIdentityProviderIntentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/StartIdentityProviderIntent',
        $argument,
        ['\Zitadel\User\V2beta\StartIdentityProviderIntentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve the information returned by the identity provider
     *
     * Retrieve the information returned by the identity provider for registration or updating an existing user with new information.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\RetrieveIdentityProviderIntentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RetrieveIdentityProviderIntent(\Zitadel\User\V2beta\RetrieveIdentityProviderIntentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/RetrieveIdentityProviderIntent',
        $argument,
        ['\Zitadel\User\V2beta\RetrieveIdentityProviderIntentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add link to an identity provider to an user
     *
     * Add link to an identity provider to an user.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\AddIDPLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddIDPLink(\Zitadel\User\V2beta\AddIDPLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/AddIDPLink',
        $argument,
        ['\Zitadel\User\V2beta\AddIDPLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Request a code to reset a password
     *
     * Request a code to reset a password.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\PasswordResetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PasswordReset(\Zitadel\User\V2beta\PasswordResetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/PasswordReset',
        $argument,
        ['\Zitadel\User\V2beta\PasswordResetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change password
     *
     * Change the password of a user with either a verification code or the current password.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\SetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPassword(\Zitadel\User\V2beta\SetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/SetPassword',
        $argument,
        ['\Zitadel\User\V2beta\SetPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all possible authentication methods of a user
     *
     * List all possible authentication methods of a user like password, passwordless, (T)OTP and more.
     *
     * Deprecated: please move to the corresponding endpoint under user service v2 (GA).
     * @param \Zitadel\User\V2beta\ListAuthenticationMethodTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAuthenticationMethodTypes(\Zitadel\User\V2beta\ListAuthenticationMethodTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2beta.UserService/ListAuthenticationMethodTypes',
        $argument,
        ['\Zitadel\User\V2beta\ListAuthenticationMethodTypesResponse', 'decode'],
        $metadata, $options);
    }

}
