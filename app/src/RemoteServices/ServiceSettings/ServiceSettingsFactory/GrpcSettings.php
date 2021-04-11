<?php


namespace App\RemoteServices\ServiceSettings\ServiceSettingsFactory;

use App\RemoteServices\ServiceSettings\BaseServiceSettings;
use App\RemoteServices\ServiceSettings\ServiceSettingsInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * [field1: string, field2: bool, field3: int]
 */
class GrpcSettings extends BaseServiceSettings implements ServiceSettingsInterface
{
    /**
     * @Assert\Type(type="string")
     */
    private string $field1;

    /**
     * @Assert\Type(type="bool")
     */
    private bool $field2;

    /**
     * @Assert\Type(type="integer")
     */
    private int $field3;

    public function __construct(string $field1, bool $field2, int $field3)
    {
        $this->field1 = $field1;
        $this->field2 = $field2;
        $this->field3 = $field3;
    }

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