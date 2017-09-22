<?php
namespace dukt\social\linkedin;

/**
 * Plugin represents the LinkedIn integration plugin.
 *
 * @author    Dukt <support@dukt.net>
 * @since     1.0
 */
class Plugin extends \craft\base\Plugin
{
    /**
     * Returns Social login provider class names.
     *
     * @return array
     */
    public function getSocialLoginProviders()
    {
        return [
            'dukt\social\linkedin\loginproviders\Linkedin'
        ];
    }
}
