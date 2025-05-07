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

/**
 * Holds the boxes used for this set of carrier rates.
 */
class Shipment
{
    private ?string $name = null;
    private float $weight = 0.0;
    private ?float $volume = null;
    private float $length = 0.0;
    private float $width = 0.0;
    private float $height = 0.0;
    private float $packingWeight = 0.0;
    private float $declaredValue = 0.0;
    private ?float $surchargePrice = null;
    private ?array $boxedItems = null;
    private ?string $freightClass = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(?float $volume): void
    {
        $this->volume = $volume;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getPackingWeight(): float
    {
        return $this->packingWeight;
    }

    public function setPackingWeight(float $packingWeight): void
    {
        $this->packingWeight = $packingWeight;
    }

    public function getDeclaredValue(): float
    {
        return $this->declaredValue;
    }

    public function setDeclaredValue(float $declaredValue): void
    {
        $this->declaredValue = $declaredValue;
    }

    public function getSurchargePrice(): ?float
    {
        return $this->surchargePrice;
    }

    public function setSurchargePrice(?float $surchargePrice): void
    {
        $this->surchargePrice = $surchargePrice;
    }

    /**
     * @return BoxedItem[]|null
     */
    public function getBoxedItems(): ?array
    {
        return $this->boxedItems;
    }

    /**
     * @param BoxedItem[]|null $boxedItems
     */
    public function setBoxedItems(?array $boxedItems): void
    {
        $this->boxedItems = $boxedItems;
    }

    public function getFreightClass(): ?string
    {
        return $this->freightClass;
    }

    public function setFreightClass(?string $freightClass): void
    {
        $this->freightClass = $freightClass;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'weight' => $this->weight,
            'volume' => $this->volume,
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'packingWeight' => $this->packingWeight,
            'declaredValue' => $this->declaredValue,
            'surchargePrice' => $this->surchargePrice,
            'boxedItems' => $this->boxedItems ? array_map(fn ($item) => $item->toArray(), $this->boxedItems) : null,
            'freightClass' => $this->freightClass
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "Shipment{name='%s', weight=%f, volume=%s, length=%f, width=%f, height=%f, packingWeight=%f, declaredValue=%f, surchargePrice=%s, boxedItems=%s, freightClass='%s'}",
            $this->name,
            $this->weight,
            $this->volume,
            $this->length,
            $this->width,
            $this->height,
            $this->packingWeight,
            $this->declaredValue,
            $this->surchargePrice,
            json_encode($this->boxedItems),
            $this->freightClass
        );
    }
}
