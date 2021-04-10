<?php


namespace App\Entity\Services\ServiceSettings\ServiceSettingsFactory;

use App\Entity\Services\ServiceSettings\BaseServiceSettings;
use App\Entity\Services\ServiceSettings\ServiceSettingsInterface;

/**
 * [field1: string, field2: bool, field3: int]
 */
class GrpcSettings extends BaseServiceSettings implements ServiceSettingsInterface
{
    private string $field1;
    private bool $field2;
    private int $field3;

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
}