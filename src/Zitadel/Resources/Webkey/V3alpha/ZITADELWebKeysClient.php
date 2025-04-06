<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Resources\Webkey\V3alpha;

/**
 */
class ZITADELWebKeysClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Zitadel\Resources\Webkey\V3alpha\CreateWebKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateWebKey(\Zitadel\Resources\Webkey\V3alpha\CreateWebKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.webkey.v3alpha.ZITADELWebKeys/CreateWebKey',
        $argument,
        ['\Zitadel\Resources\Webkey\V3alpha\CreateWebKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Resources\Webkey\V3alpha\ActivateWebKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateWebKey(\Zitadel\Resources\Webkey\V3alpha\ActivateWebKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.webkey.v3alpha.ZITADELWebKeys/ActivateWebKey',
        $argument,
        ['\Zitadel\Resources\Webkey\V3alpha\ActivateWebKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Resources\Webkey\V3alpha\DeleteWebKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteWebKey(\Zitadel\Resources\Webkey\V3alpha\DeleteWebKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.webkey.v3alpha.ZITADELWebKeys/DeleteWebKey',
        $argument,
        ['\Zitadel\Resources\Webkey\V3alpha\DeleteWebKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Zitadel\Resources\Webkey\V3alpha\ListWebKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListWebKeys(\Zitadel\Resources\Webkey\V3alpha\ListWebKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.webkey.v3alpha.ZITADELWebKeys/ListWebKeys',
        $argument,
        ['\Zitadel\Resources\Webkey\V3alpha\ListWebKeysResponse', 'decode'],
        $metadata, $options);
    }

}
