<?php

namespace App\RemoteServices\ServiceSettings;


abstract class BaseServiceSettings implements ServiceSettingsInterface
{
    /**
     * @return array
     */
    public function getFields(): array
    {
        return [

        ];
    }

    /**
     * @param array $fields
     * @return void
     */
    public function setFields(array $fields): void
    {
        foreach ($fields as $name => $value) {
            $this->$name = $value;
        }
    }
}