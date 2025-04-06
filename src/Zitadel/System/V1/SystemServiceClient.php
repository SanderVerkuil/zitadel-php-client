<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\System\V1;

/**
 */
class SystemServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Indicates if ZITADEL is running.
     * It respondes as soon as ZITADEL started
     * @param \Zitadel\System\V1\HealthzRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Healthz(\Zitadel\System\V1\HealthzRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/Healthz',
        $argument,
        ['\Zitadel\System\V1\HealthzResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a list of ZITADEL instances
     * @param \Zitadel\System\V1\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstances(\Zitadel\System\V1\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ListInstances',
        $argument,
        ['\Zitadel\System\V1\ListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the detail of an instance
     * @param \Zitadel\System\V1\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInstance(\Zitadel\System\V1\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/GetInstance',
        $argument,
        ['\Zitadel\System\V1\GetInstanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Use CreateInstance instead
     * Creates a new instance with all needed setup data
     * This might take some time
     * @param \Zitadel\System\V1\AddInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddInstance(\Zitadel\System\V1\AddInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/AddInstance',
        $argument,
        ['\Zitadel\System\V1\AddInstanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates name of an existing instance
     * @param \Zitadel\System\V1\UpdateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateInstance(\Zitadel\System\V1\UpdateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/UpdateInstance',
        $argument,
        ['\Zitadel\System\V1\UpdateInstanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new instance with all needed setup data
     * This might take some time
     * @param \Zitadel\System\V1\CreateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateInstance(\Zitadel\System\V1\CreateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/CreateInstance',
        $argument,
        ['\Zitadel\System\V1\CreateInstanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Removes an instance
     * This might take some time
     * @param \Zitadel\System\V1\RemoveInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveInstance(\Zitadel\System\V1\RemoveInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/RemoveInstance',
        $argument,
        ['\Zitadel\System\V1\RemoveInstanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns all instance members matching the request
     * all queries need to match (ANDed)
     * Deprecated: Use the Admin APIs ListIAMMembers instead
     * @param \Zitadel\System\V1\ListIAMMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIAMMembers(\Zitadel\System\V1\ListIAMMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ListIAMMembers',
        $argument,
        ['\Zitadel\System\V1\ListIAMMembersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Checks if a domain exists
     * @param \Zitadel\System\V1\ExistsDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ExistsDomain(\Zitadel\System\V1\ExistsDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ExistsDomain',
        $argument,
        ['\Zitadel\System\V1\ExistsDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the custom domains of an instance
     * Checks if a domain exists
     * Deprecated: Use the Admin APIs ListInstanceDomains on the admin API instead
     * @param \Zitadel\System\V1\ListDomainsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDomains(\Zitadel\System\V1\ListDomainsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ListDomains',
        $argument,
        ['\Zitadel\System\V1\ListDomainsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds a domain to an instance
     * @param \Zitadel\System\V1\AddDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddDomain(\Zitadel\System\V1\AddDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/AddDomain',
        $argument,
        ['\Zitadel\System\V1\AddDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Removes the domain of an instance
     * @param \Zitadel\System\V1\RemoveDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveDomain(\Zitadel\System\V1\RemoveDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/RemoveDomain',
        $argument,
        ['\Zitadel\System\V1\RemoveDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the primary domain of an instance
     * @param \Zitadel\System\V1\SetPrimaryDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPrimaryDomain(\Zitadel\System\V1\SetPrimaryDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/SetPrimaryDomain',
        $argument,
        ['\Zitadel\System\V1\SetPrimaryDomainResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns all stored read models of ZITADEL
     * views are used for search optimisation and optimise request latencies
     * they represent the delta of the event happend on the objects
     * @param \Zitadel\System\V1\ListViewsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListViews(\Zitadel\System\V1\ListViewsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ListViews',
        $argument,
        ['\Zitadel\System\V1\ListViewsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Truncates the delta of the change stream
     * be carefull with this function because ZITADEL has to
     * recompute the deltas after they got cleared.
     * Search requests will return wrong results until all deltas are recomputed
     * @param \Zitadel\System\V1\ClearViewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClearView(\Zitadel\System\V1\ClearViewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ClearView',
        $argument,
        ['\Zitadel\System\V1\ClearViewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns event descriptions which cannot be processed.
     * It's possible that some events need some retries.
     * For example if the SMTP-API wasn't able to send an email at the first time
     * @param \Zitadel\System\V1\ListFailedEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListFailedEvents(\Zitadel\System\V1\ListFailedEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ListFailedEvents',
        $argument,
        ['\Zitadel\System\V1\ListFailedEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the event from failed events view.
     * the event is not removed from the change stream
     * This call is usefull if the system was able to process the event later.
     * e.g. if the second try of sending an email was successful. the first try produced a
     * failed event. You can find out if it worked on the `failure_count`
     * @param \Zitadel\System\V1\RemoveFailedEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveFailedEvent(\Zitadel\System\V1\RemoveFailedEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/RemoveFailedEvent',
        $argument,
        ['\Zitadel\System\V1\RemoveFailedEventResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new quota
     * Returns an error if the quota already exists for the specified unit
     * Deprecated: use SetQuota instead
     * @param \Zitadel\System\V1\AddQuotaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddQuota(\Zitadel\System\V1\AddQuotaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/AddQuota',
        $argument,
        ['\Zitadel\System\V1\AddQuotaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets quota configuration properties
     * Creates a new quota if it doesn't exist for the specified unit
     * @param \Zitadel\System\V1\SetQuotaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetQuota(\Zitadel\System\V1\SetQuotaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/SetQuota',
        $argument,
        ['\Zitadel\System\V1\SetQuotaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Removes a quota
     * @param \Zitadel\System\V1\RemoveQuotaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveQuota(\Zitadel\System\V1\RemoveQuotaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/RemoveQuota',
        $argument,
        ['\Zitadel\System\V1\RemoveQuotaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Set a feature flag on an instance
     * @param \Zitadel\System\V1\SetInstanceFeatureRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetInstanceFeature(\Zitadel\System\V1\SetInstanceFeatureRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/SetInstanceFeature',
        $argument,
        ['\Zitadel\System\V1\SetInstanceFeatureResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets instance level limits
     * @param \Zitadel\System\V1\SetLimitsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetLimits(\Zitadel\System\V1\SetLimitsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/SetLimits',
        $argument,
        ['\Zitadel\System\V1\SetLimitsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets many instance level limits
     * @param \Zitadel\System\V1\BulkSetLimitsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BulkSetLimits(\Zitadel\System\V1\BulkSetLimitsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/BulkSetLimits',
        $argument,
        ['\Zitadel\System\V1\BulkSetLimitsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Resets instance level limits
     * @param \Zitadel\System\V1\ResetLimitsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetLimits(\Zitadel\System\V1\ResetLimitsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.system.v1.SystemService/ResetLimits',
        $argument,
        ['\Zitadel\System\V1\ResetLimitsResponse', 'decode'],
        $metadata, $options);
    }

}
