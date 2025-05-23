<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/saml/v2/saml_service.proto

namespace Zitadel\Saml\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.saml.v2.CreateResponseResponse</code>
 */
class CreateResponseResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     */
    protected $details = null;
    /**
     * URL including the Assertion Consumer Service where the user should be redirected or has to call per POST, depending on the binding. Contains details for the application to obtain the response on success, or error details on failure. Note that this field must be treated as credentials, as the contained SAMLResponse or code can be used on behalve of the user.
     *
     * Generated from protobuf field <code>string url = 2 [json_name = "url", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     */
    protected $url = '';
    protected $binding;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Object\V2\Details $details
     *     @type string $url
     *           URL including the Assertion Consumer Service where the user should be redirected or has to call per POST, depending on the binding. Contains details for the application to obtain the response on success, or error details on failure. Note that this field must be treated as credentials, as the contained SAMLResponse or code can be used on behalve of the user.
     *     @type \Zitadel\Saml\V2\RedirectResponse $redirect
     *           Set if the binding is Redirect-Binding, where the user can directly be redirected to the application, using a \"302 FOUND\" status to the URL.
     *     @type \Zitadel\Saml\V2\PostResponse $post
     *           Set if the binding is POST-Binding, where the application expects to be called per HTTP POST with the SAMLResponse and RelayState in the form body.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Saml\V2\SamlService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @return \Zitadel\Object\V2\Details|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

    /**
     * Generated from protobuf field <code>.zitadel.object.v2.Details details = 1 [json_name = "details"];</code>
     * @param \Zitadel\Object\V2\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Object\V2\Details::class);
        $this->details = $var;

        return $this;
    }

    /**
     * URL including the Assertion Consumer Service where the user should be redirected or has to call per POST, depending on the binding. Contains details for the application to obtain the response on success, or error details on failure. Note that this field must be treated as credentials, as the contained SAMLResponse or code can be used on behalve of the user.
     *
     * Generated from protobuf field <code>string url = 2 [json_name = "url", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * URL including the Assertion Consumer Service where the user should be redirected or has to call per POST, depending on the binding. Contains details for the application to obtain the response on success, or error details on failure. Note that this field must be treated as credentials, as the contained SAMLResponse or code can be used on behalve of the user.
     *
     * Generated from protobuf field <code>string url = 2 [json_name = "url", (.grpc.gateway.protoc_gen_openapiv2.options.openapiv2_field) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Set if the binding is Redirect-Binding, where the user can directly be redirected to the application, using a \"302 FOUND\" status to the URL.
     *
     * Generated from protobuf field <code>.zitadel.saml.v2.RedirectResponse redirect = 3 [json_name = "redirect"];</code>
     * @return \Zitadel\Saml\V2\RedirectResponse|null
     */
    public function getRedirect()
    {
        return $this->readOneof(3);
    }

    public function hasRedirect()
    {
        return $this->hasOneof(3);
    }

    /**
     * Set if the binding is Redirect-Binding, where the user can directly be redirected to the application, using a \"302 FOUND\" status to the URL.
     *
     * Generated from protobuf field <code>.zitadel.saml.v2.RedirectResponse redirect = 3 [json_name = "redirect"];</code>
     * @param \Zitadel\Saml\V2\RedirectResponse $var
     * @return $this
     */
    public function setRedirect($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Saml\V2\RedirectResponse::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Set if the binding is POST-Binding, where the application expects to be called per HTTP POST with the SAMLResponse and RelayState in the form body.
     *
     * Generated from protobuf field <code>.zitadel.saml.v2.PostResponse post = 4 [json_name = "post"];</code>
     * @return \Zitadel\Saml\V2\PostResponse|null
     */
    public function getPost()
    {
        return $this->readOneof(4);
    }

    public function hasPost()
    {
        return $this->hasOneof(4);
    }

    /**
     * Set if the binding is POST-Binding, where the application expects to be called per HTTP POST with the SAMLResponse and RelayState in the form body.
     *
     * Generated from protobuf field <code>.zitadel.saml.v2.PostResponse post = 4 [json_name = "post"];</code>
     * @param \Zitadel\Saml\V2\PostResponse $var
     * @return $this
     */
    public function setPost($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Saml\V2\PostResponse::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getBinding()
    {
        return $this->whichOneof("binding");
    }

}

