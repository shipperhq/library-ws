<?php


/*
 * ShipperHQ
 *
 * @category ShipperHQ
 * @package ShipperHQ\WS
 * @copyright Copyright (c) 2025 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\WS\Rate\Response\Shipping\Carrier;

class AvailableOption
{
    private ?string $name = null;
    private ?string $code = null;
    private ?AvailableOptionType $availableOptionType = null;
    private array $values = [];
    private ?string $defaultOptionValue = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getAvailableOptionType(): ?AvailableOptionType
    {
        return $this->availableOptionType;
    }

    public function setAvailableOptionType(?AvailableOptionType $availableOptionType): void
    {
        $this->availableOptionType = $availableOptionType;
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function setValues(array $values): void
    {
        $this->values = $values;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getDefaultOptionValue(): ?string
    {
        return $this->defaultOptionValue;
    }

    public function setDefaultOptionValue(?string $defaultOptionValue): void
    {
        $this->defaultOptionValue = $defaultOptionValue;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'code' => $this->code,
            'availableOptionType' => $this->availableOptionType?->value,
            'values' => $this->values,
            'defaultOptionValue' => $this->defaultOptionValue
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "AvailableOption{name='%s', code='%s', availableOptionType=%s, values=%s, defaultOptionValue=%s}",
            $this->name ?? '',
            $this->code ?? '',
            $this->availableOptionType?->value ?? '',
            json_encode($this->values),
            $this->defaultOptionValue ?? ''
        );
    }
}
