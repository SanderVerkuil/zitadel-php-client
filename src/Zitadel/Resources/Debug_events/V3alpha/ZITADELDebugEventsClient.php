<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Resources\Debug_events\V3alpha;

/**
 */
class ZITADELDebugEventsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Resources\Debug_events\V3alpha\CreateDebugEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateDebugEvents(\Zitadel\Resources\Debug_events\V3alpha\CreateDebugEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.debug_events.v3alpha.ZITADELDebugEvents/CreateDebugEvents',
        $argument,
        ['\Zitadel\Resources\Debug_events\V3alpha\CreateDebugEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Resources\Debug_events\V3alpha\GetDebugEventsStateByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDebugEventsStateById(\Zitadel\Resources\Debug_events\V3alpha\GetDebugEventsStateByIdRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.debug_events.v3alpha.ZITADELDebugEvents/GetDebugEventsStateById',
        $argument,
        ['\Zitadel\Resources\Debug_events\V3alpha\GetDebugEventsStateByIdResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Resources\Debug_events\V3alpha\ListDebugEventsStatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDebugEventsStates(\Zitadel\Resources\Debug_events\V3alpha\ListDebugEventsStatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.debug_events.v3alpha.ZITADELDebugEvents/ListDebugEventsStates',
        $argument,
        ['\Zitadel\Resources\Debug_events\V3alpha\ListDebugEventsStatesResponse', 'decode'],
        $metadata, $options);
    }

}
