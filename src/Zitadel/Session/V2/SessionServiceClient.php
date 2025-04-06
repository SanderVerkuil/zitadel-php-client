<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Session\V2;

/**
 */
class SessionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Search sessions
     * @param \Zitadel\Session\V2\ListSessionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSessions(\Zitadel\Session\V2\ListSessionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2.SessionService/ListSessions',
        $argument,
        ['\Zitadel\Session\V2\ListSessionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetSession a session
     * @param \Zitadel\Session\V2\GetSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSession(\Zitadel\Session\V2\GetSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2.SessionService/GetSession',
        $argument,
        ['\Zitadel\Session\V2\GetSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new session
     * @param \Zitadel\Session\V2\CreateSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateSession(\Zitadel\Session\V2\CreateSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2.SessionService/CreateSession',
        $argument,
        ['\Zitadel\Session\V2\CreateSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a session
     * @param \Zitadel\Session\V2\SetSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSession(\Zitadel\Session\V2\SetSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2.SessionService/SetSession',
        $argument,
        ['\Zitadel\Session\V2\SetSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Terminate a session
     * @param \Zitadel\Session\V2\DeleteSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteSession(\Zitadel\Session\V2\DeleteSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2.SessionService/DeleteSession',
        $argument,
        ['\Zitadel\Session\V2\DeleteSessionResponse', 'decode'],
        $metadata, $options);
    }

}
