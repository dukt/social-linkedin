<?php

namespace dukt\social\linkedin\loginproviders;

use Craft;
use dukt\social\base\LoginProvider;

/**
 * Linkedin represents the Linkedin gateway
 *
 * @author    Dukt <support@dukt.net>
 * @since     1.0
 */
class Linkedin extends LoginProvider
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'LinkedIn';
    }

    /**
     * @inheritdoc
     */
    public function getIconUrl()
    {
        return Craft::$app->assetManager->getPublishedUrl('@dukt/social/linkedin/icon.svg', true);
    }

    /**
     * @inheritdoc
     */
    public function getDefaultOauthScope(): array
    {
        return [
            'r_liteprofile',
            'r_emailaddress'
        ];
    }

    /**
     * @inheritdoc
     */
    public function getManagerUrl()
    {
        return 'https://www.linkedin.com/developer/apps';
    }

    /**
     * @inheritdoc
     */
    public function getOauthProvider(): \League\OAuth2\Client\Provider\LinkedIn
    {
        $config = $this->getOauthProviderConfig();

        return new \League\OAuth2\Client\Provider\LinkedIn($config['options']);
    }

    /**
     * @inheritdoc
     */
    public function getDefaultUserFieldMapping(): array
    {
        return [
            'id' => '{{ profile.getId() }}',
            'email' => '{{ profile.getEmail() }}',
            'username' => '{{ profile.getEmail() }}',
            'photo' => '{{ profile.getImageUrl() }}',
        ];
    }
}



