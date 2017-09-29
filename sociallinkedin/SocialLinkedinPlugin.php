<?php
/**
 * @link      https://dukt.net/craft/linkedin/
 * @copyright Copyright (c) 2016, Dukt
 * @license   https://dukt.net/craft/linkedin/docs/license
 */

namespace Craft;

class SocialLinkedinPlugin extends BasePlugin
{
	public function init()
	{
		require_once __DIR__ . '/vendor/autoload.php';
	}

    /**
     * Get Social Gateways
     */
    public function getSocialLoginProviders()
    {
        require_once(CRAFT_PLUGINS_PATH.'sociallinkedin/providers/social/Linkedin.php');

        return [
            'Dukt\Social\LoginProviders\Linkedin',
        ];
    }

    /**
     * Get Name
     */
    public function getName()
    {
        return Craft::t('Social LinkedIn');
    }

    /**
     * Get Version
     */
    public function getVersion()
    {
        return '2.1.0';
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

    /**
     * Get release feed URL
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/dukt/social-linkedin/v2/releases.json';
    }
}
