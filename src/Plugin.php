<?php
namespace dukt\social\linkedin;

/**
 * Plugin represents the Linkedin integration plugin.
 *
 * @author    Dukt <support@dukt.net>
 * @since     1.0
 */
class Plugin extends \craft\base\Plugin
{
    /**
     * Get Social Gateways
     */
    public function getSocialLoginProviders()
    {
        return [
            'dukt\social\linkedin\loginproviders\Linkedin'
        ];
    }
}
