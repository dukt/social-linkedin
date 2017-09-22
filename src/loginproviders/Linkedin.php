<?php
namespace dukt\social\linkedin\loginproviders;

use Craft;
use dukt\social\base\LoginProvider;
use GuzzleHttp\Client;
use dukt\social\models\Token;

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
	public function getName()
    {
        return "LinkedIn";
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
    public function getDefaultScope()
    {
        return [
            'r_basicprofile',
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
	public function getProfile(Token $token)
    {
        $remoteProfile = $this->getRemoteProfile($token);

        return [
            'id' => $remoteProfile['id'],
            'email' => $remoteProfile['emailAddress'],
            'username' => $remoteProfile['emailAddress'],
            'photo' => $remoteProfile['pictureUrl'],
            'firstName' => $remoteProfile['firstName'],
            'lastName' => $remoteProfile['lastName'],
            'profileUrl' => $remoteProfile['pictureUrl'],
            'location' => $remoteProfile['location']['name'],
        ];

    }

    // Protected Methods
    // =========================================================================

    /**
     * Returns the login provider’s OAuth provider.
     *
     * @return \League\OAuth2\Client\Provider\LinkedIn
     */
    protected function getOauthProvider()
    {
        $providerInfos = $this->getInfos();

        $config = [
            'clientId' => (isset($providerInfos['clientId']) ? $providerInfos['clientId'] : ''),
            'clientSecret' => (isset($providerInfos['clientSecret']) ? $providerInfos['clientSecret'] : ''),
            'redirectUri' => $this->getRedirectUri(),
        ];

        return new \League\OAuth2\Client\Provider\LinkedIn($config);
    }

    /**
     * @inheritdoc
     */
    protected function getRemoteProfile(Token $token)
    {

        $client = $this->getClient($token);

        $fields = [
            'id', 'email-address', 'first-name', 'last-name', 'headline', 'location', 'industry', 'picture-url', 'public-profile-url',
        ];

        $fields = implode(',', $fields);

        $options = [
            'query' => [
                'format' => 'json'
            ]
        ];

        $uri = 'people/~:(' . $fields . ')';

        $response = $client->request('GET', $uri, $options);

        return json_decode($response->getBody(), true);
    }

    // Private Methods
    // =========================================================================

    /**
     * Returns the authenticated Guzzle client.
     *
     * @param Token $token
     *
     * @return Client
     */
    private function getClient(Token $token)
    {
        $headers = [];

        if ($token) {
            $headers['Authorization'] = 'Bearer '.$token->token;
        }

        $options = [
            'base_uri' => 'https://api.linkedin.com/v1/',
            'headers' => $headers
        ];

        return new Client($options);
    }
}



