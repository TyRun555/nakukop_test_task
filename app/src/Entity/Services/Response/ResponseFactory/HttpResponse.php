<?php


namespace App\Entity\Services\Response\ResponseFactory;


use App\Entity\Services\Response\ResponseInterface;
use App\Entity\Services\ServiceSettings;

class HttpResponse implements ResponseInterface
{
    private $settings;

    public function getSettings(): ServiceSettings
    {
        return $this->settings instanceof ServiceSettings
            ? $this->settings
            : new ServiceSettings();
    }

    public function setSettings(array $settings)
    {
        $serviceSettings = new ServiceSettings();
        $serviceSettings->setFields($settings);
        $this->settings = $serviceSettings;
    }
}