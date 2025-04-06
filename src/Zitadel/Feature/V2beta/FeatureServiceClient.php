<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Feature\V2beta;

/**
 * FeatureService is intended to manage features for ZITADEL.
 *
 * Feature settings that are available on multiple "levels", such as instance and organization.
 * The higher level (instance) acts as a default for the lower level (organization).
 * When a feature is set on multiple levels, the lower level takes precedence.
 *
 * Features can be experimental where ZITADEL will assume a sane default, such as disabled.
 * When over time confidence in such a feature grows, ZITADEL can default to enabling the feature.
 * As a final step we might choose to always enable a feature and remove the setting from this API,
 * reserving the proto field number. Such removal is not considered a breaking change.
 * Setting a removed field will effectively result in a no-op.
 */
class FeatureServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Feature\V2beta\SetSystemFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSystemFeatures(\Zitadel\Feature\V2beta\SetSystemFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/SetSystemFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\SetSystemFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\ResetSystemFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetSystemFeatures(\Zitadel\Feature\V2beta\ResetSystemFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/ResetSystemFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\ResetSystemFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\GetSystemFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSystemFeatures(\Zitadel\Feature\V2beta\GetSystemFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/GetSystemFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\GetSystemFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\SetInstanceFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetInstanceFeatures(\Zitadel\Feature\V2beta\SetInstanceFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/SetInstanceFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\SetInstanceFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\ResetInstanceFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetInstanceFeatures(\Zitadel\Feature\V2beta\ResetInstanceFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/ResetInstanceFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\ResetInstanceFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\GetInstanceFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInstanceFeatures(\Zitadel\Feature\V2beta\GetInstanceFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/GetInstanceFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\GetInstanceFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\SetOrganizationFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetOrganizationFeatures(\Zitadel\Feature\V2beta\SetOrganizationFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/SetOrganizationFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\SetOrganizationFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\ResetOrganizationFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetOrganizationFeatures(\Zitadel\Feature\V2beta\ResetOrganizationFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/ResetOrganizationFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\ResetOrganizationFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\GetOrganizationFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrganizationFeatures(\Zitadel\Feature\V2beta\GetOrganizationFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/GetOrganizationFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\GetOrganizationFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\SetUserFeatureRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUserFeatures(\Zitadel\Feature\V2beta\SetUserFeatureRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/SetUserFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\SetUserFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\ResetUserFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetUserFeatures(\Zitadel\Feature\V2beta\ResetUserFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/ResetUserFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\ResetUserFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2beta\GetUserFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserFeatures(\Zitadel\Feature\V2beta\GetUserFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2beta.FeatureService/GetUserFeatures',
        $argument,
        ['\Zitadel\Feature\V2beta\GetUserFeaturesResponse', 'decode'],
        $metadata, $options);
    }

}
