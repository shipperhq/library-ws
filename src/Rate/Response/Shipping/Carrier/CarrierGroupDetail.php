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
 * CarrierGroup Detail returned in rate response.
 * Can be either related to the location or the shipping group
 */
class CarrierGroupDetail
{
    private ?string $emailOption = null;
    private ?string $checkoutDescription = null;
    private ?string $name = null;
    private ?string $carrierGroupId = null;  // this is a string so can be either 5 or 5_6
    private ?string $dateFormat = null;
    private ?string $emailAddress = null;
    private ?string $contactName = null;
    private ?string $packingStation = null;
    private ?Address $originAddress = null;

    public function __construct(
        ?string $emailOption = null,
        ?string $checkoutDescription = null,
        ?string $name = null,
        ?string $carrierGroupId = null,
        ?string $dateFormat = null,
        ?string $emailAddress = null,
        ?string $contactName = null,
        ?string $packingStation = null,
        ?Address $originAddress = null
    ) {
        $this->emailOption = $emailOption;
        $this->checkoutDescription = $checkoutDescription;
        $this->name = $name;
        $this->carrierGroupId = $carrierGroupId;
        $this->dateFormat = $dateFormat;
        $this->emailAddress = $emailAddress;
        $this->contactName = $contactName;
        $this->packingStation = $packingStation;
        $this->originAddress = $originAddress;
    }

    public function getEmailOption(): ?string
    {
        return $this->emailOption;
    }

    public function setEmailOption(?string $emailOption): void
    {
        $this->emailOption = $emailOption;
    }

    public function getCheckoutDescription(): ?string
    {
        return $this->checkoutDescription;
    }

    public function setCheckoutDescription(?string $checkoutDescription): void
    {
        $this->checkoutDescription = $checkoutDescription;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getCarrierGroupId(): ?string
    {
        return $this->carrierGroupId;
    }

    public function setCarrierGroupId(?string $carrierGroupId): void
    {
        $this->carrierGroupId = $carrierGroupId;
    }

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(?string $dateFormat): void
    {
        $this->dateFormat = $dateFormat;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(?string $contactName): void
    {
        $this->contactName = $contactName;
    }

    public function getPackingStation(): ?string
    {
        return $this->packingStation;
    }

    public function setPackingStation(?string $packingStation): void
    {
        $this->packingStation = $packingStation;
    }

    public function getOriginAddress(): ?Address
    {
        return $this->originAddress;
    }

    public function setOriginAddress(?Address $originAddress): void
    {
        $this->originAddress = $originAddress;
    }

    public function toArray(): array
    {
        return [
            'emailOption' => $this->emailOption,
            'checkoutDescription' => $this->checkoutDescription,
            'name' => $this->name,
            'carrierGroupId' => $this->carrierGroupId,
            'dateFormat' => $this->dateFormat,
            'emailAddress' => $this->emailAddress,
            'contactName' => $this->contactName,
            'packingStation' => $this->packingStation,
            'originAddress' => $this->originAddress?->toArray()
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "CarrierGroupDetail{emailOption='%s', checkoutDescription='%s', name='%s', carrierGroupId='%s', dateFormat='%s', emailAddress='%s', contactName='%s', packingStation='%s', originAddress=%s}",
            $this->emailOption,
            $this->checkoutDescription,
            $this->name,
            $this->carrierGroupId,
            $this->dateFormat,
            $this->emailAddress,
            $this->contactName,
            $this->packingStation,
            $this->originAddress
        );
    }
}
