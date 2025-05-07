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

use ShipperHQ\WS\Rate\Response\ProductInfo;
use ShipperHQ\WS\Rate\Response\Shipping\Carrier\CarrierGroupDetail;

/**
 * CarrierGroupResponse class. This acts as a container for carrier's rates
 * from a location/origin
 *
 * @author Jonathan Bailey (jonathan@webshopapps.com)
 */
class CarrierGroupResponse
{
    /**
     * @var CarrierRatesResponse[]
     */
    private ?array $carrierRates = null;

    /**
     * @var CarrierGroupDetail
     */
    private ?CarrierGroupDetail $carrierGroupDetail = null;

    /**
     * @var ProductInfo[]
     */
    private array $products = [];

    /**
     * @return CarrierRatesResponse[]
     */
    public function getCarrierRates(): ?array
    {
        return $this->carrierRates;
    }

    /**
     * @param CarrierRatesResponse[] $carrierRates
     */
    public function setCarrierRates(?array $carrierRates): void
    {
        $this->carrierRates = $carrierRates;
    }

    /**
     * @return CarrierGroupDetail
     */
    public function getCarrierGroupDetail(): ?CarrierGroupDetail
    {
        return $this->carrierGroupDetail;
    }

    /**
     * @param CarrierGroupDetail $carrierGroupDetail
     */
    public function setCarrierGroupDetail(?CarrierGroupDetail $carrierGroupDetail): void
    {
        $this->carrierGroupDetail = $carrierGroupDetail;
    }

    /**
     * @return ProductInfo[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param ProductInfo[] $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $newLine = PHP_EOL;
        return "CarrierGroupResponse{" . $newLine .
               "    carrierRates=" . json_encode($this->carrierRates) . $newLine .
               "    carrierGroupDetail=" . ($this->carrierGroupDetail ? $this->carrierGroupDetail->__toString() : 'null') . $newLine .
               "    products=" . json_encode($this->products) . $newLine .
               "}" . $newLine;
    }
}
