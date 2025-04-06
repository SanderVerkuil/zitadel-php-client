<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Settings\V2;

/**
 */
class SettingsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get basic information over the instance
     * @param \Zitadel\Settings\V2\GetGeneralSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGeneralSettings(\Zitadel\Settings\V2\GetGeneralSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetGeneralSettings',
        $argument,
        ['\Zitadel\Settings\V2\GetGeneralSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the login settings
     * @param \Zitadel\Settings\V2\GetLoginSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLoginSettings(\Zitadel\Settings\V2\GetLoginSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetLoginSettings',
        $argument,
        ['\Zitadel\Settings\V2\GetLoginSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the current active identity providers
     * @param \Zitadel\Settings\V2\GetActiveIdentityProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetActiveIdentityProviders(\Zitadel\Settings\V2\GetActiveIdentityProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetActiveIdentityProviders',
        $argument,
        ['\Zitadel\Settings\V2\GetActiveIdentityProvidersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the password complexity settings
     * @param \Zitadel\Settings\V2\GetPasswordComplexitySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordComplexitySettings(\Zitadel\Settings\V2\GetPasswordComplexitySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetPasswordComplexitySettings',
        $argument,
        ['\Zitadel\Settings\V2\GetPasswordComplexitySettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the password expiry settings
     * @param \Zitadel\Settings\V2\GetPasswordExpirySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordExpirySettings(\Zitadel\Settings\V2\GetPasswordExpirySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetPasswordExpirySettings',
        $argument,
        ['\Zitadel\Settings\V2\GetPasswordExpirySettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the current active branding settings
     * @param \Zitadel\Settings\V2\GetBrandingSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBrandingSettings(\Zitadel\Settings\V2\GetBrandingSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetBrandingSettings',
        $argument,
        ['\Zitadel\Settings\V2\GetBrandingSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the domain settings
     * @param \Zitadel\Settings\V2\GetDomainSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDomainSettings(\Zitadel\Settings\V2\GetDomainSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetDomainSettings',
        $argument,
        ['\Zitadel\Settings\V2\GetDomainSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the legal and support settings
     * @param \Zitadel\Settings\V2\GetLegalAndSupportSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLegalAndSupportSettings(\Zitadel\Settings\V2\GetLegalAndSupportSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetLegalAndSupportSettings',
        $argument,
        ['\Zitadel\Settings\V2\GetLegalAndSupportSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the lockout settings
     * @param \Zitadel\Settings\V2\GetLockoutSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLockoutSettings(\Zitadel\Settings\V2\GetLockoutSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetLockoutSettings',
        $argument,
        ['\Zitadel\Settings\V2\GetLockoutSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the security settings
     * @param \Zitadel\Settings\V2\GetSecuritySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSecuritySettings(\Zitadel\Settings\V2\GetSecuritySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/GetSecuritySettings',
        $argument,
        ['\Zitadel\Settings\V2\GetSecuritySettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set the security settings
     * @param \Zitadel\Settings\V2\SetSecuritySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSecuritySettings(\Zitadel\Settings\V2\SetSecuritySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2.SettingsService/SetSecuritySettings',
        $argument,
        ['\Zitadel\Settings\V2\SetSecuritySettingsResponse', 'decode'],
        $metadata, $options);
    }

}
