<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Settings\V2beta;

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
     * @param \Zitadel\Settings\V2beta\GetGeneralSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGeneralSettings(\Zitadel\Settings\V2beta\GetGeneralSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetGeneralSettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetGeneralSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the login settings
     * @param \Zitadel\Settings\V2beta\GetLoginSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLoginSettings(\Zitadel\Settings\V2beta\GetLoginSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetLoginSettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetLoginSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the current active identity providers
     * @param \Zitadel\Settings\V2beta\GetActiveIdentityProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetActiveIdentityProviders(\Zitadel\Settings\V2beta\GetActiveIdentityProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetActiveIdentityProviders',
        $argument,
        ['\Zitadel\Settings\V2beta\GetActiveIdentityProvidersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the password complexity settings
     * @param \Zitadel\Settings\V2beta\GetPasswordComplexitySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordComplexitySettings(\Zitadel\Settings\V2beta\GetPasswordComplexitySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetPasswordComplexitySettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetPasswordComplexitySettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the password expiry settings
     * @param \Zitadel\Settings\V2beta\GetPasswordExpirySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordExpirySettings(\Zitadel\Settings\V2beta\GetPasswordExpirySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetPasswordExpirySettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetPasswordExpirySettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the current active branding settings
     * @param \Zitadel\Settings\V2beta\GetBrandingSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBrandingSettings(\Zitadel\Settings\V2beta\GetBrandingSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetBrandingSettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetBrandingSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the domain settings
     * @param \Zitadel\Settings\V2beta\GetDomainSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDomainSettings(\Zitadel\Settings\V2beta\GetDomainSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetDomainSettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetDomainSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the legal and support settings
     * @param \Zitadel\Settings\V2beta\GetLegalAndSupportSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLegalAndSupportSettings(\Zitadel\Settings\V2beta\GetLegalAndSupportSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetLegalAndSupportSettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetLegalAndSupportSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the lockout settings
     * @param \Zitadel\Settings\V2beta\GetLockoutSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLockoutSettings(\Zitadel\Settings\V2beta\GetLockoutSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetLockoutSettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetLockoutSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the security settings
     * @param \Zitadel\Settings\V2beta\GetSecuritySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSecuritySettings(\Zitadel\Settings\V2beta\GetSecuritySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/GetSecuritySettings',
        $argument,
        ['\Zitadel\Settings\V2beta\GetSecuritySettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set the security settings
     * @param \Zitadel\Settings\V2beta\SetSecuritySettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSecuritySettings(\Zitadel\Settings\V2beta\SetSecuritySettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.settings.v2beta.SettingsService/SetSecuritySettings',
        $argument,
        ['\Zitadel\Settings\V2beta\SetSecuritySettingsResponse', 'decode'],
        $metadata, $options);
    }

}
