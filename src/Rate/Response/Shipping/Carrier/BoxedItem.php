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
 * Holds the items as packed into the boxes for dim shipping
 *
 * NOTE: This is used on both Rate Response and Order Confirmation requests. So be very careful about changing the interface
 */
class BoxedItem
{
    /**
     * Item id of the item
     */
    private ?string $itemId = null;

    /**
     * Sku of the item
     */
    private ?string $sku = null;

    /**
     * Weight packed of this item
     */
    private ?float $weightPacked = null;

    /**
     * Volume packed of this item - be careful reading this as may not be used
     */
    private ?float $indVolume = null;

    /**
     * Qty packed of this item
     */
    private ?float $qtyPacked = null;

    /**
     * Just used for logging
     */
    private ?float $volumePacked = null;

    /**
     * Used to look up cutdown item
     */
    private ?string $skuId = null;

    public function __construct(
        ?string $itemId = null,
        ?string $sku = null,
        ?float $weightToPack = null,
        ?float $qtyToPack = null,
        ?string $skuId = null,
        ?float $indVolume = null
    ) {
        $this->itemId = $itemId;
        $this->sku = $sku;
        $this->weightPacked = $weightToPack;
        $this->qtyPacked = $qtyToPack;
        $this->indVolume = $indVolume;
        $this->volumePacked = $indVolume !== null && $qtyToPack !== null ? $indVolume * $qtyToPack : 0.0;
        $this->skuId = $skuId;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function getWeightPacked(): ?float
    {
        return $this->weightPacked;
    }

    public function setWeightPacked(?float $weightPacked): void
    {
        $this->weightPacked = $weightPacked;
    }

    public function getQtyPacked(): ?float
    {
        return $this->qtyPacked;
    }

    public function setQtyPacked(?float $qtyPacked): void
    {
        $this->qtyPacked = $qtyPacked;
    }

    public function getIndVolume(): ?float
    {
        return $this->indVolume;
    }

    public function setIndVolume(?float $indVolume): void
    {
        $this->indVolume = $indVolume;
    }

    public function getVolumePacked(): ?float
    {
        return $this->volumePacked;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): void
    {
        $this->itemId = $itemId;
    }

    public function getSkuId(): ?string
    {
        return $this->skuId;
    }

    public function setSkuId(?string $skuId): void
    {
        $this->skuId = $skuId;
    }

    public function toArray(): array
    {
        return [
            'itemId' => $this->itemId,
            'sku' => $this->sku,
            'weightPacked' => $this->weightPacked,
            'indVolume' => $this->indVolume,
            'qtyPacked' => $this->qtyPacked,
            'volumePacked' => $this->volumePacked,
            'skuId' => $this->skuId
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "\n        BoxedItem{itemId='%s', sku='%s', qty=%s, totalWeight=%s, indVolume=%s, totalVolume=%s}",
            $this->itemId,
            $this->sku,
            $this->qtyPacked,
            $this->weightPacked,
            $this->indVolume,
            $this->volumePacked
        );
    }
}
