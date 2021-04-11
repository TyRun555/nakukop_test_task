<?php
namespace App\RemoteServices\ServiceSettings;

interface ServiceSettingsInterface {
    function getFields(): array;
    function setFields(array $fields): void;
}