<?php


namespace App\Entity\Services\Response\ResponseFactory;


use App\Entity\Services\Response\ResponseInterface;
use App\Entity\Services\ServiceSettings;

class GrpcResponse implements ResponseInterface
{

    public function getSettings(): ServiceSettings
    {
        // TODO: Implement getSettings() method.
    }

    public function setSettings(array $settings)
    {
        // TODO: Implement setSettings() method.
    }
}