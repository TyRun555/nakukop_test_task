<?php


namespace App\RemoteServices\ServiceSettings\ServiceSettingsFactory;


use App\RemoteServices\ServiceSettings\BaseServiceSettings;
use App\RemoteServices\ServiceSettings\ServiceSettingsInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * [field1: bool, field2: int, field3: array<string, int>]
 */
class HttpSettings extends BaseServiceSettings implements ServiceSettingsInterface
{
    /**
     * @Assert\Type(type="bool")
     */
    private bool $field1;

    /**
     * @Assert\Type(type="integer")
     */
    private int $field2;

    /**
     * @var array<string, int>
     * @Assert\All(constraints={
     *     @Assert\AtLeastOneOf(constraints={
     *     @Assert\Type(type="string"),
     *     @Assert\Type(type="integer")
     *     })
     * })
     */
    private array $field3;

    public function __construct(bool $field1, int $field2, array $field3)
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
            'field1' => $this->field1 ?? null,
            'field2' => $this->field2 ?? null,
            'field3' => $this->field3 ?? null,
        ];
    }

}