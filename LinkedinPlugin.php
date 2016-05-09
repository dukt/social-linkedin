<?php
/**
 * @link      https://dukt.net/craft/linkedin/
 * @copyright Copyright (c) 2016, Dukt
 * @license   https://dukt.net/craft/linkedin/docs/license
 */

namespace Craft;

class LinkedinPlugin extends BasePlugin
{
	public function init()
	{
		require_once __DIR__ . '/vendor/autoload.php';
	}

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
    public function getName()
    {
        return Craft::t('LinkedIn');
    }

    /**
     * Get Version
     */
    public function getVersion()
    {
        return '2.0.0';
    }

    /**
     * Get Developer
     */
    public function getDeveloper()
    {
        return 'Dukt';
    }

    /**
     * Get Developer URL
     */
    public function getDeveloperUrl()
    {
        return 'https://dukt.net/';
    }
}
