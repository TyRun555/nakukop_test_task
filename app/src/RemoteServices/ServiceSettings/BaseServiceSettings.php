<?php
namespace App\RemoteServices\ServiceSettings;


abstract class BaseServiceSettings implements ServiceSettingsInterface
{

    /**
     * @param array $fields
     * @return bool
     * @throws \ReflectionException
     */
    public function validate(array $fields): bool
    {
        $fields = $this->getFields();
        $ref = new \ReflectionClass(static::class);
        foreach ($fields as $name => $value) {
            $prop = $ref->getProperty($name);
            if (gettype($value) != $prop->getType()) {
                return false;
            }
        }
        return true;
    }

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
     * @throws \ReflectionException
     */
    public function setFields(array $fields): void
    {
        if ($this->validate($fields)) {
            foreach ($fields as $name => $value) {
                $this->$name = $value;
            }
        }
        throw new \TypeError("Fields value type validation failed!");
    }
}