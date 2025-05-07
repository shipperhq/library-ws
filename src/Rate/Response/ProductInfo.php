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
 * Class ProductInfo
 * @package ShipperHQ\WS\Rate\Response
 */
class ProductInfo
{
    private string $id;
    private string $sku;
    private int $qty;
    private string $name;

    public function __construct(
        string $id = '',
        string $name = '',
        string $sku = '',
        int $qty = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->qty = $qty;
        $this->sku = $sku;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'qty' => $this->qty,
            'name' => $this->name
        ];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            "ProductInfo{id='%s', sku='%s', qty=%d, name='%s'}",
            $this->id,
            $this->sku,
            $this->qty,
            $this->name
        );
    }
}
