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

namespace ShipperHQ\WS\Rate\Response\Merge;

use ShipperHQ\WS\AbstractWebServiceResponse;
use ShipperHQ\WS\Rate\Response\ShippingRate;

class MergedRateResponse extends AbstractWebServiceResponse
{
    private array $mergedRates;

    public function __construct()
    {
        parent::__construct();
        $this->mergedRates = [];
    }

    /**
     * @return ShippingRate[]
     */
    public function getMergedRates(): array
    {
        return $this->mergedRates;
    }

    /**
     * @param ShippingRate[] $mergedRates
     */
    public function setMergedRates(array $mergedRates): void
    {
        $this->mergedRates = $mergedRates;
    }

    public function toArray(): array
    {
        return [
            'mergedRates' => array_map(function (ShippingRate $rate) {
                return $rate->toArray();
            }, $this->mergedRates)
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            "MergedRateResponse{mergedRates=%s}",
            json_encode($this->mergedRates)
        );
    }
}
