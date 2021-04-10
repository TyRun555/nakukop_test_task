<?php


namespace App\Entity\Services;


class ServiceSettings
{
    private $fields;

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }
}