<?php


namespace App\Entity\Services\Response\ResponseFactory;


use App\Entity\Services\Response\ResponseInterface;
use App\Entity\Services\ServiceSettings;
use App\Entity\Services\ServiceSettings\ServiceSettingsFactory;
use App\Entity\Services\ServiceSettings\ServiceSettingsInterface;

class RestApiResponse implements ResponseInterface
{

    private ServiceSettingsInterface $settings;

    public function getSettings(): ServiceSettingsInterface
    {
        return isset($this->settings) && $this->settings instanceof ServiceSettingsInterface
            ? $this->settings
            : ServiceSettingsFactory::createHttpSettings();
    }

}