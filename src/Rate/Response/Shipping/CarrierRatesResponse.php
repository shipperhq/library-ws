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

namespace ShipperHQ\WS\Rate\Response\Shipping;

use ShipperHQ\WS\Rate\Response\ShippingRate;
use ShipperHQ\WS\Rate\Response\WebServiceError;
use ShipperHQ\WS\Rate\Response\Calendar\CalendarDetails;
use ShipperHQ\WS\Rate\Response\Pickup\PickupLocationDetails;
use ShipperHQ\WS\Rate\Response\Shipping\Carrier\AvailableOption;
use ShipperHQ\WS\Rate\Response\Shipping\Carrier\Shipment;

class CarrierRatesResponse
{
    private ?int $carrierId = null;
    private string $carrierName;
    private string $carrierCode;
    private string $carrierType;
    private string $carrierTitle;
    private ?string $customDescription = null;
    private ?string $displayTab = null;
    private string $dateOption = 'none';
    private ?string $deliveryDateMessage = null;
    private ?string $deliveryDateFormat = null;
    private array $notices = [];
    private array $rates = [];
    private ?PickupLocationDetails $pickupLocationDetails = null;
    private ?CalendarDetails $calendarDetails = null;
    private array $shipments = [];
    private array $availableOptions = [];
    private array $preventRulesApplied = [];
    private ?WebServiceError $error = null;
    private ?int $sortOrder = null;

    public function __construct()
    {
    }

    public function getCarrierId(): ?int
    {
        return $this->carrierId;
    }

    public function setCarrierId(?int $carrierId): void
    {
        $this->carrierId = $carrierId;
    }

    public function getCarrierName(): string
    {
        return $this->carrierName;
    }

    public function setCarrierName(string $carrierName): void
    {
        $this->carrierName = $carrierName;
    }

    public function getCarrierCode(): string
    {
        return $this->carrierCode;
    }

    public function setCarrierCode(string $carrierCode): void
    {
        $this->carrierCode = $carrierCode;
    }

    public function getCarrierType(): string
    {
        return $this->carrierType;
    }

    public function setCarrierType(string $carrierType): void
    {
        $this->carrierType = $carrierType;
    }

    public function getCarrierTitle(): string
    {
        return $this->carrierTitle;
    }

    public function setCarrierTitle(string $carrierTitle): void
    {
        $this->carrierTitle = $carrierTitle;
    }

    public function getCustomDescription(): ?string
    {
        return $this->customDescription;
    }

    public function setCustomDescription(?string $customDescription): void
    {
        $this->customDescription = $customDescription;
    }

    public function getDisplayTab(): ?string
    {
        return $this->displayTab;
    }

    public function setDisplayTab(?string $displayTab): void
    {
        $this->displayTab = $displayTab;
    }

    public function getDateOption(): string
    {
        return $this->dateOption;
    }

    public function setDateOption(string $dateOption): void
    {
        $this->dateOption = $dateOption;
    }

    public function getDeliveryDateMessage(): ?string
    {
        return $this->deliveryDateMessage;
    }

    public function setDeliveryDateMessage(?string $deliveryDateMessage): void
    {
        $this->deliveryDateMessage = $deliveryDateMessage;
    }

    public function getDeliveryDateFormat(): ?string
    {
        return $this->deliveryDateFormat;
    }

    public function setDeliveryDateFormat(?string $deliveryDateFormat): void
    {
        $this->deliveryDateFormat = $deliveryDateFormat;
    }

    public function getNotices(): array
    {
        return $this->notices;
    }

    public function setNotices(array $notices): void
    {
        $this->notices = $notices;
    }

    public function addNotice(string $notice): void
    {
        $this->notices[] = $notice;
    }

    public function getRates(): array
    {
        return $this->rates;
    }

    public function setRates(array $rates): void
    {
        $this->rates = $rates;
    }

    public function addRate(ShippingRate $rate): void
    {
        $this->rates[] = $rate;
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

    public function getShipments(): array
    {
        return $this->shipments;
    }

    public function setShipments(array $shipments): void
    {
        $this->shipments = $shipments;
    }

    public function addShipment(Shipment $shipment): void
    {
        $this->shipments[] = $shipment;
    }

    public function getAvailableOptions(): array
    {
        return $this->availableOptions;
    }

    public function setAvailableOptions(array $availableOptions): void
    {
        $this->availableOptions = $availableOptions;
    }

    public function addAvailableOption(AvailableOption $availableOption): void
    {
        $this->availableOptions[] = $availableOption;
    }

    public function getPreventRulesApplied(): array
    {
        return $this->preventRulesApplied;
    }

    public function setPreventRulesApplied(array $preventRulesApplied): void
    {
        $this->preventRulesApplied = $preventRulesApplied;
    }

    public function addPreventRuleApplied(string $rule): void
    {
        $this->preventRulesApplied[] = $rule;
    }

    public function getError(): ?WebServiceError
    {
        return $this->error;
    }

    public function setError(?WebServiceError $error): void
    {
        $this->error = $error;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(?int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    public function removeRate(string $methodCode): void
    {
        foreach ($this->rates as $key => $rate) {
            if ($rate->getMethodCode() === $methodCode) {
                unset($this->rates[$key]);
                break;
            }
        }
        $this->rates = array_values($this->rates);
    }

    public function toArray(): array
    {
        return [
            'carrierId' => $this->carrierId,
            'carrierName' => $this->carrierName,
            'carrierCode' => $this->carrierCode,
            'carrierType' => $this->carrierType,
            'carrierTitle' => $this->carrierTitle,
            'customDescription' => $this->customDescription,
            'displayTab' => $this->displayTab,
            'dateOption' => $this->dateOption,
            'deliveryDateMessage' => $this->deliveryDateMessage,
            'deliveryDateFormat' => $this->deliveryDateFormat,
            'notices' => $this->notices,
            'rates' => array_map(function (ShippingRate $rate) {
                return $rate->toArray();
            }, $this->rates),
            'pickupLocationDetails' => $this->pickupLocationDetails?->toArray(),
            'calendarDetails' => $this->calendarDetails?->toArray(),
            'shipments' => array_map(function (Shipment $shipment) {
                return $shipment->toArray();
            }, $this->shipments),
            'availableOptions' => array_map(function (AvailableOption $option) {
                return $option->toArray();
            }, $this->availableOptions),
            'preventRulesApplied' => $this->preventRulesApplied,
            'error' => $this->error?->toArray(),
            'sortOrder' => $this->sortOrder
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "CarrierRatesResponse{carrierId=%d, carrierName='%s', carrierCode='%s', carrierType='%s', " .
            "carrierTitle='%s', customDescription='%s', displayTab='%s', dateOption='%s', " .
            "deliveryDateMessage='%s', deliveryDateFormat='%s', notices=%s, rates=%s, " .
            "pickupLocationDetails=%s, calendarDetails=%s, shipments=%s, availableOptions=%s, " .
            "preventRulesApplied=%s, error=%s, sortOrder=%d}",
            $this->carrierId ?? 0,
            $this->carrierName,
            $this->carrierCode,
            $this->carrierType,
            $this->carrierTitle,
            $this->customDescription ?? '',
            $this->displayTab ?? '',
            $this->dateOption,
            $this->deliveryDateMessage ?? '',
            $this->deliveryDateFormat ?? '',
            json_encode($this->notices),
            json_encode(array_map(function (ShippingRate $rate) {
                return $rate->toArray();
            }, $this->rates)),
            $this->pickupLocationDetails?->__toString() ?? 'null',
            $this->calendarDetails?->__toString() ?? 'null',
            json_encode(array_map(function (Shipment $shipment) {
                return $shipment->toArray();
            }, $this->shipments)),
            json_encode(array_map(function (AvailableOption $option) {
                return $option->toArray();
            }, $this->availableOptions)),
            json_encode($this->preventRulesApplied),
            $this->error?->__toString() ?? 'null',
            $this->sortOrder ?? 0
        );
    }
}
