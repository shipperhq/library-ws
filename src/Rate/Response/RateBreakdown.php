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
 * Class RateBreakdown
 * @package ShipperHQ\WS\Rate\Response
 */
class RateBreakdown
{
    private string $carrierGroupId;
    private string $carrierCode;
    private string $methodCode;
    private float $totalCharges;
    private float $shippingPrice;
    private float $handlingFee;
    private string $carrierType;

    /**
     * @JsonIgnore
     */
    private ?int $carrierMethodCode = null;

    private string $name;

    /**
     * @JsonIgnore
     */
    private ?object $methodCodeObj = null;

    /**
     * Holds the shipments for this rate
     */
    private array $shipments;

    /**
     * RateBreakdown constructor.
     * @param string $carrierGroupId
     * @param string $carrierCode
     * @param string $carrierType
     * @param ShippingRate $newRate
     * @param array $shipments
     */
    public function __construct(
        string $carrierGroupId,
        string $carrierCode,
        string $carrierType,
        ShippingRate $newRate,
        array $shipments
    ) {
        $this->carrierCode = $carrierCode;
        $this->carrierGroupId = $carrierGroupId;
        $this->carrierType = $carrierType;
        $this->methodCode = $newRate->getMethodCode();
        $this->totalCharges = $newRate->getTotalPrice();
        $this->name = $newRate->getMethodTitle();
        $this->methodCodeObj = $newRate->getMethodCode();
        $this->shipments = $shipments;
    }

    /**
     * @return string
     */
    public function getCarrierGroupId(): string
    {
        return $this->carrierGroupId;
    }

    /**
     * @param string $carrierGroupId
     */
    public function setCarrierGroupId(string $carrierGroupId): void
    {
        $this->carrierGroupId = $carrierGroupId;
    }

    /**
     * @return string
     */
    public function getMethodCode(): string
    {
        return $this->methodCode;
    }

    /**
     * @param string $methodCode
     */
    public function setMethodCode(string $methodCode): void
    {
        $this->methodCode = $methodCode;
    }

    /**
     * @return float
     */
    public function getTotalCharges(): float
    {
        return $this->totalCharges;
    }

    /**
     * @param float $totalCharges
     */
    public function setTotalCharges(float $totalCharges): void
    {
        $this->totalCharges = $totalCharges;
    }

    /**
     * @return float
     */
    public function getShippingPrice(): float
    {
        return $this->shippingPrice;
    }

    /**
     * @param float $shippingPrice
     */
    public function setShippingPrice(float $shippingPrice): void
    {
        $this->shippingPrice = $shippingPrice;
    }

    /**
     * @return float
     */
    public function getHandlingFee(): float
    {
        return $this->handlingFee;
    }

    /**
     * @param float $handlingFee
     */
    public function setHandlingFee(float $handlingFee): void
    {
        $this->handlingFee = $handlingFee;
    }

    /**
     * @return string
     */
    public function getCarrierType(): string
    {
        return $this->carrierType;
    }

    /**
     * @param string $carrierType
     */
    public function setCarrierType(string $carrierType): void
    {
        $this->carrierType = $carrierType;
    }

    /**
     * @return string
     */
    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }

    /**
     * @param string $carrierCode
     */
    public function setCarrierCode(string $carrierCode): void
    {
        $this->carrierCode = $carrierCode;
    }

    /**
     * @return int|null
     * @JsonIgnore
     */
    public function getCarrierMethodCode(): ?int
    {
        return $this->carrierMethodCode;
    }

    /**
     * @param int|null $carrierMethodCode
     * @JsonIgnore
     */
    public function setCarrierMethodCode(?int $carrierMethodCode): void
    {
        $this->carrierMethodCode = $carrierMethodCode;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return object|null
     * @JsonIgnore
     */
    public function getMethodCodeObj(): ?object
    {
        return $this->methodCodeObj;
    }

    /**
     * @param object|null $methodCodeObj
     * @JsonIgnore
     */
    public function setMethodCodeObj(?object $methodCodeObj): void
    {
        $this->methodCodeObj = $methodCodeObj;
    }

    /**
     * @return array
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }

    /**
     * @param array $shipments
     */
    public function setShipments(array $shipments): void
    {
        $this->shipments = $shipments;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'carrierGroupId' => $this->carrierGroupId,
            'carrierCode' => $this->carrierCode,
            'methodCode' => $this->methodCode,
            'totalCharges' => $this->totalCharges,
            'shippingPrice' => $this->shippingPrice,
            'handlingFee' => $this->handlingFee,
            'carrierType' => $this->carrierType,
            'name' => $this->name,
            'shipments' => array_map(function ($shipment) {
                return $shipment instanceof Shipment ? $shipment->toArray() : $shipment;
            }, $this->shipments)
        ];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            "RateBreakdown{carrierGroupId='%s', carrierCode='%s', methodCode='%s', totalCharges=%f, shippingPrice=%f, handlingFee=%f, carrierType='%s', shipments='%s'}",
            $this->carrierGroupId,
            $this->carrierCode,
            $this->methodCode,
            $this->totalCharges,
            $this->shippingPrice,
            $this->handlingFee,
            $this->carrierType,
            json_encode($this->shipments)
        );
    }
}
