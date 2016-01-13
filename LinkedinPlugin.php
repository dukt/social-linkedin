<?php
/**
 * @link      https://dukt.net/craft/linkedin/
 * @copyright Copyright (c) 2016, Dukt
 * @license   https://dukt.net/craft/linkedin/docs/license
 */

namespace Craft;

class LinkedinPlugin extends BasePlugin
{
    /**
     * Get OAuth Providers
     */
    public function getOauthProviders()
    {
        require_once(CRAFT_PLUGINS_PATH.'linkedin/providers/oauth/Linkedin.php');

        return [
            'Dukt\OAuth\Providers\Linkedin'
        ];
    }

    /**
     * Get Social Gateways
     */
    public function getSocialLoginProviders()
    {
        require_once(CRAFT_PLUGINS_PATH.'linkedin/providers/social/Linkedin.php');

        return [
            'Dukt\Social\LoginProviders\Linkedin',
        ];
    }

    /**
     * Get Name
     */
    function getName()
    {
        return Craft::t('LinkedIn');
    }

    /**
     * Get Version
     */
    function getVersion()
    {
        return '1.0.0';
    }

    /**
     * Get Developer
     */
    function getDeveloper()
    {
        return 'Dukt';
    }

    /**
     * Get Developer URL
     */
    function getDeveloperUrl()
    {
        return 'https://dukt.net/';
    }
}
