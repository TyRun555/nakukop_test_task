<?php


namespace App\Entity\Services\ServiceSettings;


use App\Entity\Services\ServiceSettings\ServiceSettingsFactory\GrpcSettings;
use App\Entity\Services\ServiceSettings\ServiceSettingsFactory\HttpSettings;
use App\Entity\Services\ServiceSettings\ServiceSettingsFactory\RestApiSettings;

class ServiceSettingsFactory
{
    public static function createGrpcSettings(): ServiceSettingsInterface
    {
        return new GrpcSettings();
    }

    public static function createHttpSettings(): ServiceSettingsInterface
    {
        return new HttpSettings();
    }

    public static function createRestApiSettings(): ServiceSettingsInterface
    {
        return new RestApiSettings();
    }
}