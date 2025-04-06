<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Saml\V2;

/**
 */
class SAMLServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Saml\V2\GetSAMLRequestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSAMLRequest(\Zitadel\Saml\V2\GetSAMLRequestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.saml.v2.SAMLService/GetSAMLRequest',
        $argument,
        ['\Zitadel\Saml\V2\GetSAMLRequestResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Saml\V2\CreateResponseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateResponse(\Zitadel\Saml\V2\CreateResponseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.saml.v2.SAMLService/CreateResponse',
        $argument,
        ['\Zitadel\Saml\V2\CreateResponseResponse', 'decode'],
        $metadata, $options);
    }

}
