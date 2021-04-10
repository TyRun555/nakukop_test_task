<?php

namespace App\Entity\Services\ServiceSettings;

interface ServiceSettingsInterface {
    function validate(array $fields): bool;
    function getFields(): array;
    function setFields(array $fields): void;
}