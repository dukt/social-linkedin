<?php
/**
 * @link      https://dukt.net/craft/github/
 * @copyright Copyright (c) 2015, Dukt
 * @license   https://dukt.net/craft/github/docs/license
 */

namespace Dukt\OAuth\Providers;

use Craft\UrlHelper;

class Linkedin extends BaseProvider
{
    // Public Methods
    // =========================================================================

    /**
     * Get Name
     *
     * @return string
     */
    public function getName()
    {
        return 'LinkedIn';
    }

    /**
     * Get Icon URL
     *
     * @return string
     */
    public function getIconUrl()
    {
        return UrlHelper::getResourceUrl('linkedin/svg/linkedin.svg');
    }


    /**
     * Get OAuth Version
     *
     * @return int
     */
    public function getOauthVersion()
    {
        return 2;
    }

    /**
     * Get API Manager URL
     *
     * @return string
     */
    public function getManagerUrl()
    {
        return 'https://www.linkedin.com/developer/apps';
    }

    /**
     * Create Github Provider
     *
     * @return Github
     */
    public function createProvider()
    {
        $config = [
            'clientId' => $this->providerInfos->clientId,
            'clientSecret' => $this->providerInfos->clientSecret,
            'redirectUri' => $this->getRedirectUri(),
        ];

        return new \League\OAuth2\Client\Provider\Linkedin($config);
    }
}
