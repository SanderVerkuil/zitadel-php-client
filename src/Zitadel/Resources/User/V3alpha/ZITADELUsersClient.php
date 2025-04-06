<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Resources\User\V3alpha;

/**
 */
class ZITADELUsersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Search users
     *
     * Search all matching users. By default, we will return all users of your instance.
     * Make sure to include a limit and sorting for pagination.
     * @param \Zitadel\Resources\User\V3alpha\SearchUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SearchUsers(\Zitadel\Resources\User\V3alpha\SearchUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/SearchUsers',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\SearchUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * User by ID
     *
     * Returns the user identified by the requested ID.
     * @param \Zitadel\Resources\User\V3alpha\GetUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUser(\Zitadel\Resources\User\V3alpha\GetUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/GetUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\GetUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a user
     *
     * Create a new user with an optional data schema.
     * @param \Zitadel\Resources\User\V3alpha\CreateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUser(\Zitadel\Resources\User\V3alpha\CreateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/CreateUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\CreateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch a user
     *
     * Patch an existing user with data based on a user schema.
     * @param \Zitadel\Resources\User\V3alpha\PatchUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchUser(\Zitadel\Resources\User\V3alpha\PatchUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/PatchUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\PatchUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deactivate a user
     *
     * Deactivate an existing user and change the state 'deactivated'.
     * The user will not be able to log in anymore.
     * Use deactivate user when the user should not be able to use the account anymore,
     * but you still need access to the user data.
     *
     * The endpoint returns an error if the user is already in the state 'deactivated'.
     * @param \Zitadel\Resources\User\V3alpha\DeactivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateUser(\Zitadel\Resources\User\V3alpha\DeactivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/DeactivateUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\DeactivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Activate a user
     *
     * Activate a previously deactivated user and change the state to 'active'.
     * The user will be able to log in again.
     *
     * The endpoint returns an error if the user is not in the state 'deactivated'.
     * @param \Zitadel\Resources\User\V3alpha\ActivateUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateUser(\Zitadel\Resources\User\V3alpha\ActivateUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/ActivateUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\ActivateUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lock a user
     *
     * Lock an existing user and change the state 'locked'.
     * The user will not be able to log in anymore.
     * Use lock user when the user should temporarily not be able to log in
     * because of an event that happened (wrong password, etc.)
     *
     * The endpoint returns an error if the user is already in the state 'locked'.
     * @param \Zitadel\Resources\User\V3alpha\LockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LockUser(\Zitadel\Resources\User\V3alpha\LockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/LockUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\LockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Unlock a user
     *
     * Unlock a previously locked user and change the state to 'active'.
     * The user will be able to log in again.
     *
     * The endpoint returns an error if the user is not in the state 'locked'.
     * @param \Zitadel\Resources\User\V3alpha\UnlockUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnlockUser(\Zitadel\Resources\User\V3alpha\UnlockUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/UnlockUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\UnlockUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a user
     *
     * Delete an existing user and change the state to 'deleted'.
     * The user will be able to log in anymore.
     * @param \Zitadel\Resources\User\V3alpha\DeleteUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUser(\Zitadel\Resources\User\V3alpha\DeleteUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/DeleteUser',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\DeleteUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set contact email
     *
     * Add or update the contact email address of a user.
     * If the email is not passed as verified, a verification code will be generated,
     * which can be either returned or will be sent to the user by email.
     * @param \Zitadel\Resources\User\V3alpha\SetContactEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetContactEmail(\Zitadel\Resources\User\V3alpha\SetContactEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/SetContactEmail',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\SetContactEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify the contact email
     *
     * Verify the contact email with the provided code.
     * @param \Zitadel\Resources\User\V3alpha\VerifyContactEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyContactEmail(\Zitadel\Resources\User\V3alpha\VerifyContactEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/VerifyContactEmail',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\VerifyContactEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resend the contact email code
     *
     * Resend the email with the verification code for the contact email address.
     * @param \Zitadel\Resources\User\V3alpha\ResendContactEmailCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendContactEmailCode(\Zitadel\Resources\User\V3alpha\ResendContactEmailCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/ResendContactEmailCode',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\ResendContactEmailCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set contact phone
     *
     * Add or update the contact phone number of a user.
     * If the phone is not passed as verified, a verification code will be generated,
     * which can be either returned or will be sent to the user by SMS.
     * @param \Zitadel\Resources\User\V3alpha\SetContactPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetContactPhone(\Zitadel\Resources\User\V3alpha\SetContactPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/SetContactPhone',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\SetContactPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify the contact phone
     *
     * Verify the contact phone with the provided code.
     * @param \Zitadel\Resources\User\V3alpha\VerifyContactPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyContactPhone(\Zitadel\Resources\User\V3alpha\VerifyContactPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/VerifyContactPhone',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\VerifyContactPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resend the contact phone code
     *
     * Resend the phone with the verification code for the contact phone number.
     * @param \Zitadel\Resources\User\V3alpha\ResendContactPhoneCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendContactPhoneCode(\Zitadel\Resources\User\V3alpha\ResendContactPhoneCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/ResendContactPhoneCode',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\ResendContactPhoneCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a username
     *
     * Add a new unique username to a user. The username will be used to identify the user on authentication.
     * @param \Zitadel\Resources\User\V3alpha\AddUsernameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddUsername(\Zitadel\Resources\User\V3alpha\AddUsernameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/AddUsername',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\AddUsernameResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove a username
     *
     * Remove an existing username of a user, so it cannot be used for authentication anymore.
     * @param \Zitadel\Resources\User\V3alpha\RemoveUsernameRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveUsername(\Zitadel\Resources\User\V3alpha\RemoveUsernameRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/RemoveUsername',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\RemoveUsernameResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a password
     *
     * Add, update or reset a user's password with either a verification code or the current password.
     * @param \Zitadel\Resources\User\V3alpha\SetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPassword(\Zitadel\Resources\User\V3alpha\SetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/SetPassword',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\SetPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Request password reset
     *
     * Request a code to be able to set a new password.
     * @param \Zitadel\Resources\User\V3alpha\RequestPasswordResetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestPasswordReset(\Zitadel\Resources\User\V3alpha\RequestPasswordResetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/RequestPasswordReset',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\RequestPasswordResetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start a WebAuthN registration
     *
     * Start the registration of a new WebAuthN device (e.g. Passkeys) for a user.
     * As a response the public key credential creation options are returned,
     * which are used to verify the device.
     * @param \Zitadel\Resources\User\V3alpha\StartWebAuthNRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartWebAuthNRegistration(\Zitadel\Resources\User\V3alpha\StartWebAuthNRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/StartWebAuthNRegistration',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\StartWebAuthNRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a WebAuthN registration
     *
     * Verify the WebAuthN registration started by StartWebAuthNRegistration with the public key credential.
     * @param \Zitadel\Resources\User\V3alpha\VerifyWebAuthNRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyWebAuthNRegistration(\Zitadel\Resources\User\V3alpha\VerifyWebAuthNRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/VerifyWebAuthNRegistration',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\VerifyWebAuthNRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a WebAuthN registration link
     *
     * Create a link, which includes a code, that can either be returned or directly sent to the user.
     * The code will allow the user to start a new WebAuthN registration.
     * @param \Zitadel\Resources\User\V3alpha\CreateWebAuthNRegistrationLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateWebAuthNRegistrationLink(\Zitadel\Resources\User\V3alpha\CreateWebAuthNRegistrationLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/CreateWebAuthNRegistrationLink',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\CreateWebAuthNRegistrationLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove a WebAuthN authenticator
     *
     * Remove an existing WebAuthN authenticator from a user, so it cannot be used for authentication anymore.
     * @param \Zitadel\Resources\User\V3alpha\RemoveWebAuthNAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveWebAuthNAuthenticator(\Zitadel\Resources\User\V3alpha\RemoveWebAuthNAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/RemoveWebAuthNAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\RemoveWebAuthNAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start a TOTP registration
     *
     * Start the registration of a new time-based one-time password (TOTP) generator for a user.
     * As a response a secret is returned, which is used to initialize a TOTP app or device.
     * @param \Zitadel\Resources\User\V3alpha\StartTOTPRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartTOTPRegistration(\Zitadel\Resources\User\V3alpha\StartTOTPRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/StartTOTPRegistration',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\StartTOTPRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify a TOTP registration
     *
     * Verify the time-based one-time password (TOTP) registration with the generated code.
     * @param \Zitadel\Resources\User\V3alpha\VerifyTOTPRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyTOTPRegistration(\Zitadel\Resources\User\V3alpha\VerifyTOTPRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/VerifyTOTPRegistration',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\VerifyTOTPRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove a TOTP authenticator
     *
     * Remove an existing time-based one-time password (TOTP) authenticator from a user, so it cannot be used for authentication anymore.
     * @param \Zitadel\Resources\User\V3alpha\RemoveTOTPAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveTOTPAuthenticator(\Zitadel\Resources\User\V3alpha\RemoveTOTPAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/RemoveTOTPAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\RemoveTOTPAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a OTP SMS authenticator
     *
     * Add a new one-time password (OTP) SMS authenticator to a user.
     * If the phone is not passed as verified, a verification code will be generated,
     * which can be either returned or will be sent to the user by SMS.
     * @param \Zitadel\Resources\User\V3alpha\AddOTPSMSAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOTPSMSAuthenticator(\Zitadel\Resources\User\V3alpha\AddOTPSMSAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/AddOTPSMSAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\AddOTPSMSAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify OTP SMS registration
     *
     * Verify the OTP SMS registration with the provided code.
     * @param \Zitadel\Resources\User\V3alpha\VerifyOTPSMSRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyOTPSMSRegistration(\Zitadel\Resources\User\V3alpha\VerifyOTPSMSRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/VerifyOTPSMSRegistration',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\VerifyOTPSMSRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove a OTP SMS authenticator
     *
     * Remove an existing one-time password (OTP) SMS authenticator from a user, so it cannot be used for authentication anymore.
     * @param \Zitadel\Resources\User\V3alpha\RemoveOTPSMSAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOTPSMSAuthenticator(\Zitadel\Resources\User\V3alpha\RemoveOTPSMSAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/RemoveOTPSMSAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\RemoveOTPSMSAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a OTP Email authenticator
     *
     * Add a new one-time password (OTP) Email authenticator to a user.
     * If the email is not passed as verified, a verification code will be generated,
     * which can be either returned or will be sent to the user by email.
     * @param \Zitadel\Resources\User\V3alpha\AddOTPEmailAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOTPEmailAuthenticator(\Zitadel\Resources\User\V3alpha\AddOTPEmailAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/AddOTPEmailAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\AddOTPEmailAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify OTP Email registration
     *
     * Verify the OTP Email registration with the provided code.
     * @param \Zitadel\Resources\User\V3alpha\VerifyOTPEmailRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyOTPEmailRegistration(\Zitadel\Resources\User\V3alpha\VerifyOTPEmailRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/VerifyOTPEmailRegistration',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\VerifyOTPEmailRegistrationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove a OTP Email authenticator
     *
     * Remove an existing one-time password (OTP) Email authenticator from a user, so it cannot be used for authentication anymore.
     * @param \Zitadel\Resources\User\V3alpha\RemoveOTPEmailAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOTPEmailAuthenticator(\Zitadel\Resources\User\V3alpha\RemoveOTPEmailAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/RemoveOTPEmailAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\RemoveOTPEmailAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start an IDP authentication intent
     *
     * Start a new authentication intent on configured identity provider (IDP) for external login, registration or linking.
     * @param \Zitadel\Resources\User\V3alpha\StartIdentityProviderIntentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartIdentityProviderIntent(\Zitadel\Resources\User\V3alpha\StartIdentityProviderIntentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/StartIdentityProviderIntent',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\StartIdentityProviderIntentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the information of the IDP authentication intent
     *
     * Get the information returned by the identity provider (IDP) for registration or updating an existing user with new information.
     * @param \Zitadel\Resources\User\V3alpha\GetIdentityProviderIntentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdentityProviderIntent(\Zitadel\Resources\User\V3alpha\GetIdentityProviderIntentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/GetIdentityProviderIntent',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\GetIdentityProviderIntentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add an IDP authenticator to a user
     *
     * Add a new identity provider (IDP) authenticator to an existing user.
     * This will allow the user to authenticate with the provided IDP.
     * @param \Zitadel\Resources\User\V3alpha\AddIDPAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddIDPAuthenticator(\Zitadel\Resources\User\V3alpha\AddIDPAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/AddIDPAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\AddIDPAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove an IDP authenticator
     *
     * Remove an existing identity provider (IDP) authenticator from a user, so it cannot be used for authentication anymore.
     * @param \Zitadel\Resources\User\V3alpha\RemoveIDPAuthenticatorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIDPAuthenticator(\Zitadel\Resources\User\V3alpha\RemoveIDPAuthenticatorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.user.v3alpha.ZITADELUsers/RemoveIDPAuthenticator',
        $argument,
        ['\Zitadel\Resources\User\V3alpha\RemoveIDPAuthenticatorResponse', 'decode'],
        $metadata, $options);
    }

}
