<?php

namespace App\Entity\Services\Response;

use App\Entity\Services\ServiceSettings;

interface ResponseInterface {

    public function getSettings(): ServiceSettings;

    public function setSettings(array $settings);
}