<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Oidc\V2;

/**
 */
class OIDCServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Oidc\V2\GetAuthRequestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAuthRequest(\Zitadel\Oidc\V2\GetAuthRequestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.oidc.v2.OIDCService/GetAuthRequest',
        $argument,
        ['\Zitadel\Oidc\V2\GetAuthRequestResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Oidc\V2\CreateCallbackRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCallback(\Zitadel\Oidc\V2\CreateCallbackRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.oidc.v2.OIDCService/CreateCallback',
        $argument,
        ['\Zitadel\Oidc\V2\CreateCallbackResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get device authorization request
     *
     * Get the device authorization based on the provided "user code".
     * This will return the device authorization request, which contains the device authorization id
     * that is required to authorize the request once the user signed in or to deny it.
     * @param \Zitadel\Oidc\V2\GetDeviceAuthorizationRequestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDeviceAuthorizationRequest(\Zitadel\Oidc\V2\GetDeviceAuthorizationRequestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.oidc.v2.OIDCService/GetDeviceAuthorizationRequest',
        $argument,
        ['\Zitadel\Oidc\V2\GetDeviceAuthorizationRequestResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Authorize or deny device authorization
     *
     * Authorize or deny the device authorization request based on the provided device authorization id.
     * @param \Zitadel\Oidc\V2\AuthorizeOrDenyDeviceAuthorizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AuthorizeOrDenyDeviceAuthorization(\Zitadel\Oidc\V2\AuthorizeOrDenyDeviceAuthorizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.oidc.v2.OIDCService/AuthorizeOrDenyDeviceAuthorization',
        $argument,
        ['\Zitadel\Oidc\V2\AuthorizeOrDenyDeviceAuthorizationResponse', 'decode'],
        $metadata, $options);
    }

}
