<?php
namespace Craft;

/**
 * @link      https://dukt.net/craft/linkedin/
 * @copyright Copyright (c) 2015, Dukt
 * @license   https://dukt.net/craft/linkedin/docs/license
 */

require_once(CRAFT_PLUGINS_PATH.'linkedin/socialgateways/Linkedin.php');

class LinkedinPlugin extends BasePlugin
{
    /**
     * Get Social Gateways
     */
    public function getSocialGateways()
    {
        return [
            'Dukt\Linkedin\Social\Gateway\Linkedin'
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
