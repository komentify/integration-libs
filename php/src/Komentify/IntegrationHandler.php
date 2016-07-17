<?php

namespace Komentify;

use Komentify\Exception\InvalidConfigurationException;

class IntegrationHandler
{
    const BASE_URL = 'http://www.komentify.io/api/embed';

    /**
     * @var array
     */
    private $config;

    /**
     * @param array $config
     *
     * @throws InvalidConfigurationException
     */
    public function __construct(array $config)
    {
        if (!isset($config['appId']) || !isset($config['elementId'])) {
            throw new InvalidConfigurationException('appId and elementId need to be provided');
        }

        $this->config = $config;
    }

    /**
     * @return string
     */
    public function getScriptSnippet()
    {
        return '<script src="' . $this->getUrl() . '"></script>';
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        $appId = $this->config['appId'];
        $elementId = $this->config['elementId'];
        $siteId = isset($this->config['siteId']) ? $this->config['siteId'] : null;

        $url = sprintf('%s?appId=%s&selectorId=%s', self::BASE_URL, $appId, $elementId);

        if ($siteId) {
            $url .= '&siteId=' . $siteId;
        }

        return $url;
    }
}
