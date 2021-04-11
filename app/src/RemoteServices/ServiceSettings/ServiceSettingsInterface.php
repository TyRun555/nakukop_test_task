<?php
namespace App\RemoteServices\ServiceSettings;

interface ServiceSettingsInterface {
    function validate(array $fields): bool;
    function getFields(): array;
    function setFields(array $fields): void;
}