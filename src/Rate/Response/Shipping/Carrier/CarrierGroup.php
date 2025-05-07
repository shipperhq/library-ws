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
 * Holds the carrier group information which is a set of rates typically split by location or shipping group
 */
class CarrierGroup
{
    /**
     * @var CarrierRates[]
     */
    private array $carrierRatesList = [];

    private ?CarrierGroupDetail $carrierGroupDetail = null;

    /**
     * @var array
     */
    private array $formattedItems = [];

    public function __construct(
        array $carrierRatesList = [],
        ?CarrierGroupDetail $carrierGroupDetail = null,
        array $formattedItems = []
    ) {
        $this->carrierRatesList = $carrierRatesList;
        $this->carrierGroupDetail = $carrierGroupDetail;
        $this->formattedItems = $formattedItems;
    }

    /**
     * @return CarrierRates[]
     */
    public function getCarrierRatesList(): array
    {
        return $this->carrierRatesList;
    }

    /**
     * @param CarrierRates[] $carrierRatesList
     */
    public function setCarrierRatesList(array $carrierRatesList): void
    {
        $this->carrierRatesList = $carrierRatesList;
    }

    public function getCarrierGroupDetail(): ?CarrierGroupDetail
    {
        return $this->carrierGroupDetail;
    }

    public function setCarrierGroupDetail(?CarrierGroupDetail $carrierGroupDetail): void
    {
        $this->carrierGroupDetail = $carrierGroupDetail;
    }

    /**
     * @return array
     */
    public function getFormattedItems(): array
    {
        return $this->formattedItems;
    }

    /**
     * @param array $formattedItems
     */
    public function setFormattedItems(array $formattedItems): void
    {
        $this->formattedItems = $formattedItems;
    }

    public function toArray(): array
    {
        return [
            'carrierRatesList' => array_map(fn ($rate) => $rate->toArray(), $this->carrierRatesList),
            'carrierGroupDetail' => $this->carrierGroupDetail?->toArray(),
            'formattedItems' => $this->formattedItems
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "CarrierGroup{carrierRatesList=%s, carrierGroupDetail=%s, formattedItems=%s}",
            json_encode($this->carrierRatesList),
            $this->carrierGroupDetail,
            json_encode($this->formattedItems)
        );
    }
}
