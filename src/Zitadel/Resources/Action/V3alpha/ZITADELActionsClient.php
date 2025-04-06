<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Resources\Action\V3alpha;

/**
 */
class ZITADELActionsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Create a target
     *
     * Create a new target, which can be used in executions.
     * @param \Zitadel\Resources\Action\V3alpha\CreateTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateTarget(\Zitadel\Resources\Action\V3alpha\CreateTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/CreateTarget',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\CreateTargetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch a target
     *
     * Patch an existing target.
     * @param \Zitadel\Resources\Action\V3alpha\PatchTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchTarget(\Zitadel\Resources\Action\V3alpha\PatchTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/PatchTarget',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\PatchTargetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a target
     *
     * Delete an existing target. This will remove it from any configured execution as well.
     * @param \Zitadel\Resources\Action\V3alpha\DeleteTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTarget(\Zitadel\Resources\Action\V3alpha\DeleteTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/DeleteTarget',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\DeleteTargetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Target by ID
     *
     * Returns the target identified by the requested ID.
     * @param \Zitadel\Resources\Action\V3alpha\GetTargetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTarget(\Zitadel\Resources\Action\V3alpha\GetTargetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/GetTarget',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\GetTargetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search targets
     *
     * Search all matching targets. By default all targets of the instance are returned.
     * Make sure to include a limit and sorting for pagination.
     * @param \Zitadel\Resources\Action\V3alpha\SearchTargetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SearchTargets(\Zitadel\Resources\Action\V3alpha\SearchTargetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/SearchTargets',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\SearchTargetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets an execution to call a target or include the targets of another execution.
     *
     * Setting an empty list of targets will remove all targets from the execution, making it a noop.
     * @param \Zitadel\Resources\Action\V3alpha\SetExecutionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetExecution(\Zitadel\Resources\Action\V3alpha\SetExecutionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/SetExecution',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\SetExecutionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search executions
     *
     * Search all matching executions. By default all executions of the instance are returned that have at least one execution target.
     * Make sure to include a limit and sorting for pagination.
     * @param \Zitadel\Resources\Action\V3alpha\SearchExecutionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SearchExecutions(\Zitadel\Resources\Action\V3alpha\SearchExecutionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/SearchExecutions',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\SearchExecutionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all available functions
     *
     * List all available functions which can be used as condition for executions.
     * @param \Zitadel\Resources\Action\V3alpha\ListExecutionFunctionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListExecutionFunctions(\Zitadel\Resources\Action\V3alpha\ListExecutionFunctionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/ListExecutionFunctions',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\ListExecutionFunctionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all available methods
     *
     * List all available methods which can be used as condition for executions.
     * @param \Zitadel\Resources\Action\V3alpha\ListExecutionMethodsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListExecutionMethods(\Zitadel\Resources\Action\V3alpha\ListExecutionMethodsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/ListExecutionMethods',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\ListExecutionMethodsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all available service
     *
     * List all available services which can be used as condition for executions.
     * @param \Zitadel\Resources\Action\V3alpha\ListExecutionServicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListExecutionServices(\Zitadel\Resources\Action\V3alpha\ListExecutionServicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.action.v3alpha.ZITADELActions/ListExecutionServices',
        $argument,
        ['\Zitadel\Resources\Action\V3alpha\ListExecutionServicesResponse', 'decode'],
        $metadata, $options);
    }

}
