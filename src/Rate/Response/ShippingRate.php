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

namespace ShipperHQ\WS\Rate\Response;

use ShipperHQ\WS\Rate\Response\Shipping\Carrier\Shipment;

/**
 * Class ShippingRate
 * @package ShipperHQ\WS\Rate\Response
 */
class ShippingRate
{
    private string $carrierCode;
    private string $methodCode;
    private string $methodTitle;
    private float $totalPrice;
    private string $currencyCode;
    private array $attributes;
    private ?string $deliveryDate = null;
    private ?string $dispatchDate = null;

    public function __construct()
    {
        $this->attributes = [];
    }

    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }

    public function setCarrierCode(string $carrierCode): void
    {
        $this->carrierCode = $carrierCode;
    }

    public function getMethodCode(): string
    {
        return $this->methodCode;
    }

    public function setMethodCode(string $methodCode): void
    {
        $this->methodCode = $methodCode;
    }

    public function getMethodTitle(): string
    {
        return $this->methodTitle;
    }

    public function setMethodTitle(string $methodTitle): void
    {
        $this->methodTitle = $methodTitle;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return array<string, mixed>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array<string, mixed> $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setDeliveryDate(?string $date): void
    {
        $this->deliveryDate = $date;
    }

    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    public function setDispatchDate(?string $date): void
    {
        $this->dispatchDate = $date;
    }

    public function getDispatchDate(): ?string
    {
        return $this->dispatchDate;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'carrierCode'  => $this->carrierCode,
            'methodCode'   => $this->methodCode,
            'methodTitle'  => $this->methodTitle,
            'totalPrice'   => $this->totalPrice,
            'currencyCode' => $this->currencyCode,
            'attributes'   => $this->attributes,
            'deliveryDate' => $this->deliveryDate,
            'dispatchDate' => $this->dispatchDate
        ];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            "ShippingRate{carrierCode='%s', methodCode='%s', methodTitle='%s', totalPrice=%f, currencyCode='%s', attributes=%s, deliveryDate=%s, dispatchDate=%s}",
            $this->carrierCode,
            $this->methodCode,
            $this->methodTitle,
            $this->totalPrice,
            $this->currencyCode,
            json_encode($this->attributes),
            $this->deliveryDate ?? 'null',
            $this->dispatchDate ?? 'null'
        );
    }
}
