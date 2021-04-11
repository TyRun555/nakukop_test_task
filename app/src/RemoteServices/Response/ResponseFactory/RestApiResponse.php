<?php


namespace App\RemoteServices\Response\ResponseFactory;


use App\RemoteServices\Response\ResponseInterface;
use App\RemoteServices\ServiceSettings;
use App\RemoteServices\ServiceSettings\ServiceSettingsFactory;
use App\RemoteServices\ServiceSettings\ServiceSettingsInterface;

class RestApiResponse implements ResponseInterface
{

    private ServiceSettingsInterface $settings;

    public function getSettings(): ServiceSettingsInterface
    {
        return isset($this->settings) && $this->settings instanceof ServiceSettingsInterface
            ? $this->settings
            : ServiceSettingsFactory::createRestApiSettings();
    }

    public function setSettings(array $fields)
    {
        $serviceSettings = ServiceSettingsFactory::createRestApiSettings();
        $serviceSettings->setFields($fields);
        $this->settings = $serviceSettings;
    }

}