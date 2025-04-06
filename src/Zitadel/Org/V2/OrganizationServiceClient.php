<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Org\V2;

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
     * Create an Organization
     *
     * Create a new organization with an administrative user. If no specific roles are sent for the users, they will be granted the role ORG_OWNER.
     * @param \Zitadel\Org\V2\AddOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrganization(\Zitadel\Org\V2\AddOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.org.v2.OrganizationService/AddOrganization',
        $argument,
        ['\Zitadel\Org\V2\AddOrganizationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search Organizations
     *
     * Search for Organizations. By default, we will return all organization of the instance. Make sure to include a limit and sorting for pagination..
     * @param \Zitadel\Org\V2\ListOrganizationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrganizations(\Zitadel\Org\V2\ListOrganizationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.org.v2.OrganizationService/ListOrganizations',
        $argument,
        ['\Zitadel\Org\V2\ListOrganizationsResponse', 'decode'],
        $metadata, $options);
    }

}
