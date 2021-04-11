<?php

namespace App\RemoteServices\Response;

use App\RemoteServices\ServiceSettings\ServiceSettingsInterface;

interface ResponseInterface {

    public function getSettings(): ServiceSettingsInterface;
    public function setSettings(array $fields);

}