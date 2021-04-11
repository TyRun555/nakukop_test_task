<?php


namespace App\RemoteServices\ServiceSettings\ServiceSettingsFactory;


use App\RemoteServices\ServiceSettings\BaseServiceSettings;
use App\RemoteServices\ServiceSettings\ServiceSettingsInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * [field1: string, field2: bool, field3: array<string>]
 */
class RestApiSettings extends BaseServiceSettings implements ServiceSettingsInterface
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
     * @var array<string>
     * @Assert\All(constraints={
     *     @Assert\Type(type="string")
     * })
     */
    private array $field3;

    public function __construct(string $field1, bool $field2, array $field3)
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