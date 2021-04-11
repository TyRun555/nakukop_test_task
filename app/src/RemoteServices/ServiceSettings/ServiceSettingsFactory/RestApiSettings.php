<?php


namespace App\RemoteServices\ServiceSettings\ServiceSettingsFactory;


use App\RemoteServices\ServiceSettings\BaseServiceSettings;
use App\RemoteServices\ServiceSettings\ServiceSettingsInterface;

/**
 * [field1: string, field2: bool, field3: array<string>]
 */
class RestApiSettings  extends BaseServiceSettings implements ServiceSettingsInterface
{
    private string $field1;
    private bool $field2;
    /**
     * @var array<string>
     */
    private array $field3;

    /**
     * @return array
     */
    public function getFields(): array
    {
        return [
            'field1' => $this->field1,
            'field2' => $this->field2,
            'field3' => $this->field3,
        ];
    }

    public function validate(array $fields): bool
    {

        if (array_key_exists('field3', $fields)) {
            if (!is_array($fields['field3'])) {
                return false;
            } else {
                foreach ($fields['field3'] as $value) {
                    if (gettype($value) != 'string') {
                        return false;
                    }
                }
            }
        }
        return parent::validate($fields);
    }
}