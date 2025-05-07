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

class Rate
{
    private string $code;
    private string $name;
    private string $description;
    private float $billingWeight = 0.0;
    private float $standardCharges = 0.0;
    private float $removedCharges = 0.0;
    private float $additionalCharges = 0.0;
    private float $handlingFee = 0.0;
    private float $totalCharges = 0.0;
    private float $cost = 0.0;
    private float $shippingPrice = 0.0;
    private float $customDuties = 0.0;
    private float $overrideRuleCharges = 0.0;
    private ?string $customsMessage = null;
    private ?string $methodCode = null;
    private int $deliveryDayOfWeek;
    private ?string $deliveryDate = null;
    private ?string $latestDeliveryDate = null;
    private ?string $dispatchDate = null;
    private float $origShippingPrice = 0.0;
    private bool $deliveryDateFound = false;
    private ?int $timeInTransit = null;
    private ?string $initialDeliveryDate = null;
    private ?string $errorMessage = null;
    private string $currency;
    private array $flatRulesApplied = [];
    private array $changeRulesApplied = [];
    private array $shipments = [];
    private string $carrierType;
    private int $parcelCount = 0;
    private ?string $quoteId = null;
    private string $carrierTitle;
    private ?string $landedCostId = null;
    private bool $saturdayAllowed = true;
    private ?string $externalCode = null;
    private array $blackoutDeliveryDays = [];
    private bool $negotiatedRate = false;

    public function __construct()
    {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getBillingWeight(): float
    {
        return $this->billingWeight;
    }

    public function setBillingWeight(float $billingWeight): void
    {
        $this->billingWeight = $billingWeight;
    }

    public function getStandardCharges(): float
    {
        return $this->standardCharges;
    }

    public function setStandardCharges(float $standardCharges): void
    {
        $this->standardCharges = $standardCharges;
    }

    public function getRemovedCharges(): float
    {
        return $this->removedCharges;
    }

    public function setRemovedCharges(float $removedCharges): void
    {
        $this->removedCharges = $removedCharges;
    }

    public function getAdditionalCharges(): float
    {
        return $this->additionalCharges;
    }

    public function setAdditionalCharges(float $additionalCharges): void
    {
        $this->additionalCharges = $additionalCharges;
    }

    public function addAdditionalCharges(float $additionalCharges): void
    {
        $this->additionalCharges += $additionalCharges;
    }

    public function getHandlingFee(): float
    {
        return $this->handlingFee;
    }

    public function setHandlingFee(float $handlingFee): void
    {
        $this->handlingFee = $handlingFee;
    }

    public function getTotalCharges(): float
    {
        return $this->totalCharges;
    }

    public function setTotalCharges(float $totalCharges): void
    {
        $this->totalCharges = $totalCharges;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }

    public function getShippingPrice(): float
    {
        return $this->shippingPrice;
    }

    public function setShippingPrice(float $shippingPrice): void
    {
        $this->shippingPrice = $shippingPrice;
    }

    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    public function getLatestDeliveryDate(): ?string
    {
        return $this->latestDeliveryDate;
    }

    public function setLatestDeliveryDate(?string $latestDeliveryDate): void
    {
        $this->latestDeliveryDate = $latestDeliveryDate;
    }

    public function getDispatchDate(): ?string
    {
        return $this->dispatchDate;
    }

    public function setDispatchDate(?string $dispatchDate): void
    {
        $this->dispatchDate = $dispatchDate;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    public function getOrigShippingPrice(): float
    {
        return $this->origShippingPrice;
    }

    public function setOrigShippingPrice(float $origShippingPrice): void
    {
        $this->origShippingPrice = $origShippingPrice;
    }

    public function isDeliveryDateFound(): bool
    {
        return $this->deliveryDateFound;
    }

    public function setDeliveryDateFound(bool $deliveryDateFound): void
    {
        $this->deliveryDateFound = $deliveryDateFound;
    }

    public function getTimeInTransit(): ?int
    {
        return $this->timeInTransit;
    }

    public function setTimeInTransit(?int $timeInTransit): void
    {
        $this->timeInTransit = $timeInTransit;
    }

    public function getInitialDeliveryDate(): ?string
    {
        return $this->initialDeliveryDate;
    }

    public function setInitialDeliveryDate(?string $initialDeliveryDate): void
    {
        $this->initialDeliveryDate = $initialDeliveryDate;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getCustomDuties(): float
    {
        return $this->customDuties;
    }

    public function setCustomDuties(float $customDuties): void
    {
        $this->customDuties = $customDuties;
    }

    public function getFlatRulesApplied(): array
    {
        return $this->flatRulesApplied;
    }

    public function addFlatRule(string $flatRuleName): void
    {
        $this->flatRulesApplied[] = $flatRuleName;
    }

    public function getChangeRulesApplied(): array
    {
        return $this->changeRulesApplied;
    }

    public function addChangeRule(string $changeRuleName): void
    {
        $this->changeRulesApplied[] = $changeRuleName;
    }

    public function getCarrierType(): string
    {
        return $this->carrierType;
    }

    public function setCarrierType(string $carrierType): void
    {
        $this->carrierType = $carrierType;
    }

    public function incrementParcelCount(): void
    {
        $this->parcelCount++;
    }

    public function getParcelCount(): int
    {
        return $this->parcelCount;
    }

    public function getShipments(): array
    {
        return $this->shipments;
    }

    public function setShipments(array $shipments): void
    {
        $this->shipments = $shipments;
    }

    public function getOverrideRuleCharges(): float
    {
        return $this->overrideRuleCharges;
    }

    public function setOverrideRuleCharges(float $overrideRuleCharges): void
    {
        $this->overrideRuleCharges = $overrideRuleCharges;
    }

    public function addRuleCharges(float $newRuleCharge): void
    {
        $this->overrideRuleCharges += $newRuleCharge;
    }

    public function getQuoteId(): ?string
    {
        return $this->quoteId;
    }

    public function setQuoteId(?string $quoteId): void
    {
        $this->quoteId = $quoteId;
    }

    public function getCarrierTitle(): string
    {
        return $this->carrierTitle;
    }

    public function setCarrierTitle(string $carrierTitle): void
    {
        $this->carrierTitle = $carrierTitle;
    }

    public function getDeliveryDayOfWeek(): int
    {
        return $this->deliveryDayOfWeek;
    }

    public function setDeliveryDayOfWeek(int $deliveryDayOfWeek): void
    {
        $this->deliveryDayOfWeek = $deliveryDayOfWeek;
    }

    public function isSaturdayAllowed(): bool
    {
        return $this->saturdayAllowed;
    }

    public function setSaturdayAllowed(bool $saturdayAllowed): void
    {
        $this->saturdayAllowed = $saturdayAllowed;
    }

    public function getExternalCode(): ?string
    {
        return $this->externalCode;
    }

    public function setExternalCode(?string $externalCode): void
    {
        $this->externalCode = $externalCode;
    }

    public function getBlackoutDeliveryDays(): array
    {
        return $this->blackoutDeliveryDays;
    }

    public function setBlackoutDeliveryDays(array $blackoutDeliveryDays): void
    {
        $this->blackoutDeliveryDays = $blackoutDeliveryDays;
    }

    public function getNegotiatedRate(): bool
    {
        return $this->negotiatedRate;
    }

    public function setNegotiatedRate(bool $negotiatedRate): void
    {
        $this->negotiatedRate = $negotiatedRate;
    }

    public function getCustomsMessage(): ?string
    {
        return $this->customsMessage;
    }

    public function setCustomsMessage(?string $customsMessage): void
    {
        $this->customsMessage = $customsMessage;
    }

    public function getLandedCostId(): ?string
    {
        return $this->landedCostId;
    }

    public function setLandedCostId(?string $landedCostId): void
    {
        $this->landedCostId = $landedCostId;
    }

    public function calculateTotalCharges(): void
    {
        $this->totalCharges = $this->standardCharges + $this->additionalCharges + $this->handlingFee - $this->removedCharges;
    }

    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'description' => $this->description,
            'billingWeight' => $this->billingWeight,
            'standardCharges' => $this->standardCharges,
            'removedCharges' => $this->removedCharges,
            'additionalCharges' => $this->additionalCharges,
            'handlingFee' => $this->handlingFee,
            'totalCharges' => $this->totalCharges,
            'cost' => $this->cost,
            'shippingPrice' => $this->shippingPrice,
            'customDuties' => $this->customDuties,
            'overrideRuleCharges' => $this->overrideRuleCharges,
            'customsMessage' => $this->customsMessage,
            'methodCode' => $this->methodCode,
            'deliveryDayOfWeek' => $this->deliveryDayOfWeek,
            'deliveryDate' => $this->deliveryDate,
            'latestDeliveryDate' => $this->latestDeliveryDate,
            'dispatchDate' => $this->dispatchDate,
            'origShippingPrice' => $this->origShippingPrice,
            'deliveryDateFound' => $this->deliveryDateFound,
            'timeInTransit' => $this->timeInTransit,
            'initialDeliveryDate' => $this->initialDeliveryDate,
            'errorMessage' => $this->errorMessage,
            'currency' => $this->currency,
            'flatRulesApplied' => $this->flatRulesApplied,
            'changeRulesApplied' => $this->changeRulesApplied,
            'shipments' => $this->shipments,
            'carrierType' => $this->carrierType,
            'parcelCount' => $this->parcelCount,
            'quoteId' => $this->quoteId,
            'carrierTitle' => $this->carrierTitle,
            'landedCostId' => $this->landedCostId,
            'saturdayAllowed' => $this->saturdayAllowed,
            'externalCode' => $this->externalCode,
            'blackoutDeliveryDays' => $this->blackoutDeliveryDays,
            'negotiatedRate' => $this->negotiatedRate
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "Rate{code='%s', name='%s', description='%s', billingWeight=%f, standardCharges=%f, " .
            "removedCharges=%f, additionalCharges=%f, handlingFee=%f, totalCharges=%f, cost=%f, " .
            "shippingPrice=%f, customDuties=%f, overrideRuleCharges=%f, customsMessage='%s', " .
            "methodCode='%s', deliveryDayOfWeek=%d, deliveryDate='%s', latestDeliveryDate='%s', " .
            "dispatchDate='%s', origShippingPrice=%f, deliveryDateFound=%s, timeInTransit=%d, " .
            "initialDeliveryDate='%s', errorMessage='%s', currency='%s', flatRulesApplied=%s, " .
            "changeRulesApplied=%s, shipments=%s, carrierType='%s', parcelCount=%d, quoteId='%s', " .
            "carrierTitle='%s', landedCostId='%s', saturdayAllowed=%s, externalCode='%s', " .
            "blackoutDeliveryDays=%s, negotiatedRate=%s}",
            $this->code,
            $this->name,
            $this->description,
            $this->billingWeight,
            $this->standardCharges,
            $this->removedCharges,
            $this->additionalCharges,
            $this->handlingFee,
            $this->totalCharges,
            $this->cost,
            $this->shippingPrice,
            $this->customDuties,
            $this->overrideRuleCharges,
            $this->customsMessage ?? '',
            $this->methodCode ?? '',
            $this->deliveryDayOfWeek,
            $this->deliveryDate ?? '',
            $this->latestDeliveryDate ?? '',
            $this->dispatchDate ?? '',
            $this->origShippingPrice,
            $this->deliveryDateFound ? 'true' : 'false',
            $this->timeInTransit ?? 0,
            $this->initialDeliveryDate ?? '',
            $this->errorMessage ?? '',
            $this->currency,
            json_encode($this->flatRulesApplied),
            json_encode($this->changeRulesApplied),
            json_encode($this->shipments),
            $this->carrierType,
            $this->parcelCount,
            $this->quoteId ?? '',
            $this->carrierTitle,
            $this->landedCostId ?? '',
            $this->saturdayAllowed ? 'true' : 'false',
            $this->externalCode ?? '',
            json_encode($this->blackoutDeliveryDays),
            $this->negotiatedRate ? 'true' : 'false'
        );
    }
}
