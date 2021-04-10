<?php


namespace App\Entity\Services\ServiceSettings;


use App\Entity\Services\ServiceSettings\ServiceSettingsFactory\GrpcSettings;
use App\Entity\Services\ServiceSettings\ServiceSettingsFactory\HttpSettings;
use App\Entity\Services\ServiceSettings\ServiceSettingsFactory\RestApiSettings;

class ServiceSettingsFactory
{
    public function createGrpcSettings(): ServiceSettingsInterface
    {
        return new GrpcSettings();
    }

    public function createHttpSettings(): ServiceSettingsInterface
    {
        return new HttpSettings();
    }

    public function createRestApiSettings(): ServiceSettingsInterface
    {
        return new RestApiSettings();
    }
}