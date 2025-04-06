<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Oidc\V2beta;

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
     * @param \Zitadel\Oidc\V2beta\GetAuthRequestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAuthRequest(\Zitadel\Oidc\V2beta\GetAuthRequestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.oidc.v2beta.OIDCService/GetAuthRequest',
        $argument,
        ['\Zitadel\Oidc\V2beta\GetAuthRequestResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Oidc\V2beta\CreateCallbackRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCallback(\Zitadel\Oidc\V2beta\CreateCallbackRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.oidc.v2beta.OIDCService/CreateCallback',
        $argument,
        ['\Zitadel\Oidc\V2beta\CreateCallbackResponse', 'decode'],
        $metadata, $options);
    }

}
