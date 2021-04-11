<?php
namespace App\RemoteServices\ServiceSettings;


use App\RemoteServices\ServiceSettings\ServiceSettingsFactory\GrpcSettings;
use App\RemoteServices\ServiceSettings\ServiceSettingsFactory\HttpSettings;
use App\RemoteServices\ServiceSettings\ServiceSettingsFactory\RestApiSettings;

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