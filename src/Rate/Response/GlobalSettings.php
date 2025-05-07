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

/**
 * Class GlobalSettings
 * @package ShipperHQ\WS\Rate\Response
 */
class GlobalSettings
{
    private string $dateFormat;
    private string $currencyCode;
    private string $weightUnit;
    private bool $dropshipShowMergedRates;
    private bool $dropshipShowItemDesc;
    private string $dropshipDescription;
    private string $dropshipTitle;
    private string $distanceUnit;
    private string $carrierGroupDescription;
    private bool $calendarConfirm;
    private string $shippingTooltipText;
    private bool $showPickupMulti;
    private bool $cityRequired;
    private string $sortByPrice;
    private bool $dropshipShowWeight;
    private string $preferredLocale;

    public function __construct(
        array $userSettings,
        bool $cityRequired
    ) {
        $this->dropshipShowMergedRates = $userSettings['dropshipShowMergedRates'] ?? false;
        $this->currencyCode = $userSettings['currencyCode'] ?? '';
        $this->dropshipShowItemDesc = $userSettings['dropshipShowItemDesc'] ?? false;
        $this->dateFormat = $userSettings['dateFormat'] ?? '';
        $this->weightUnit = $userSettings['weightUnit'] ?? '';
        $this->dropshipDescription = $userSettings['dropshipDescription'] ?? '';
        $this->dropshipTitle = $userSettings['dropshipTitle'] ?? '';
        $this->distanceUnit = $userSettings['distanceUnit'] ?? '';
        $this->carrierGroupDescription = $userSettings['carrierGroupDesc'] ?? '';
        $this->calendarConfirm = $userSettings['calendarConfirm'] ?? false;
        $this->shippingTooltipText = $userSettings['shippingTooltipText'] ?? '';
        $this->showPickupMulti = $userSettings['showPickupMulti'] ?? false;
        $this->cityRequired = $cityRequired;
        $this->sortByPrice = isset($userSettings['carrierSingle']) && $userSettings['carrierSingle']
            ? ($userSettings['sortByPrice'] ?? 'ascending')
            : 'ascending';
        $this->dropshipShowWeight = $userSettings['dropshipShowWeight'] ?? false;
        $this->preferredLocale = $userSettings['preferredLocale'] ?? '';
    }

    public function isDropshipShowMergedRates(): bool
    {
        return $this->dropshipShowMergedRates;
    }

    public function setDropshipShowMergedRates(bool $dropshipShowMergedRates): void
    {
        $this->dropshipShowMergedRates = $dropshipShowMergedRates;
    }

    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(string $dateFormat): void
    {
        $this->dateFormat = $dateFormat;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    public function isDropshipShowItemDesc(): bool
    {
        return $this->dropshipShowItemDesc;
    }

    public function setDropshipShowItemDesc(bool $dropshipShowItemDesc): void
    {
        $this->dropshipShowItemDesc = $dropshipShowItemDesc;
    }

    public function getWeightUnit(): string
    {
        return $this->weightUnit;
    }

    public function setWeightUnit(string $weightUnit): void
    {
        $this->weightUnit = $weightUnit;
    }

    public function getDropshipDescription(): string
    {
        return $this->dropshipDescription;
    }

    public function setDropshipDescription(string $dropshipDescription): void
    {
        $this->dropshipDescription = $dropshipDescription;
    }

    public function getDropshipTitle(): string
    {
        return $this->dropshipTitle;
    }

    public function setDropshipTitle(string $dropshipTitle): void
    {
        $this->dropshipTitle = $dropshipTitle;
    }

    public function isShowPickupMulti(): bool
    {
        return $this->showPickupMulti;
    }

    public function setShowPickupMulti(bool $showPickupMulti): void
    {
        $this->showPickupMulti = $showPickupMulti;
    }

    public function getDistanceUnit(): string
    {
        return $this->distanceUnit;
    }

    public function setDistanceUnit(string $distanceUnit): void
    {
        $this->distanceUnit = $distanceUnit;
    }

    public function getCarrierGroupDescription(): string
    {
        return $this->carrierGroupDescription;
    }

    public function setCarrierGroupDescription(string $carrierGroupDescription): void
    {
        $this->carrierGroupDescription = $carrierGroupDescription;
    }

    public function isCalendarConfirm(): bool
    {
        return $this->calendarConfirm;
    }

    public function setCalendarConfirm(bool $calendarConfirm): void
    {
        $this->calendarConfirm = $calendarConfirm;
    }

    public function getShippingTooltipText(): string
    {
        return $this->shippingTooltipText;
    }

    public function setShippingTooltipText(string $shippingTooltipText): void
    {
        $this->shippingTooltipText = $shippingTooltipText;
    }

    public function isCityRequired(): bool
    {
        return $this->cityRequired;
    }

    public function setCityRequired(bool $cityRequired): void
    {
        $this->cityRequired = $cityRequired;
    }

    public function getSortByPrice(): string
    {
        return $this->sortByPrice;
    }

    public function setSortByPrice(string $sortByPrice): void
    {
        $this->sortByPrice = $sortByPrice;
    }

    public function isDropshipShowWeight(): bool
    {
        return $this->dropshipShowWeight;
    }

    public function setDropshipShowWeight(bool $dropshipShowWeight): void
    {
        $this->dropshipShowWeight = $dropshipShowWeight;
    }

    public function getPreferredLocale(): string
    {
        return $this->preferredLocale;
    }

    public function setPreferredLocale(string $preferredLocale): void
    {
        $this->preferredLocale = $preferredLocale;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'dateFormat' => $this->dateFormat,
            'currencyCode' => $this->currencyCode,
            'weightUnit' => $this->weightUnit,
            'dropshipShowMergedRates' => $this->dropshipShowMergedRates,
            'dropshipShowItemDesc' => $this->dropshipShowItemDesc,
            'dropshipDescription' => $this->dropshipDescription,
            'dropshipTitle' => $this->dropshipTitle,
            'distanceUnit' => $this->distanceUnit,
            'carrierGroupDescription' => $this->carrierGroupDescription
        ];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            "GlobalSettings{dateFormat='%s', currencyCode='%s', weightUnit='%s', dropshipShowMergedRates=%s, dropshipShowItemDesc=%s, dropshipDescription='%s', dropshipTitle='%s', distanceUnit='%s', carrierGroupDescription='%s'}",
            $this->dateFormat,
            $this->currencyCode,
            $this->weightUnit,
            $this->dropshipShowMergedRates ? 'true' : 'false',
            $this->dropshipShowItemDesc ? 'true' : 'false',
            $this->dropshipDescription,
            $this->dropshipTitle,
            $this->distanceUnit,
            $this->carrierGroupDescription
        );
    }
}
