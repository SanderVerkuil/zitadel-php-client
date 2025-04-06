<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: zitadel/idp/v2/idp.proto

namespace Zitadel\Idp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>zitadel.idp.v2.IDPConfig</code>
 */
class IDPConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.Options options = 1 [json_name = "options"];</code>
     */
    protected $options = null;
    protected $config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zitadel\Idp\V2\Options $options
     *     @type \Zitadel\Idp\V2\LDAPConfig $ldap
     *     @type \Zitadel\Idp\V2\GoogleConfig $google
     *     @type \Zitadel\Idp\V2\OAuthConfig $oauth
     *     @type \Zitadel\Idp\V2\GenericOIDCConfig $oidc
     *     @type \Zitadel\Idp\V2\JWTConfig $jwt
     *     @type \Zitadel\Idp\V2\GitHubConfig $github
     *     @type \Zitadel\Idp\V2\GitHubEnterpriseServerConfig $github_es
     *     @type \Zitadel\Idp\V2\GitLabConfig $gitlab
     *     @type \Zitadel\Idp\V2\GitLabSelfHostedConfig $gitlab_self_hosted
     *     @type \Zitadel\Idp\V2\AzureADConfig $azure_ad
     *     @type \Zitadel\Idp\V2\AppleConfig $apple
     *     @type \Zitadel\Idp\V2\SAMLConfig $saml
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Zitadel\Idp\V2\Idp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.Options options = 1 [json_name = "options"];</code>
     * @return \Zitadel\Idp\V2\Options|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.Options options = 1 [json_name = "options"];</code>
     * @param \Zitadel\Idp\V2\Options $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\Options::class);
        $this->options = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.LDAPConfig ldap = 2 [json_name = "ldap"];</code>
     * @return \Zitadel\Idp\V2\LDAPConfig|null
     */
    public function getLdap()
    {
        return $this->readOneof(2);
    }

    public function hasLdap()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.LDAPConfig ldap = 2 [json_name = "ldap"];</code>
     * @param \Zitadel\Idp\V2\LDAPConfig $var
     * @return $this
     */
    public function setLdap($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\LDAPConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GoogleConfig google = 3 [json_name = "google"];</code>
     * @return \Zitadel\Idp\V2\GoogleConfig|null
     */
    public function getGoogle()
    {
        return $this->readOneof(3);
    }

    public function hasGoogle()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GoogleConfig google = 3 [json_name = "google"];</code>
     * @param \Zitadel\Idp\V2\GoogleConfig $var
     * @return $this
     */
    public function setGoogle($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\GoogleConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.OAuthConfig oauth = 4 [json_name = "oauth"];</code>
     * @return \Zitadel\Idp\V2\OAuthConfig|null
     */
    public function getOauth()
    {
        return $this->readOneof(4);
    }

    public function hasOauth()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.OAuthConfig oauth = 4 [json_name = "oauth"];</code>
     * @param \Zitadel\Idp\V2\OAuthConfig $var
     * @return $this
     */
    public function setOauth($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\OAuthConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GenericOIDCConfig oidc = 5 [json_name = "oidc"];</code>
     * @return \Zitadel\Idp\V2\GenericOIDCConfig|null
     */
    public function getOidc()
    {
        return $this->readOneof(5);
    }

    public function hasOidc()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GenericOIDCConfig oidc = 5 [json_name = "oidc"];</code>
     * @param \Zitadel\Idp\V2\GenericOIDCConfig $var
     * @return $this
     */
    public function setOidc($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\GenericOIDCConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.JWTConfig jwt = 6 [json_name = "jwt"];</code>
     * @return \Zitadel\Idp\V2\JWTConfig|null
     */
    public function getJwt()
    {
        return $this->readOneof(6);
    }

    public function hasJwt()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.JWTConfig jwt = 6 [json_name = "jwt"];</code>
     * @param \Zitadel\Idp\V2\JWTConfig $var
     * @return $this
     */
    public function setJwt($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\JWTConfig::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitHubConfig github = 7 [json_name = "github"];</code>
     * @return \Zitadel\Idp\V2\GitHubConfig|null
     */
    public function getGithub()
    {
        return $this->readOneof(7);
    }

    public function hasGithub()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitHubConfig github = 7 [json_name = "github"];</code>
     * @param \Zitadel\Idp\V2\GitHubConfig $var
     * @return $this
     */
    public function setGithub($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\GitHubConfig::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitHubEnterpriseServerConfig github_es = 8 [json_name = "githubEs"];</code>
     * @return \Zitadel\Idp\V2\GitHubEnterpriseServerConfig|null
     */
    public function getGithubEs()
    {
        return $this->readOneof(8);
    }

    public function hasGithubEs()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitHubEnterpriseServerConfig github_es = 8 [json_name = "githubEs"];</code>
     * @param \Zitadel\Idp\V2\GitHubEnterpriseServerConfig $var
     * @return $this
     */
    public function setGithubEs($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\GitHubEnterpriseServerConfig::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitLabConfig gitlab = 9 [json_name = "gitlab"];</code>
     * @return \Zitadel\Idp\V2\GitLabConfig|null
     */
    public function getGitlab()
    {
        return $this->readOneof(9);
    }

    public function hasGitlab()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitLabConfig gitlab = 9 [json_name = "gitlab"];</code>
     * @param \Zitadel\Idp\V2\GitLabConfig $var
     * @return $this
     */
    public function setGitlab($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\GitLabConfig::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitLabSelfHostedConfig gitlab_self_hosted = 10 [json_name = "gitlabSelfHosted"];</code>
     * @return \Zitadel\Idp\V2\GitLabSelfHostedConfig|null
     */
    public function getGitlabSelfHosted()
    {
        return $this->readOneof(10);
    }

    public function hasGitlabSelfHosted()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.GitLabSelfHostedConfig gitlab_self_hosted = 10 [json_name = "gitlabSelfHosted"];</code>
     * @param \Zitadel\Idp\V2\GitLabSelfHostedConfig $var
     * @return $this
     */
    public function setGitlabSelfHosted($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\GitLabSelfHostedConfig::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.AzureADConfig azure_ad = 11 [json_name = "azureAd"];</code>
     * @return \Zitadel\Idp\V2\AzureADConfig|null
     */
    public function getAzureAd()
    {
        return $this->readOneof(11);
    }

    public function hasAzureAd()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.AzureADConfig azure_ad = 11 [json_name = "azureAd"];</code>
     * @param \Zitadel\Idp\V2\AzureADConfig $var
     * @return $this
     */
    public function setAzureAd($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\AzureADConfig::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.AppleConfig apple = 12 [json_name = "apple"];</code>
     * @return \Zitadel\Idp\V2\AppleConfig|null
     */
    public function getApple()
    {
        return $this->readOneof(12);
    }

    public function hasApple()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.AppleConfig apple = 12 [json_name = "apple"];</code>
     * @param \Zitadel\Idp\V2\AppleConfig $var
     * @return $this
     */
    public function setApple($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\AppleConfig::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.SAMLConfig saml = 13 [json_name = "saml"];</code>
     * @return \Zitadel\Idp\V2\SAMLConfig|null
     */
    public function getSaml()
    {
        return $this->readOneof(13);
    }

    public function hasSaml()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.zitadel.idp.v2.SAMLConfig saml = 13 [json_name = "saml"];</code>
     * @param \Zitadel\Idp\V2\SAMLConfig $var
     * @return $this
     */
    public function setSaml($var)
    {
        GPBUtil::checkMessage($var, \Zitadel\Idp\V2\SAMLConfig::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConfig()
    {
        return $this->whichOneof("config");
    }

}

