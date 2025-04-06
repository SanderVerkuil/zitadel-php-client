<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\User\V2;

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
     * @param \Zitadel\User\V2\AddHumanUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddHumanUser(\Zitadel\User\V2\AddHumanUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/AddHumanUser',
        $argument,
        ['\Zitadel\User\V2\AddHumanUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * User by ID
     *
     * Returns the full user object (human or machine) including the profile, email, etc..
     * @param \Zitadel\User\V2\GetUserByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserByID(\Zitadel\User\V2\GetUserByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/GetUserByID',
        $argument,
        ['\Zitadel\User\V2\GetUserByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search Users
     *
     * Search for users. By default, we will return all users of your instance that you have permission to read. Make sure to include a limit and sorting for pagination.
     * @param \Zitadel\User\V2\ListUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsers(\Zitadel\User\V2\ListUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ListUsers',
        $argument,
        ['\Zitadel\User\V2\ListUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change the user email
     *
     * Change the email address of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by email..
     * @param \Zitadel\User\V2\SetEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetEmail(\Zitadel\User\V2\SetEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/SetEmail',
        $argument,
        ['\Zitadel\User\V2\SetEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resend code to verify user email
     *
     * Resend code to verify user email.
     * @param \Zitadel\User\V2\ResendEmailCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendEmailCode(\Zitadel\User\V2\ResendEmailCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ResendEmailCode',
        $argument,
        ['\Zitadel\User\V2\ResendEmailCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Send code to verify user email
     *
     * Send code to verify user email.
     * @param \Zitadel\User\V2\SendEmailCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendEmailCode(\Zitadel\User\V2\SendEmailCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/SendEmailCode',
        $argument,
        ['\Zitadel\User\V2\SendEmailCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify the email
     *
     * Verify the email with the generated code.
     * @param \Zitadel\User\V2\VerifyEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyEmail(\Zitadel\User\V2\VerifyEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/VerifyEmail',
        $argument,
        ['\Zitadel\User\V2\VerifyEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set the user phone
     *
     * Set the phone number of a user. If the state is set to not verified, a verification code will be generated, which can be either returned or sent to the user by sms..
     * @param \Zitadel\User\V2\SetPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPhone(\Zitadel\User\V2\SetPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/SetPhone',
        $argument,
        ['\Zitadel\User\V2\SetPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove the user phone
     *
     * Remove the user phone
     * @param \Zitadel\User\V2\RemovePhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemovePhone(\Zitadel\User\V2\RemovePhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RemovePhone',
        $argument,
        ['\Zitadel\User\V2\RemovePhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resend code to verify user phone
     *
     * Resend code to verify user phone.
     * @param \Zitadel\User\V2\ResendPhoneCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendPhoneCode(\Zitadel\User\V2\ResendPhoneCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ResendPhoneCode',
        $argument,
        ['\Zitadel\User\V2\ResendPhoneCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify the phone
     *
     * Verify the phone with the generated code..
     * @param \Zitadel\User\V2\VerifyPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyPhone(\Zitadel\User\V2\VerifyPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/VerifyPhone',
        $argument,
        ['\Zitadel\User\V2\VerifyPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update User
     *
     * Update all information from a user..
     * @param \Zitadel\User\V2\UpdateHumanUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateHumanUser(\Zitadel\User\V2\UpdateHumanUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/UpdateHumanUser',
        $argument,
        ['\Zitadel\User\V2\UpdateHumanUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deactivate user
     *
     * The state of the user will be changed to 'deactivated'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'deactivated'. Use deactivate user when the user should not be able to use the account anymore, but you still need access to the user data..
     * @param \Zitadel\User\V2\DeactivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateUser(\Zitadel\User\V2\DeactivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/DeactivateUser',
        $argument,
        ['\Zitadel\User\V2\DeactivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Reactivate user
     *
     * Reactivate a user with the state 'deactivated'. The user will be able to log in again afterward. The endpoint returns an error if the user is not in the state 'deactivated'..
     * @param \Zitadel\User\V2\ReactivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateUser(\Zitadel\User\V2\ReactivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ReactivateUser',
        $argument,
        ['\Zitadel\User\V2\ReactivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lock user
     *
     * The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.)..
     * @param \Zitadel\User\V2\LockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LockUser(\Zitadel\User\V2\LockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/LockUser',
        $argument,
        ['\Zitadel\User\V2\LockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unlock user
     *
     * The state of the user will be changed to 'locked'. The user will not be able to log in anymore. The endpoint returns an error if the user is already in the state 'locked'. Use this endpoint if the user should not be able to log in temporarily because of an event that happened (wrong password, etc.)..
     * @param \Zitadel\User\V2\UnlockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnlockUser(\Zitadel\User\V2\UnlockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/UnlockUser',
        $argument,
        ['\Zitadel\User\V2\UnlockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete user
     *
     * The state of the user will be changed to 'deleted'. The user will not be able to log in anymore. Endpoints requesting this user will return an error 'User not found..
     * @param \Zitadel\User\V2\DeleteUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUser(\Zitadel\User\V2\DeleteUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/DeleteUser',
        $argument,
        ['\Zitadel\User\V2\DeleteUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start the registration of passkey for a user
     *
     * Start the registration of a passkey for a user, as a response the public key credential creation options are returned, which are used to verify the passkey..
     * @param \Zitadel\User\V2\RegisterPasskeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterPasskey(\Zitadel\User\V2\RegisterPasskeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RegisterPasskey',
        $argument,
        ['\Zitadel\User\V2\RegisterPasskeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a passkey for a user
     *
     * Verify the passkey registration with the public key credential..
     * @param \Zitadel\User\V2\VerifyPasskeyRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyPasskeyRegistration(\Zitadel\User\V2\VerifyPasskeyRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/VerifyPasskeyRegistration',
        $argument,
        ['\Zitadel\User\V2\VerifyPasskeyRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a passkey registration link for a user
     *
     * Create a passkey registration link which includes a code and either return it or send it to the user..
     * @param \Zitadel\User\V2\CreatePasskeyRegistrationLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePasskeyRegistrationLink(\Zitadel\User\V2\CreatePasskeyRegistrationLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/CreatePasskeyRegistrationLink',
        $argument,
        ['\Zitadel\User\V2\CreatePasskeyRegistrationLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List passkeys of an user
     *
     * List passkeys of an user
     * @param \Zitadel\User\V2\ListPasskeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPasskeys(\Zitadel\User\V2\ListPasskeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ListPasskeys',
        $argument,
        ['\Zitadel\User\V2\ListPasskeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove passkey from a user
     *
     * Remove passkey from a user.
     * @param \Zitadel\User\V2\RemovePasskeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemovePasskey(\Zitadel\User\V2\RemovePasskeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RemovePasskey',
        $argument,
        ['\Zitadel\User\V2\RemovePasskeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start the registration of a u2f token for a user
     *
     * Start the registration of a u2f token for a user, as a response the public key credential creation options are returned, which are used to verify the u2f token..
     * @param \Zitadel\User\V2\RegisterU2FRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterU2F(\Zitadel\User\V2\RegisterU2FRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RegisterU2F',
        $argument,
        ['\Zitadel\User\V2\RegisterU2FResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a u2f token for a user
     *
     * Verify the u2f token registration with the public key credential..
     * @param \Zitadel\User\V2\VerifyU2FRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyU2FRegistration(\Zitadel\User\V2\VerifyU2FRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/VerifyU2FRegistration',
        $argument,
        ['\Zitadel\User\V2\VerifyU2FRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove u2f token from a user
     *
     * Remove u2f token from a user.
     * @param \Zitadel\User\V2\RemoveU2FRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveU2F(\Zitadel\User\V2\RemoveU2FRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RemoveU2F',
        $argument,
        ['\Zitadel\User\V2\RemoveU2FResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start the registration of a TOTP generator for a user
     *
     * Start the registration of a TOTP generator for a user, as a response a secret returned, which is used to initialize a TOTP app or device..
     * @param \Zitadel\User\V2\RegisterTOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterTOTP(\Zitadel\User\V2\RegisterTOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RegisterTOTP',
        $argument,
        ['\Zitadel\User\V2\RegisterTOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a TOTP generator for a user
     *
     * Verify the TOTP registration with a generated code..
     * @param \Zitadel\User\V2\VerifyTOTPRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyTOTPRegistration(\Zitadel\User\V2\VerifyTOTPRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/VerifyTOTPRegistration',
        $argument,
        ['\Zitadel\User\V2\VerifyTOTPRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove TOTP generator from a user
     *
     * Remove the configured TOTP generator of a user. As only one TOTP generator per user is allowed, the user will not have TOTP as a second factor afterward.
     * @param \Zitadel\User\V2\RemoveTOTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveTOTP(\Zitadel\User\V2\RemoveTOTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RemoveTOTP',
        $argument,
        ['\Zitadel\User\V2\RemoveTOTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add OTP SMS for a user
     *
     * Add a new One-Time Password (OTP) SMS factor to the authenticated user. OTP SMS will enable the user to verify a OTP with the latest verified phone number. The phone number has to be verified to add the second factor..
     * @param \Zitadel\User\V2\AddOTPSMSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOTPSMS(\Zitadel\User\V2\AddOTPSMSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/AddOTPSMS',
        $argument,
        ['\Zitadel\User\V2\AddOTPSMSResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove One-Time Password (OTP) SMS from a user
     *
     * Remove the configured One-Time Password (OTP) SMS factor of a user. As only one OTP SMS per user is allowed, the user will not have OTP SMS as a second factor afterward.
     * @param \Zitadel\User\V2\RemoveOTPSMSRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOTPSMS(\Zitadel\User\V2\RemoveOTPSMSRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RemoveOTPSMS',
        $argument,
        ['\Zitadel\User\V2\RemoveOTPSMSResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add OTP Email for a user
     *
     * Add a new One-Time Password (OTP) Email factor to the authenticated user. OTP Email will enable the user to verify a OTP with the latest verified email. The email has to be verified to add the second factor..
     * @param \Zitadel\User\V2\AddOTPEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOTPEmail(\Zitadel\User\V2\AddOTPEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/AddOTPEmail',
        $argument,
        ['\Zitadel\User\V2\AddOTPEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove One-Time Password (OTP) Email from a user
     *
     * Remove the configured One-Time Password (OTP) Email factor of a user. As only one OTP Email per user is allowed, the user will not have OTP Email as a second factor afterward.
     * @param \Zitadel\User\V2\RemoveOTPEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOTPEmail(\Zitadel\User\V2\RemoveOTPEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RemoveOTPEmail',
        $argument,
        ['\Zitadel\User\V2\RemoveOTPEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start flow with an identity provider
     *
     * Start a flow with an identity provider, for external login, registration or linking..
     * @param \Zitadel\User\V2\StartIdentityProviderIntentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartIdentityProviderIntent(\Zitadel\User\V2\StartIdentityProviderIntentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/StartIdentityProviderIntent',
        $argument,
        ['\Zitadel\User\V2\StartIdentityProviderIntentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieve the information returned by the identity provider
     *
     * Retrieve the information returned by the identity provider for registration or updating an existing user with new information..
     * @param \Zitadel\User\V2\RetrieveIdentityProviderIntentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RetrieveIdentityProviderIntent(\Zitadel\User\V2\RetrieveIdentityProviderIntentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RetrieveIdentityProviderIntent',
        $argument,
        ['\Zitadel\User\V2\RetrieveIdentityProviderIntentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add link to an identity provider to an user
     *
     * Add link to an identity provider to an user..
     * @param \Zitadel\User\V2\AddIDPLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddIDPLink(\Zitadel\User\V2\AddIDPLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/AddIDPLink',
        $argument,
        ['\Zitadel\User\V2\AddIDPLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List links to an identity provider of an user
     *
     * List links to an identity provider of an user.
     * @param \Zitadel\User\V2\ListIDPLinksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIDPLinks(\Zitadel\User\V2\ListIDPLinksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ListIDPLinks',
        $argument,
        ['\Zitadel\User\V2\ListIDPLinksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove link of an identity provider to an user
     *
     * Remove link of an identity provider to an user.
     * @param \Zitadel\User\V2\RemoveIDPLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIDPLink(\Zitadel\User\V2\RemoveIDPLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/RemoveIDPLink',
        $argument,
        ['\Zitadel\User\V2\RemoveIDPLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Request a code to reset a password
     *
     * Request a code to reset a password..
     * @param \Zitadel\User\V2\PasswordResetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PasswordReset(\Zitadel\User\V2\PasswordResetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/PasswordReset',
        $argument,
        ['\Zitadel\User\V2\PasswordResetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change password
     *
     * Change the password of a user with either a verification code or the current password..
     * @param \Zitadel\User\V2\SetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPassword(\Zitadel\User\V2\SetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/SetPassword',
        $argument,
        ['\Zitadel\User\V2\SetPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all possible authentication methods of a user
     *
     * List all possible authentication methods of a user like password, passwordless, (T)OTP and more..
     * @param \Zitadel\User\V2\ListAuthenticationMethodTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAuthenticationMethodTypes(\Zitadel\User\V2\ListAuthenticationMethodTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ListAuthenticationMethodTypes',
        $argument,
        ['\Zitadel\User\V2\ListAuthenticationMethodTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\User\V2\ListAuthenticationFactorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAuthenticationFactors(\Zitadel\User\V2\ListAuthenticationFactorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ListAuthenticationFactors',
        $argument,
        ['\Zitadel\User\V2\ListAuthenticationFactorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create an invite code for a user
     *
     * Create an invite code for a user to initialize their first authentication method (password, passkeys, IdP) depending on the organization's available methods.
     * @param \Zitadel\User\V2\CreateInviteCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateInviteCode(\Zitadel\User\V2\CreateInviteCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/CreateInviteCode',
        $argument,
        ['\Zitadel\User\V2\CreateInviteCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resend an invite code for a user
     *
     * Resend an invite code for a user to initialize their first authentication method (password, passkeys, IdP) depending on the organization's available methods.
     * A resend is only possible if a code has been created previously and sent to the user. If there is no code or it was directly returned, an error will be returned.
     * @param \Zitadel\User\V2\ResendInviteCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendInviteCode(\Zitadel\User\V2\ResendInviteCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/ResendInviteCode',
        $argument,
        ['\Zitadel\User\V2\ResendInviteCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify an invite code for a user
     *
     * Verify the invite code of a user previously issued. This will set their email to a verified state and
     * allow the user to set up their first authentication method (password, passkeys, IdP) depending on the organization's available methods.
     * @param \Zitadel\User\V2\VerifyInviteCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyInviteCode(\Zitadel\User\V2\VerifyInviteCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/VerifyInviteCode',
        $argument,
        ['\Zitadel\User\V2\VerifyInviteCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * MFA Init Skipped
     *
     * Update the last time the user has skipped MFA initialization. The server timestamp is used.
     * @param \Zitadel\User\V2\HumanMFAInitSkippedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function HumanMFAInitSkipped(\Zitadel\User\V2\HumanMFAInitSkippedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.user.v2.UserService/HumanMFAInitSkipped',
        $argument,
        ['\Zitadel\User\V2\HumanMFAInitSkippedResponse', 'decode'],
        $metadata, $options);
    }

}
