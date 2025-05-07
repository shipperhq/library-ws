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

use ShipperHQ\WS\Rate\Response\Calendar\CalendarDetails;
use ShipperHQ\WS\Rate\Response\Pickup\PickupLocationDetails;
use ShipperHQ\WS\Rate\Response\Shipping\Rate;

/**
 * Carrier Rates class. Contains the rates and related information
 */
class CarrierRates
{
    /**
     * @var Rate[]
     */
    private array $rates = [];

    /**
     * @var string[]
     */
    private array $notices = [];

    private ?PickupLocationDetails $pickupLocationDetails = null;

    private ?CalendarDetails $calendarDetails = null;

    /**
     * @var Shipment[]
     */
    private array $shipments = [];

    /**
     * @var AvailableOption[]
     */
    private array $availableOptions = [];

    /**
     * @var string[]
     */
    private array $preventRulesApplied = [];

    public function __construct(
        array $rates = [],
        ?PickupLocationDetails $pickupLocationDetails = null
    ) {
        $this->rates = $rates;
        $this->pickupLocationDetails = $pickupLocationDetails;
    }

    /**
     * @return Rate[]
     */
    public function getRates(): array
    {
        return $this->rates;
    }

    /**
     * @param Rate[] $rates
     */
    public function setRates(array $rates): void
    {
        $this->rates = $rates;
    }

    public function getPickupLocationDetails(): ?PickupLocationDetails
    {
        return $this->pickupLocationDetails;
    }

    public function setPickupLocationDetails(?PickupLocationDetails $pickupLocationDetails): void
    {
        $this->pickupLocationDetails = $pickupLocationDetails;
    }

    public function getCalendarDetails(): ?CalendarDetails
    {
        return $this->calendarDetails;
    }

    public function setCalendarDetails(?CalendarDetails $calendarDetails): void
    {
        $this->calendarDetails = $calendarDetails;
    }

    /**
     * @return string[]
     */
    public function getNotices(): array
    {
        return $this->notices;
    }

    /**
     * @param string[] $notices
     */
    public function setNotices(array $notices): void
    {
        $this->notices = $notices;
    }

    /**
     * @return Shipment[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }

    /**
     * @param Shipment[] $shipments
     */
    public function setShipments(array $shipments): void
    {
        $this->shipments = $shipments;
    }

    /**
     * @return AvailableOption[]
     */
    public function getAvailableOptions(): array
    {
        return $this->availableOptions;
    }

    /**
     * @param AvailableOption[] $availableOptions
     */
    public function setAvailableOptions(array $availableOptions): void
    {
        $this->availableOptions = $availableOptions;
    }

    /**
     * @return string[]
     */
    public function getPreventRulesApplied(): array
    {
        return $this->preventRulesApplied;
    }

    /**
     * @param string[] $preventRulesApplied
     */
    public function setPreventRulesApplied(array $preventRulesApplied): void
    {
        $this->preventRulesApplied = $preventRulesApplied;
    }

    /**
     * Add the new prevent rule
     */
    public function addPreventRule(string $preventRuleString): void
    {
        if (!in_array($preventRuleString, $this->preventRulesApplied, true)) {
            $this->preventRulesApplied[] = $preventRuleString;
        }
    }

    public function toArray(): array
    {
        return [
            'rates' => array_map(fn ($rate) => $rate->toArray(), $this->rates),
            'notices' => $this->notices,
            'pickupLocationDetails' => $this->pickupLocationDetails?->toArray(),
            'calendarDetails' => $this->calendarDetails?->toArray(),
            'shipments' => array_map(fn ($shipment) => $shipment->toArray(), $this->shipments),
            'availableOptions' => array_map(fn ($option) => $option->toArray(), $this->availableOptions),
            'preventRulesApplied' => $this->preventRulesApplied
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "CarrierRates{rates=%s, notices=%s, pickupLocationDetails=%s, calendarDetails=%s, shipments=%s, availableOptions=%s, preventRulesApplied=%s}",
            json_encode($this->rates),
            json_encode($this->notices),
            $this->pickupLocationDetails,
            $this->calendarDetails,
            json_encode($this->shipments),
            json_encode($this->availableOptions),
            json_encode($this->preventRulesApplied)
        );
    }
}
