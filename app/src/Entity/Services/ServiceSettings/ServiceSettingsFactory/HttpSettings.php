<?php


namespace App\Entity\Services\ServiceSettings\ServiceSettingsFactory;


use App\Entity\Services\ServiceSettings\BaseServiceSettings;
use App\Entity\Services\ServiceSettings\ServiceSettingsInterface;

/**
 * [field1: bool, field2: int, field3: array<string, int>]
 */
class HttpSettings extends BaseServiceSettings implements ServiceSettingsInterface
{
    private bool $field1;
    private int $field2;
    /**
     * @var array<string, int>
     */
    private array $field3;

    /**
     * @return array
     */
    public function getFields(): array
    {
        return [
            'field1' => $this->field1 ?? null,
            'field2' => $this->field2 ?? null,
            'field3' => $this->field3 ?? null,
        ];
    }

    public function validate(array $fields): bool
    {

        if (array_key_exists('field3', $fields)) {
            if (!is_array($fields['field3'])) {
                return false;
            } else {
                foreach ($fields['field3'] as $value) {
                    $valType = gettype($value);
                    if ($valType != 'string' && $valType != 'integer') {
                        return false;
                    }
                }
            }
        }
        return parent::validate($fields);
    }
}