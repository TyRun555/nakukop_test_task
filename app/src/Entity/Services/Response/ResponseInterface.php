<?php

namespace App\Entity\Services\Response;

use App\Entity\Services\ServiceSettings\ServiceSettingsInterface;

interface ResponseInterface {

    public function getSettings(): ServiceSettingsInterface;

}