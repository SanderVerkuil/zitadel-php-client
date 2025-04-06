<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Idp\V2;

/**
 */
class IdentityProviderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Get identity provider (IdP) by ID
     *
     * Returns an identity provider (social/enterprise login) by its ID, which can be of the type Google, AzureAD, etc.
     * @param \Zitadel\Idp\V2\GetIDPByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIDPByID(\Zitadel\Idp\V2\GetIDPByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.idp.v2.IdentityProviderService/GetIDPByID',
        $argument,
        ['\Zitadel\Idp\V2\GetIDPByIDResponse', 'decode'],
        $metadata, $options);
    }

}
