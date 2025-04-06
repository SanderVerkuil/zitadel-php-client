<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Admin\V1;

/**
 */
class AdminServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Admin\V1\HealthzRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Healthz(\Zitadel\Admin\V1\HealthzRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/Healthz',
        $argument,
        ['\Zitadel\Admin\V1\HealthzResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetSupportedLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSupportedLanguages(\Zitadel\Admin\V1\GetSupportedLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetSupportedLanguages',
        $argument,
        ['\Zitadel\Admin\V1\GetSupportedLanguagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetAllowedLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAllowedLanguages(\Zitadel\Admin\V1\GetAllowedLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetAllowedLanguages',
        $argument,
        ['\Zitadel\Admin\V1\GetAllowedLanguagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultLanguageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultLanguage(\Zitadel\Admin\V1\SetDefaultLanguageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultLanguage',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultLanguageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultLanguage(\Zitadel\Admin\V1\GetDefaultLanguageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultLanguage',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetMyInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMyInstance(\Zitadel\Admin\V1\GetMyInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetMyInstance',
        $argument,
        ['\Zitadel\Admin\V1\GetMyInstanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListInstanceDomainsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstanceDomains(\Zitadel\Admin\V1\ListInstanceDomainsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListInstanceDomains',
        $argument,
        ['\Zitadel\Admin\V1\ListInstanceDomainsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListInstanceTrustedDomainsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstanceTrustedDomains(\Zitadel\Admin\V1\ListInstanceTrustedDomainsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListInstanceTrustedDomains',
        $argument,
        ['\Zitadel\Admin\V1\ListInstanceTrustedDomainsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddInstanceTrustedDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddInstanceTrustedDomain(\Zitadel\Admin\V1\AddInstanceTrustedDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddInstanceTrustedDomain',
        $argument,
        ['\Zitadel\Admin\V1\AddInstanceTrustedDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveInstanceTrustedDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveInstanceTrustedDomain(\Zitadel\Admin\V1\RemoveInstanceTrustedDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveInstanceTrustedDomain',
        $argument,
        ['\Zitadel\Admin\V1\RemoveInstanceTrustedDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListSecretGeneratorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSecretGenerators(\Zitadel\Admin\V1\ListSecretGeneratorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListSecretGenerators',
        $argument,
        ['\Zitadel\Admin\V1\ListSecretGeneratorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetSecretGeneratorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSecretGenerator(\Zitadel\Admin\V1\GetSecretGeneratorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetSecretGenerator',
        $argument,
        ['\Zitadel\Admin\V1\GetSecretGeneratorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateSecretGeneratorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSecretGenerator(\Zitadel\Admin\V1\UpdateSecretGeneratorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateSecretGenerator',
        $argument,
        ['\Zitadel\Admin\V1\UpdateSecretGeneratorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Get active SMTP Configuration
     *
     * Returns the active SMTP configuration from the system. This is used to send E-Mails to the users.
     *
     * Deprecated: please move to the new endpoint GetEmailProvider.
     * @param \Zitadel\Admin\V1\GetSMTPConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSMTPConfig(\Zitadel\Admin\V1\GetSMTPConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetSMTPConfig',
        $argument,
        ['\Zitadel\Admin\V1\GetSMTPConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Get SMTP provider configuration by its id
     *
     * Get a specific SMTP provider configuration by its ID.
     *
     * Deprecated: please move to the new endpoint GetEmailProviderById.
     * @param \Zitadel\Admin\V1\GetSMTPConfigByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSMTPConfigById(\Zitadel\Admin\V1\GetSMTPConfigByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetSMTPConfigById',
        $argument,
        ['\Zitadel\Admin\V1\GetSMTPConfigByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Add SMTP Configuration
     *
     * Add a new SMTP configuration if nothing is set yet.
     *
     * Deprecated: please move to the new endpoint AddEmailProviderSMTP.
     * @param \Zitadel\Admin\V1\AddSMTPConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSMTPConfig(\Zitadel\Admin\V1\AddSMTPConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddSMTPConfig',
        $argument,
        ['\Zitadel\Admin\V1\AddSMTPConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Update SMTP Configuration
     *
     * Update the SMTP configuration, be aware that this will be activated as soon as it is saved. So the users will get notifications from the newly configured SMTP.
     *
     * Deprecated: please move to the new endpoint UpdateEmailProviderSMTP.
     * @param \Zitadel\Admin\V1\UpdateSMTPConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSMTPConfig(\Zitadel\Admin\V1\UpdateSMTPConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateSMTPConfig',
        $argument,
        ['\Zitadel\Admin\V1\UpdateSMTPConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Update SMTP Password
     *
     * Update the SMTP password that is used for the host, be aware that this will be activated as soon as it is saved. So the users will get notifications from the newly configured SMTP.
     *
     * Deprecated: please move to the new endpoint UpdateEmailProviderSMTPPassword.
     * @param \Zitadel\Admin\V1\UpdateSMTPConfigPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSMTPConfigPassword(\Zitadel\Admin\V1\UpdateSMTPConfigPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateSMTPConfigPassword',
        $argument,
        ['\Zitadel\Admin\V1\UpdateSMTPConfigPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Activate SMTP Provider
     *
     * Activate an SMTP provider.
     *
     * Deprecated: please move to the new endpoint ActivateEmailProvider.
     * @param \Zitadel\Admin\V1\ActivateSMTPConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateSMTPConfig(\Zitadel\Admin\V1\ActivateSMTPConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ActivateSMTPConfig',
        $argument,
        ['\Zitadel\Admin\V1\ActivateSMTPConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Deactivate SMTP Provider
     *
     * Deactivate an SMTP provider. After deactivating the provider, the users will not be able to receive SMTP notifications from that provider anymore.
     *
     * Deprecated: please move to the new endpoint DeactivateEmailProvider.
     * @param \Zitadel\Admin\V1\DeactivateSMTPConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateSMTPConfig(\Zitadel\Admin\V1\DeactivateSMTPConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/DeactivateSMTPConfig',
        $argument,
        ['\Zitadel\Admin\V1\DeactivateSMTPConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Remove SMTP Configuration
     *
     * Remove the SMTP configuration, be aware that the users will not get an E-Mail if no SMTP is set.
     *
     * Deprecated: please move to the new endpoint RemoveEmailProvider.
     * @param \Zitadel\Admin\V1\RemoveSMTPConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveSMTPConfig(\Zitadel\Admin\V1\RemoveSMTPConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveSMTPConfig',
        $argument,
        ['\Zitadel\Admin\V1\RemoveSMTPConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Test SMTP Provider
     *
     * Test an SMTP provider identified by its ID. After testing the provider, the users will receive information about the test results.
     *
     * Deprecated: please move to the new endpoint TestEmailProviderSMTPById.
     * @param \Zitadel\Admin\V1\TestSMTPConfigByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestSMTPConfigById(\Zitadel\Admin\V1\TestSMTPConfigByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/TestSMTPConfigById',
        $argument,
        ['\Zitadel\Admin\V1\TestSMTPConfigByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Test SMTP Provider
     *
     * Test an SMTP provider. After testing the provider, the users will receive information about the test results.
     *
     * Deprecated: please move to the new endpoint TestEmailProviderSMTP.
     * @param \Zitadel\Admin\V1\TestSMTPConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestSMTPConfig(\Zitadel\Admin\V1\TestSMTPConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/TestSMTPConfig',
        $argument,
        ['\Zitadel\Admin\V1\TestSMTPConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: List SMTP Configs
     *
     * Returns a list of SMTP configurations.
     *
     * Deprecated: please move to the new endpoint ListEmailProviders.
     * @param \Zitadel\Admin\V1\ListSMTPConfigsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSMTPConfigs(\Zitadel\Admin\V1\ListSMTPConfigsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListSMTPConfigs',
        $argument,
        ['\Zitadel\Admin\V1\ListSMTPConfigsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListEmailProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEmailProviders(\Zitadel\Admin\V1\ListEmailProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListEmailProviders',
        $argument,
        ['\Zitadel\Admin\V1\ListEmailProvidersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetEmailProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEmailProvider(\Zitadel\Admin\V1\GetEmailProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetEmailProvider',
        $argument,
        ['\Zitadel\Admin\V1\GetEmailProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetEmailProviderByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEmailProviderById(\Zitadel\Admin\V1\GetEmailProviderByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetEmailProviderById',
        $argument,
        ['\Zitadel\Admin\V1\GetEmailProviderByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddEmailProviderSMTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddEmailProviderSMTP(\Zitadel\Admin\V1\AddEmailProviderSMTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddEmailProviderSMTP',
        $argument,
        ['\Zitadel\Admin\V1\AddEmailProviderSMTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateEmailProviderSMTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEmailProviderSMTP(\Zitadel\Admin\V1\UpdateEmailProviderSMTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateEmailProviderSMTP',
        $argument,
        ['\Zitadel\Admin\V1\UpdateEmailProviderSMTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddEmailProviderHTTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddEmailProviderHTTP(\Zitadel\Admin\V1\AddEmailProviderHTTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddEmailProviderHTTP',
        $argument,
        ['\Zitadel\Admin\V1\AddEmailProviderHTTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateEmailProviderHTTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEmailProviderHTTP(\Zitadel\Admin\V1\UpdateEmailProviderHTTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateEmailProviderHTTP',
        $argument,
        ['\Zitadel\Admin\V1\UpdateEmailProviderHTTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateEmailProviderSMTPPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEmailProviderSMTPPassword(\Zitadel\Admin\V1\UpdateEmailProviderSMTPPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateEmailProviderSMTPPassword',
        $argument,
        ['\Zitadel\Admin\V1\UpdateEmailProviderSMTPPasswordResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ActivateEmailProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateEmailProvider(\Zitadel\Admin\V1\ActivateEmailProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ActivateEmailProvider',
        $argument,
        ['\Zitadel\Admin\V1\ActivateEmailProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\DeactivateEmailProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateEmailProvider(\Zitadel\Admin\V1\DeactivateEmailProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/DeactivateEmailProvider',
        $argument,
        ['\Zitadel\Admin\V1\DeactivateEmailProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveEmailProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveEmailProvider(\Zitadel\Admin\V1\RemoveEmailProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveEmailProvider',
        $argument,
        ['\Zitadel\Admin\V1\RemoveEmailProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\TestEmailProviderSMTPByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestEmailProviderSMTPById(\Zitadel\Admin\V1\TestEmailProviderSMTPByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/TestEmailProviderSMTPById',
        $argument,
        ['\Zitadel\Admin\V1\TestEmailProviderSMTPByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\TestEmailProviderSMTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestEmailProviderSMTP(\Zitadel\Admin\V1\TestEmailProviderSMTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/TestEmailProviderSMTP',
        $argument,
        ['\Zitadel\Admin\V1\TestEmailProviderSMTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListSMSProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSMSProviders(\Zitadel\Admin\V1\ListSMSProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListSMSProviders',
        $argument,
        ['\Zitadel\Admin\V1\ListSMSProvidersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetSMSProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSMSProvider(\Zitadel\Admin\V1\GetSMSProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetSMSProvider',
        $argument,
        ['\Zitadel\Admin\V1\GetSMSProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddSMSProviderTwilioRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSMSProviderTwilio(\Zitadel\Admin\V1\AddSMSProviderTwilioRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddSMSProviderTwilio',
        $argument,
        ['\Zitadel\Admin\V1\AddSMSProviderTwilioResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateSMSProviderTwilioRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSMSProviderTwilio(\Zitadel\Admin\V1\UpdateSMSProviderTwilioRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateSMSProviderTwilio',
        $argument,
        ['\Zitadel\Admin\V1\UpdateSMSProviderTwilioResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateSMSProviderTwilioTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSMSProviderTwilioToken(\Zitadel\Admin\V1\UpdateSMSProviderTwilioTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateSMSProviderTwilioToken',
        $argument,
        ['\Zitadel\Admin\V1\UpdateSMSProviderTwilioTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddSMSProviderHTTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSMSProviderHTTP(\Zitadel\Admin\V1\AddSMSProviderHTTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddSMSProviderHTTP',
        $argument,
        ['\Zitadel\Admin\V1\AddSMSProviderHTTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateSMSProviderHTTPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSMSProviderHTTP(\Zitadel\Admin\V1\UpdateSMSProviderHTTPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateSMSProviderHTTP',
        $argument,
        ['\Zitadel\Admin\V1\UpdateSMSProviderHTTPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ActivateSMSProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateSMSProvider(\Zitadel\Admin\V1\ActivateSMSProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ActivateSMSProvider',
        $argument,
        ['\Zitadel\Admin\V1\ActivateSMSProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\DeactivateSMSProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateSMSProvider(\Zitadel\Admin\V1\DeactivateSMSProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/DeactivateSMSProvider',
        $argument,
        ['\Zitadel\Admin\V1\DeactivateSMSProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveSMSProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveSMSProvider(\Zitadel\Admin\V1\RemoveSMSProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveSMSProvider',
        $argument,
        ['\Zitadel\Admin\V1\RemoveSMSProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetOIDCSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOIDCSettings(\Zitadel\Admin\V1\GetOIDCSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetOIDCSettings',
        $argument,
        ['\Zitadel\Admin\V1\GetOIDCSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddOIDCSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOIDCSettings(\Zitadel\Admin\V1\AddOIDCSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddOIDCSettings',
        $argument,
        ['\Zitadel\Admin\V1\AddOIDCSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateOIDCSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOIDCSettings(\Zitadel\Admin\V1\UpdateOIDCSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateOIDCSettings',
        $argument,
        ['\Zitadel\Admin\V1\UpdateOIDCSettingsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetFileSystemNotificationProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFileSystemNotificationProvider(\Zitadel\Admin\V1\GetFileSystemNotificationProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetFileSystemNotificationProvider',
        $argument,
        ['\Zitadel\Admin\V1\GetFileSystemNotificationProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetLogNotificationProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLogNotificationProvider(\Zitadel\Admin\V1\GetLogNotificationProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetLogNotificationProvider',
        $argument,
        ['\Zitadel\Admin\V1\GetLogNotificationProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetSecurityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSecurityPolicy(\Zitadel\Admin\V1\GetSecurityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetSecurityPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetSecurityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetSecurityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSecurityPolicy(\Zitadel\Admin\V1\SetSecurityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetSecurityPolicy',
        $argument,
        ['\Zitadel\Admin\V1\SetSecurityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetOrgByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrgByID(\Zitadel\Admin\V1\GetOrgByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetOrgByID',
        $argument,
        ['\Zitadel\Admin\V1\GetOrgByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\IsOrgUniqueRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IsOrgUnique(\Zitadel\Admin\V1\IsOrgUniqueRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/IsOrgUnique',
        $argument,
        ['\Zitadel\Admin\V1\IsOrgUniqueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultOrg(\Zitadel\Admin\V1\SetDefaultOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultOrg',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultOrg(\Zitadel\Admin\V1\GetDefaultOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultOrg',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListOrgsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgs(\Zitadel\Admin\V1\ListOrgsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListOrgs',
        $argument,
        ['\Zitadel\Admin\V1\ListOrgsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetUpOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUpOrg(\Zitadel\Admin\V1\SetUpOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetUpOrg',
        $argument,
        ['\Zitadel\Admin\V1\SetUpOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveOrg(\Zitadel\Admin\V1\RemoveOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveOrg',
        $argument,
        ['\Zitadel\Admin\V1\RemoveOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetIDPByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIDPByID(\Zitadel\Admin\V1\GetIDPByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetIDPByID',
        $argument,
        ['\Zitadel\Admin\V1\GetIDPByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListIDPsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIDPs(\Zitadel\Admin\V1\ListIDPsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListIDPs',
        $argument,
        ['\Zitadel\Admin\V1\ListIDPsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddOIDCIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOIDCIDP(\Zitadel\Admin\V1\AddOIDCIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddOIDCIDP',
        $argument,
        ['\Zitadel\Admin\V1\AddOIDCIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddJWTIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddJWTIDP(\Zitadel\Admin\V1\AddJWTIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddJWTIDP',
        $argument,
        ['\Zitadel\Admin\V1\AddJWTIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIDP(\Zitadel\Admin\V1\UpdateIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateIDP',
        $argument,
        ['\Zitadel\Admin\V1\UpdateIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\DeactivateIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateIDP(\Zitadel\Admin\V1\DeactivateIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/DeactivateIDP',
        $argument,
        ['\Zitadel\Admin\V1\DeactivateIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ReactivateIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateIDP(\Zitadel\Admin\V1\ReactivateIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ReactivateIDP',
        $argument,
        ['\Zitadel\Admin\V1\ReactivateIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveIDPRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIDP(\Zitadel\Admin\V1\RemoveIDPRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveIDP',
        $argument,
        ['\Zitadel\Admin\V1\RemoveIDPResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateIDPOIDCConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIDPOIDCConfig(\Zitadel\Admin\V1\UpdateIDPOIDCConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateIDPOIDCConfig',
        $argument,
        ['\Zitadel\Admin\V1\UpdateIDPOIDCConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateIDPJWTConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIDPJWTConfig(\Zitadel\Admin\V1\UpdateIDPJWTConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateIDPJWTConfig',
        $argument,
        ['\Zitadel\Admin\V1\UpdateIDPJWTConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns all identity providers, which match the query
     * Limit should always be set, there is a default limit set by the service
     * @param \Zitadel\Admin\V1\ListProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProviders(\Zitadel\Admin\V1\ListProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListProviders',
        $argument,
        ['\Zitadel\Admin\V1\ListProvidersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns an identity provider of the instance
     * @param \Zitadel\Admin\V1\GetProviderByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProviderByID(\Zitadel\Admin\V1\GetProviderByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetProviderByID',
        $argument,
        ['\Zitadel\Admin\V1\GetProviderByIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new OAuth2 identity provider on the instance
     * @param \Zitadel\Admin\V1\AddGenericOAuthProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGenericOAuthProvider(\Zitadel\Admin\V1\AddGenericOAuthProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddGenericOAuthProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddGenericOAuthProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing OAuth2 identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateGenericOAuthProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGenericOAuthProvider(\Zitadel\Admin\V1\UpdateGenericOAuthProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateGenericOAuthProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateGenericOAuthProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new OIDC identity provider on the instance
     * @param \Zitadel\Admin\V1\AddGenericOIDCProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGenericOIDCProvider(\Zitadel\Admin\V1\AddGenericOIDCProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddGenericOIDCProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddGenericOIDCProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing OIDC identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateGenericOIDCProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGenericOIDCProvider(\Zitadel\Admin\V1\UpdateGenericOIDCProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateGenericOIDCProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateGenericOIDCProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Migrate an existing OIDC identity provider on the instance
     * @param \Zitadel\Admin\V1\MigrateGenericOIDCProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MigrateGenericOIDCProvider(\Zitadel\Admin\V1\MigrateGenericOIDCProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/MigrateGenericOIDCProvider',
        $argument,
        ['\Zitadel\Admin\V1\MigrateGenericOIDCProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new JWT identity provider on the instance
     * @param \Zitadel\Admin\V1\AddJWTProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddJWTProvider(\Zitadel\Admin\V1\AddJWTProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddJWTProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddJWTProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing JWT identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateJWTProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateJWTProvider(\Zitadel\Admin\V1\UpdateJWTProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateJWTProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateJWTProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new Azure AD identity provider on the instance
     * @param \Zitadel\Admin\V1\AddAzureADProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAzureADProvider(\Zitadel\Admin\V1\AddAzureADProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddAzureADProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddAzureADProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing Azure AD identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateAzureADProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAzureADProvider(\Zitadel\Admin\V1\UpdateAzureADProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateAzureADProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateAzureADProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new GitHub identity provider on the instance
     * @param \Zitadel\Admin\V1\AddGitHubProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitHubProvider(\Zitadel\Admin\V1\AddGitHubProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddGitHubProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddGitHubProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing GitHub identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateGitHubProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitHubProvider(\Zitadel\Admin\V1\UpdateGitHubProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateGitHubProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateGitHubProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new GitHub Enterprise Server identity provider on the instance
     * @param \Zitadel\Admin\V1\AddGitHubEnterpriseServerProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitHubEnterpriseServerProvider(\Zitadel\Admin\V1\AddGitHubEnterpriseServerProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddGitHubEnterpriseServerProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddGitHubEnterpriseServerProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing GitHub Enterprise Server identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateGitHubEnterpriseServerProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitHubEnterpriseServerProvider(\Zitadel\Admin\V1\UpdateGitHubEnterpriseServerProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateGitHubEnterpriseServerProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateGitHubEnterpriseServerProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new GitLab identity provider on the instance
     * @param \Zitadel\Admin\V1\AddGitLabProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitLabProvider(\Zitadel\Admin\V1\AddGitLabProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddGitLabProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddGitLabProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing GitLab identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateGitLabProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitLabProvider(\Zitadel\Admin\V1\UpdateGitLabProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateGitLabProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateGitLabProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new self hosted GitLab identity provider on the instance
     * @param \Zitadel\Admin\V1\AddGitLabSelfHostedProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGitLabSelfHostedProvider(\Zitadel\Admin\V1\AddGitLabSelfHostedProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddGitLabSelfHostedProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddGitLabSelfHostedProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing self hosted GitLab identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateGitLabSelfHostedProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGitLabSelfHostedProvider(\Zitadel\Admin\V1\UpdateGitLabSelfHostedProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateGitLabSelfHostedProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateGitLabSelfHostedProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new Google identity provider on the instance
     * @param \Zitadel\Admin\V1\AddGoogleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddGoogleProvider(\Zitadel\Admin\V1\AddGoogleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddGoogleProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddGoogleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing Google identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateGoogleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateGoogleProvider(\Zitadel\Admin\V1\UpdateGoogleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateGoogleProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateGoogleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new LDAP identity provider on the instance
     * @param \Zitadel\Admin\V1\AddLDAPProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddLDAPProvider(\Zitadel\Admin\V1\AddLDAPProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddLDAPProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddLDAPProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing LDAP identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateLDAPProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateLDAPProvider(\Zitadel\Admin\V1\UpdateLDAPProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateLDAPProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateLDAPProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new Apple identity provider on the instance
     * @param \Zitadel\Admin\V1\AddAppleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAppleProvider(\Zitadel\Admin\V1\AddAppleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddAppleProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddAppleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing Apple identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateAppleProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAppleProvider(\Zitadel\Admin\V1\UpdateAppleProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateAppleProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateAppleProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new SAML identity provider on the instance
     * @param \Zitadel\Admin\V1\AddSAMLProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSAMLProvider(\Zitadel\Admin\V1\AddSAMLProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddSAMLProvider',
        $argument,
        ['\Zitadel\Admin\V1\AddSAMLProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Change an existing SAML identity provider on the instance
     * @param \Zitadel\Admin\V1\UpdateSAMLProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSAMLProvider(\Zitadel\Admin\V1\UpdateSAMLProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateSAMLProvider',
        $argument,
        ['\Zitadel\Admin\V1\UpdateSAMLProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Regenerate certificate for an existing SAML identity provider in the organization
     * @param \Zitadel\Admin\V1\RegenerateSAMLProviderCertificateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegenerateSAMLProviderCertificate(\Zitadel\Admin\V1\RegenerateSAMLProviderCertificateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RegenerateSAMLProviderCertificate',
        $argument,
        ['\Zitadel\Admin\V1\RegenerateSAMLProviderCertificateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove an identity provider
     * Will remove all linked providers of this configuration on the users
     * @param \Zitadel\Admin\V1\DeleteProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProvider(\Zitadel\Admin\V1\DeleteProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/DeleteProvider',
        $argument,
        ['\Zitadel\Admin\V1\DeleteProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetOrgIAMPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrgIAMPolicy(\Zitadel\Admin\V1\GetOrgIAMPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetOrgIAMPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetOrgIAMPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateOrgIAMPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrgIAMPolicy(\Zitadel\Admin\V1\UpdateOrgIAMPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateOrgIAMPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateOrgIAMPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomOrgIAMPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomOrgIAMPolicy(\Zitadel\Admin\V1\GetCustomOrgIAMPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomOrgIAMPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomOrgIAMPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddCustomOrgIAMPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomOrgIAMPolicy(\Zitadel\Admin\V1\AddCustomOrgIAMPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddCustomOrgIAMPolicy',
        $argument,
        ['\Zitadel\Admin\V1\AddCustomOrgIAMPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateCustomOrgIAMPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomOrgIAMPolicy(\Zitadel\Admin\V1\UpdateCustomOrgIAMPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateCustomOrgIAMPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateCustomOrgIAMPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomOrgIAMPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomOrgIAMPolicyToDefault(\Zitadel\Admin\V1\ResetCustomOrgIAMPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomOrgIAMPolicyToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomOrgIAMPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDomainPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDomainPolicy(\Zitadel\Admin\V1\GetDomainPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDomainPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetDomainPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateDomainPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateDomainPolicy(\Zitadel\Admin\V1\UpdateDomainPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateDomainPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateDomainPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomDomainPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomDomainPolicy(\Zitadel\Admin\V1\GetCustomDomainPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomDomainPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomDomainPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddCustomDomainPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCustomDomainPolicy(\Zitadel\Admin\V1\AddCustomDomainPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddCustomDomainPolicy',
        $argument,
        ['\Zitadel\Admin\V1\AddCustomDomainPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateCustomDomainPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCustomDomainPolicy(\Zitadel\Admin\V1\UpdateCustomDomainPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateCustomDomainPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateCustomDomainPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomDomainPolicyToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomDomainPolicyToDefault(\Zitadel\Admin\V1\ResetCustomDomainPolicyToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomDomainPolicyToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomDomainPolicyToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLabelPolicy(\Zitadel\Admin\V1\GetLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetLabelPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetPreviewLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPreviewLabelPolicy(\Zitadel\Admin\V1\GetPreviewLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetPreviewLabelPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetPreviewLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateLabelPolicy(\Zitadel\Admin\V1\UpdateLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateLabelPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ActivateLabelPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateLabelPolicy(\Zitadel\Admin\V1\ActivateLabelPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ActivateLabelPolicy',
        $argument,
        ['\Zitadel\Admin\V1\ActivateLabelPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveLabelPolicyLogoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveLabelPolicyLogo(\Zitadel\Admin\V1\RemoveLabelPolicyLogoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveLabelPolicyLogo',
        $argument,
        ['\Zitadel\Admin\V1\RemoveLabelPolicyLogoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveLabelPolicyLogoDarkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveLabelPolicyLogoDark(\Zitadel\Admin\V1\RemoveLabelPolicyLogoDarkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveLabelPolicyLogoDark',
        $argument,
        ['\Zitadel\Admin\V1\RemoveLabelPolicyLogoDarkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveLabelPolicyIconRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveLabelPolicyIcon(\Zitadel\Admin\V1\RemoveLabelPolicyIconRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveLabelPolicyIcon',
        $argument,
        ['\Zitadel\Admin\V1\RemoveLabelPolicyIconResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveLabelPolicyIconDarkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveLabelPolicyIconDark(\Zitadel\Admin\V1\RemoveLabelPolicyIconDarkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveLabelPolicyIconDark',
        $argument,
        ['\Zitadel\Admin\V1\RemoveLabelPolicyIconDarkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveLabelPolicyFontRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveLabelPolicyFont(\Zitadel\Admin\V1\RemoveLabelPolicyFontRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveLabelPolicyFont',
        $argument,
        ['\Zitadel\Admin\V1\RemoveLabelPolicyFontResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLoginPolicy(\Zitadel\Admin\V1\GetLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateLoginPolicy(\Zitadel\Admin\V1\UpdateLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListLoginPolicyIDPsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLoginPolicyIDPs(\Zitadel\Admin\V1\ListLoginPolicyIDPsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListLoginPolicyIDPs',
        $argument,
        ['\Zitadel\Admin\V1\ListLoginPolicyIDPsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddIDPToLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddIDPToLoginPolicy(\Zitadel\Admin\V1\AddIDPToLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddIDPToLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\AddIDPToLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveIDPFromLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIDPFromLoginPolicy(\Zitadel\Admin\V1\RemoveIDPFromLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveIDPFromLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\RemoveIDPFromLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListLoginPolicySecondFactorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLoginPolicySecondFactors(\Zitadel\Admin\V1\ListLoginPolicySecondFactorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListLoginPolicySecondFactors',
        $argument,
        ['\Zitadel\Admin\V1\ListLoginPolicySecondFactorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddSecondFactorToLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddSecondFactorToLoginPolicy(\Zitadel\Admin\V1\AddSecondFactorToLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddSecondFactorToLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\AddSecondFactorToLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveSecondFactorFromLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveSecondFactorFromLoginPolicy(\Zitadel\Admin\V1\RemoveSecondFactorFromLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveSecondFactorFromLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\RemoveSecondFactorFromLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListLoginPolicyMultiFactorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLoginPolicyMultiFactors(\Zitadel\Admin\V1\ListLoginPolicyMultiFactorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListLoginPolicyMultiFactors',
        $argument,
        ['\Zitadel\Admin\V1\ListLoginPolicyMultiFactorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddMultiFactorToLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddMultiFactorToLoginPolicy(\Zitadel\Admin\V1\AddMultiFactorToLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddMultiFactorToLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\AddMultiFactorToLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveMultiFactorFromLoginPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveMultiFactorFromLoginPolicy(\Zitadel\Admin\V1\RemoveMultiFactorFromLoginPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveMultiFactorFromLoginPolicy',
        $argument,
        ['\Zitadel\Admin\V1\RemoveMultiFactorFromLoginPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetPasswordComplexityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordComplexityPolicy(\Zitadel\Admin\V1\GetPasswordComplexityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetPasswordComplexityPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetPasswordComplexityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdatePasswordComplexityPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePasswordComplexityPolicy(\Zitadel\Admin\V1\UpdatePasswordComplexityPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdatePasswordComplexityPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdatePasswordComplexityPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetPasswordAgePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPasswordAgePolicy(\Zitadel\Admin\V1\GetPasswordAgePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetPasswordAgePolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetPasswordAgePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdatePasswordAgePolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePasswordAgePolicy(\Zitadel\Admin\V1\UpdatePasswordAgePolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdatePasswordAgePolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdatePasswordAgePolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetLockoutPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLockoutPolicy(\Zitadel\Admin\V1\GetLockoutPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetLockoutPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetLockoutPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateLockoutPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateLockoutPolicy(\Zitadel\Admin\V1\UpdateLockoutPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateLockoutPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateLockoutPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetPrivacyPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPrivacyPolicy(\Zitadel\Admin\V1\GetPrivacyPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetPrivacyPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetPrivacyPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdatePrivacyPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePrivacyPolicy(\Zitadel\Admin\V1\UpdatePrivacyPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdatePrivacyPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdatePrivacyPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\AddNotificationPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddNotificationPolicy(\Zitadel\Admin\V1\AddNotificationPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddNotificationPolicy',
        $argument,
        ['\Zitadel\Admin\V1\AddNotificationPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetNotificationPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNotificationPolicy(\Zitadel\Admin\V1\GetNotificationPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetNotificationPolicy',
        $argument,
        ['\Zitadel\Admin\V1\GetNotificationPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateNotificationPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateNotificationPolicy(\Zitadel\Admin\V1\UpdateNotificationPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateNotificationPolicy',
        $argument,
        ['\Zitadel\Admin\V1\UpdateNotificationPolicyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultInitMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultInitMessageText(\Zitadel\Admin\V1\GetDefaultInitMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultInitMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultInitMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomInitMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomInitMessageText(\Zitadel\Admin\V1\GetCustomInitMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomInitMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomInitMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultInitMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultInitMessageText(\Zitadel\Admin\V1\SetDefaultInitMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultInitMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultInitMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomInitMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomInitMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomInitMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomInitMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomInitMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultPasswordResetMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordResetMessageText(\Zitadel\Admin\V1\GetDefaultPasswordResetMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultPasswordResetMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultPasswordResetMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomPasswordResetMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomPasswordResetMessageText(\Zitadel\Admin\V1\GetCustomPasswordResetMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomPasswordResetMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomPasswordResetMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultPasswordResetMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultPasswordResetMessageText(\Zitadel\Admin\V1\SetDefaultPasswordResetMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultPasswordResetMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultPasswordResetMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomPasswordResetMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomPasswordResetMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomPasswordResetMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomPasswordResetMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomPasswordResetMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultVerifyEmailMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifyEmailMessageText(\Zitadel\Admin\V1\GetDefaultVerifyEmailMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultVerifyEmailMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultVerifyEmailMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomVerifyEmailMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifyEmailMessageText(\Zitadel\Admin\V1\GetCustomVerifyEmailMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomVerifyEmailMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomVerifyEmailMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultVerifyEmailMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultVerifyEmailMessageText(\Zitadel\Admin\V1\SetDefaultVerifyEmailMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultVerifyEmailMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultVerifyEmailMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomVerifyEmailMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifyEmailMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomVerifyEmailMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomVerifyEmailMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomVerifyEmailMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultVerifyPhoneMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifyPhoneMessageText(\Zitadel\Admin\V1\GetDefaultVerifyPhoneMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultVerifyPhoneMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultVerifyPhoneMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomVerifyPhoneMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifyPhoneMessageText(\Zitadel\Admin\V1\GetCustomVerifyPhoneMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomVerifyPhoneMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomVerifyPhoneMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultVerifyPhoneMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultVerifyPhoneMessageText(\Zitadel\Admin\V1\SetDefaultVerifyPhoneMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultVerifyPhoneMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultVerifyPhoneMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomVerifyPhoneMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifyPhoneMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomVerifyPhoneMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomVerifyPhoneMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomVerifyPhoneMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultVerifySMSOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifySMSOTPMessageText(\Zitadel\Admin\V1\GetDefaultVerifySMSOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultVerifySMSOTPMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultVerifySMSOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomVerifySMSOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifySMSOTPMessageText(\Zitadel\Admin\V1\GetCustomVerifySMSOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomVerifySMSOTPMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomVerifySMSOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultVerifySMSOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultVerifySMSOTPMessageText(\Zitadel\Admin\V1\SetDefaultVerifySMSOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultVerifySMSOTPMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultVerifySMSOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomVerifySMSOTPMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifySMSOTPMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomVerifySMSOTPMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomVerifySMSOTPMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomVerifySMSOTPMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultVerifyEmailOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultVerifyEmailOTPMessageText(\Zitadel\Admin\V1\GetDefaultVerifyEmailOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultVerifyEmailOTPMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultVerifyEmailOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomVerifyEmailOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomVerifyEmailOTPMessageText(\Zitadel\Admin\V1\GetCustomVerifyEmailOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomVerifyEmailOTPMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomVerifyEmailOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultVerifyEmailOTPMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultVerifyEmailOTPMessageText(\Zitadel\Admin\V1\SetDefaultVerifyEmailOTPMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultVerifyEmailOTPMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultVerifyEmailOTPMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomVerifyEmailOTPMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomVerifyEmailOTPMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomVerifyEmailOTPMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomVerifyEmailOTPMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomVerifyEmailOTPMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultDomainClaimedMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultDomainClaimedMessageText(\Zitadel\Admin\V1\GetDefaultDomainClaimedMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultDomainClaimedMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultDomainClaimedMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomDomainClaimedMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomDomainClaimedMessageText(\Zitadel\Admin\V1\GetCustomDomainClaimedMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomDomainClaimedMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomDomainClaimedMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultDomainClaimedMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultDomainClaimedMessageText(\Zitadel\Admin\V1\SetDefaultDomainClaimedMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultDomainClaimedMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultDomainClaimedMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomDomainClaimedMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomDomainClaimedMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomDomainClaimedMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomDomainClaimedMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomDomainClaimedMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultPasswordlessRegistrationMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordlessRegistrationMessageText(\Zitadel\Admin\V1\GetDefaultPasswordlessRegistrationMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultPasswordlessRegistrationMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultPasswordlessRegistrationMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomPasswordlessRegistrationMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomPasswordlessRegistrationMessageText(\Zitadel\Admin\V1\GetCustomPasswordlessRegistrationMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomPasswordlessRegistrationMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomPasswordlessRegistrationMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultPasswordlessRegistrationMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultPasswordlessRegistrationMessageText(\Zitadel\Admin\V1\SetDefaultPasswordlessRegistrationMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultPasswordlessRegistrationMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultPasswordlessRegistrationMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomPasswordlessRegistrationMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomPasswordlessRegistrationMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomPasswordlessRegistrationMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomPasswordlessRegistrationMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomPasswordlessRegistrationMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultPasswordChangeMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultPasswordChangeMessageText(\Zitadel\Admin\V1\GetDefaultPasswordChangeMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultPasswordChangeMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultPasswordChangeMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomPasswordChangeMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomPasswordChangeMessageText(\Zitadel\Admin\V1\GetCustomPasswordChangeMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomPasswordChangeMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomPasswordChangeMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultPasswordChangeMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultPasswordChangeMessageText(\Zitadel\Admin\V1\SetDefaultPasswordChangeMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultPasswordChangeMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultPasswordChangeMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomPasswordChangeMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomPasswordChangeMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomPasswordChangeMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomPasswordChangeMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomPasswordChangeMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultInviteUserMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultInviteUserMessageText(\Zitadel\Admin\V1\GetDefaultInviteUserMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultInviteUserMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultInviteUserMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomInviteUserMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomInviteUserMessageText(\Zitadel\Admin\V1\GetCustomInviteUserMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomInviteUserMessageText',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomInviteUserMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetDefaultInviteUserMessageTextRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetDefaultInviteUserMessageText(\Zitadel\Admin\V1\SetDefaultInviteUserMessageTextRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetDefaultInviteUserMessageText',
        $argument,
        ['\Zitadel\Admin\V1\SetDefaultInviteUserMessageTextResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomInviteUserMessageTextToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomInviteUserMessageTextToDefault(\Zitadel\Admin\V1\ResetCustomInviteUserMessageTextToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomInviteUserMessageTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomInviteUserMessageTextToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetDefaultLoginTextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDefaultLoginTexts(\Zitadel\Admin\V1\GetDefaultLoginTextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetDefaultLoginTexts',
        $argument,
        ['\Zitadel\Admin\V1\GetDefaultLoginTextsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\GetCustomLoginTextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCustomLoginTexts(\Zitadel\Admin\V1\GetCustomLoginTextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetCustomLoginTexts',
        $argument,
        ['\Zitadel\Admin\V1\GetCustomLoginTextsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\SetCustomLoginTextsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetCustomLoginText(\Zitadel\Admin\V1\SetCustomLoginTextsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetCustomLoginText',
        $argument,
        ['\Zitadel\Admin\V1\SetCustomLoginTextsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ResetCustomLoginTextsToDefaultRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetCustomLoginTextToDefault(\Zitadel\Admin\V1\ResetCustomLoginTextsToDefaultRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ResetCustomLoginTextToDefault',
        $argument,
        ['\Zitadel\Admin\V1\ResetCustomLoginTextsToDefaultResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListIAMMemberRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIAMMemberRoles(\Zitadel\Admin\V1\ListIAMMemberRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListIAMMemberRoles',
        $argument,
        ['\Zitadel\Admin\V1\ListIAMMemberRolesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListIAMMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIAMMembers(\Zitadel\Admin\V1\ListIAMMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListIAMMembers',
        $argument,
        ['\Zitadel\Admin\V1\ListIAMMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds a user to the membership list of ZITADEL with the given roles
     * undefined roles will be dropped
     * @param \Zitadel\Admin\V1\AddIAMMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddIAMMember(\Zitadel\Admin\V1\AddIAMMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/AddIAMMember',
        $argument,
        ['\Zitadel\Admin\V1\AddIAMMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\UpdateIAMMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateIAMMember(\Zitadel\Admin\V1\UpdateIAMMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/UpdateIAMMember',
        $argument,
        ['\Zitadel\Admin\V1\UpdateIAMMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveIAMMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveIAMMember(\Zitadel\Admin\V1\RemoveIAMMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveIAMMember',
        $argument,
        ['\Zitadel\Admin\V1\RemoveIAMMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListViewsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListViews(\Zitadel\Admin\V1\ListViewsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListViews',
        $argument,
        ['\Zitadel\Admin\V1\ListViewsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListFailedEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListFailedEvents(\Zitadel\Admin\V1\ListFailedEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListFailedEvents',
        $argument,
        ['\Zitadel\Admin\V1\ListFailedEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\RemoveFailedEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveFailedEvent(\Zitadel\Admin\V1\RemoveFailedEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/RemoveFailedEvent',
        $argument,
        ['\Zitadel\Admin\V1\RemoveFailedEventResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Imports data into an instance and creates different objects
     * @param \Zitadel\Admin\V1\ImportDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ImportData(\Zitadel\Admin\V1\ImportDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ImportData',
        $argument,
        ['\Zitadel\Admin\V1\ImportDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ExportDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ExportData(\Zitadel\Admin\V1\ExportDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ExportData',
        $argument,
        ['\Zitadel\Admin\V1\ExportDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListEventTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEventTypes(\Zitadel\Admin\V1\ListEventTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListEventTypes',
        $argument,
        ['\Zitadel\Admin\V1\ListEventTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEvents(\Zitadel\Admin\V1\ListEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListEvents',
        $argument,
        ['\Zitadel\Admin\V1\ListEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListAggregateTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAggregateTypes(\Zitadel\Admin\V1\ListAggregateTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListAggregateTypes',
        $argument,
        ['\Zitadel\Admin\V1\ListAggregateTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Activates the "LoginDefaultOrg" feature by setting the flag to "true"
     * This is irreversible!
     * Once activated, the login UI will use the settings of the default org (and not from the instance) if not organization context is set
     * @param \Zitadel\Admin\V1\ActivateFeatureLoginDefaultOrgRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateFeatureLoginDefaultOrg(\Zitadel\Admin\V1\ActivateFeatureLoginDefaultOrgRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ActivateFeatureLoginDefaultOrg',
        $argument,
        ['\Zitadel\Admin\V1\ActivateFeatureLoginDefaultOrgResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Admin\V1\ListMilestonesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMilestones(\Zitadel\Admin\V1\ListMilestonesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/ListMilestones',
        $argument,
        ['\Zitadel\Admin\V1\ListMilestonesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets restrictions
     * @param \Zitadel\Admin\V1\SetRestrictionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetRestrictions(\Zitadel\Admin\V1\SetRestrictionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/SetRestrictions',
        $argument,
        ['\Zitadel\Admin\V1\SetRestrictionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets restrictions
     * @param \Zitadel\Admin\V1\GetRestrictionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRestrictions(\Zitadel\Admin\V1\GetRestrictionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.admin.v1.AdminService/GetRestrictions',
        $argument,
        ['\Zitadel\Admin\V1\GetRestrictionsResponse', 'decode'],
        $metadata, $options);
    }

}
