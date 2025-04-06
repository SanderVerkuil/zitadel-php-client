<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Session\V2beta;

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
     * @param \Zitadel\Session\V2beta\ListSessionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSessions(\Zitadel\Session\V2beta\ListSessionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2beta.SessionService/ListSessions',
        $argument,
        ['\Zitadel\Session\V2beta\ListSessionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetSession a session
     * @param \Zitadel\Session\V2beta\GetSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSession(\Zitadel\Session\V2beta\GetSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2beta.SessionService/GetSession',
        $argument,
        ['\Zitadel\Session\V2beta\GetSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new session
     * @param \Zitadel\Session\V2beta\CreateSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateSession(\Zitadel\Session\V2beta\CreateSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2beta.SessionService/CreateSession',
        $argument,
        ['\Zitadel\Session\V2beta\CreateSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a session
     * @param \Zitadel\Session\V2beta\SetSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSession(\Zitadel\Session\V2beta\SetSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2beta.SessionService/SetSession',
        $argument,
        ['\Zitadel\Session\V2beta\SetSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Terminate a session
     * @param \Zitadel\Session\V2beta\DeleteSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteSession(\Zitadel\Session\V2beta\DeleteSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.session.v2beta.SessionService/DeleteSession',
        $argument,
        ['\Zitadel\Session\V2beta\DeleteSessionResponse', 'decode'],
        $metadata, $options);
    }

}
