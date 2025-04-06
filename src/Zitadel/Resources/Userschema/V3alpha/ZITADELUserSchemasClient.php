<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zitadel\Resources\Userschema\V3alpha;

/**
 */
class ZITADELUserSchemasClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Search user schemas
     *
     * Search all matching user schemas. By default, we will return all user schema of your instance. Make sure to include a limit and sorting for pagination.
     * @param \Zitadel\Resources\Userschema\V3alpha\SearchUserSchemasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SearchUserSchemas(\Zitadel\Resources\Userschema\V3alpha\SearchUserSchemasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.userschema.v3alpha.ZITADELUserSchemas/SearchUserSchemas',
        $argument,
        ['\Zitadel\Resources\Userschema\V3alpha\SearchUserSchemasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * User schema by ID
     *
     * Returns the user schema identified by the requested ID.
     * @param \Zitadel\Resources\Userschema\V3alpha\GetUserSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserSchema(\Zitadel\Resources\Userschema\V3alpha\GetUserSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.userschema.v3alpha.ZITADELUserSchemas/GetUserSchema',
        $argument,
        ['\Zitadel\Resources\Userschema\V3alpha\GetUserSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a user schema
     *
     * Create the first revision of a new user schema. The schema can then be used on users to store and validate their data.
     * @param \Zitadel\Resources\Userschema\V3alpha\CreateUserSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUserSchema(\Zitadel\Resources\Userschema\V3alpha\CreateUserSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.userschema.v3alpha.ZITADELUserSchemas/CreateUserSchema',
        $argument,
        ['\Zitadel\Resources\Userschema\V3alpha\CreateUserSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch a user schema
     *
     * Patch an existing user schema to a new revision. Users based on the current revision will not be affected until they are updated.
     * @param \Zitadel\Resources\Userschema\V3alpha\PatchUserSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchUserSchema(\Zitadel\Resources\Userschema\V3alpha\PatchUserSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.userschema.v3alpha.ZITADELUserSchemas/PatchUserSchema',
        $argument,
        ['\Zitadel\Resources\Userschema\V3alpha\PatchUserSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deactivate a user schema
     *
     * Deactivate an existing user schema and change it into a read-only state. Users based on this schema cannot be updated anymore, but are still able to authenticate.
     * @param \Zitadel\Resources\Userschema\V3alpha\DeactivateUserSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeactivateUserSchema(\Zitadel\Resources\Userschema\V3alpha\DeactivateUserSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.userschema.v3alpha.ZITADELUserSchemas/DeactivateUserSchema',
        $argument,
        ['\Zitadel\Resources\Userschema\V3alpha\DeactivateUserSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Reactivate a user schema
     *
     * Reactivate an previously deactivated user schema and change it into an active state again.
     * @param \Zitadel\Resources\Userschema\V3alpha\ReactivateUserSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactivateUserSchema(\Zitadel\Resources\Userschema\V3alpha\ReactivateUserSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.userschema.v3alpha.ZITADELUserSchemas/ReactivateUserSchema',
        $argument,
        ['\Zitadel\Resources\Userschema\V3alpha\ReactivateUserSchemaResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a user schema
     *
     * Delete an existing user schema. This operation is only allowed if there are no associated users to it.
     * @param \Zitadel\Resources\Userschema\V3alpha\DeleteUserSchemaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUserSchema(\Zitadel\Resources\Userschema\V3alpha\DeleteUserSchemaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zitadel.resources.userschema.v3alpha.ZITADELUserSchemas/DeleteUserSchema',
        $argument,
        ['\Zitadel\Resources\Userschema\V3alpha\DeleteUserSchemaResponse', 'decode'],
        $metadata, $options);
    }

}
