<?php
/**
 * Shipper HQ
 *
 * @category ShipperHQ
 * @package ShipperHQ_WS
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
namespace ShipperHQ\WS\Rate\Request\Checkout;

/**
 * Class StockDetail
 *
 * @package ShipperHQ\Shipping
 */
class StockDetail
{

    public $inventoryCount;

    public $availabilityDate;

    public $inStock;

    public function __construct($inventoryCount = null, $availabilityDate = null, $inStock = null)
    {
        $this->inventoryCount = $inventoryCount;
        $this->availabilityDate = $availabilityDate;
        $this->inStock = $inStock;
    }

    /**
     * @return null
     */
    public function getInventoryCount()
    {
        return $this->inventoryCount;
    }

    /**
     * @param null $inventoryCount
     */
    public function setInventoryCount($inventoryCount)
    {
        $this->inventoryCount = $inventoryCount;
    }

    /**
     * @return null
     */
    public function getAvailabilityDate()
    {
        return $this->availabilityDate;
    }

    /**
     * @param null $availabilityDate
     */
    public function setAvailabilityDate($availabilityDate)
    {
        $this->availabilityDate = $availabilityDate;
    }

    /**
     * @return null
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * @param null $inStock
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;
    }
}
