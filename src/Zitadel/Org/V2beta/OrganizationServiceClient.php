<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Org\V2beta;

/**
 */
class OrganizationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a new organization and grant the user(s) permission to manage it
     * @param \Zitadel\Org\V2beta\AddOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrganization(\Zitadel\Org\V2beta\AddOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.org.v2beta.OrganizationService/AddOrganization',
        $argument,
        ['\Zitadel\Org\V2beta\AddOrganizationResponse', 'decode'],
        $metadata, $options);
    }

}
