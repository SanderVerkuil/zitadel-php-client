<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Feature\V2;

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
     * @param \Zitadel\Feature\V2\SetSystemFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSystemFeatures(\Zitadel\Feature\V2\SetSystemFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/SetSystemFeatures',
        $argument,
        ['\Zitadel\Feature\V2\SetSystemFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\ResetSystemFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetSystemFeatures(\Zitadel\Feature\V2\ResetSystemFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/ResetSystemFeatures',
        $argument,
        ['\Zitadel\Feature\V2\ResetSystemFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\GetSystemFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSystemFeatures(\Zitadel\Feature\V2\GetSystemFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/GetSystemFeatures',
        $argument,
        ['\Zitadel\Feature\V2\GetSystemFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\SetInstanceFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetInstanceFeatures(\Zitadel\Feature\V2\SetInstanceFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/SetInstanceFeatures',
        $argument,
        ['\Zitadel\Feature\V2\SetInstanceFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\ResetInstanceFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetInstanceFeatures(\Zitadel\Feature\V2\ResetInstanceFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/ResetInstanceFeatures',
        $argument,
        ['\Zitadel\Feature\V2\ResetInstanceFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\GetInstanceFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInstanceFeatures(\Zitadel\Feature\V2\GetInstanceFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/GetInstanceFeatures',
        $argument,
        ['\Zitadel\Feature\V2\GetInstanceFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\SetOrganizationFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetOrganizationFeatures(\Zitadel\Feature\V2\SetOrganizationFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/SetOrganizationFeatures',
        $argument,
        ['\Zitadel\Feature\V2\SetOrganizationFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\ResetOrganizationFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetOrganizationFeatures(\Zitadel\Feature\V2\ResetOrganizationFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/ResetOrganizationFeatures',
        $argument,
        ['\Zitadel\Feature\V2\ResetOrganizationFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\GetOrganizationFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrganizationFeatures(\Zitadel\Feature\V2\GetOrganizationFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/GetOrganizationFeatures',
        $argument,
        ['\Zitadel\Feature\V2\GetOrganizationFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\SetUserFeatureRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetUserFeatures(\Zitadel\Feature\V2\SetUserFeatureRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/SetUserFeatures',
        $argument,
        ['\Zitadel\Feature\V2\SetUserFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\ResetUserFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetUserFeatures(\Zitadel\Feature\V2\ResetUserFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/ResetUserFeatures',
        $argument,
        ['\Zitadel\Feature\V2\ResetUserFeaturesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Feature\V2\GetUserFeaturesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserFeatures(\Zitadel\Feature\V2\GetUserFeaturesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.feature.v2.FeatureService/GetUserFeatures',
        $argument,
        ['\Zitadel\Feature\V2\GetUserFeaturesResponse', 'decode'],
        $metadata, $options);
    }

}
