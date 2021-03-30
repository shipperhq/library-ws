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
 * Class Cart
 *
 * @package ShipperHQ\Checkout
 */
class Cart
{

    public $declaredValue;
    public $freeShipping;
    public $items;

   /**
    * @param float $declaredValue
    * @param boolean $freeShipping
    * @param array $items
    * @param float $price
    * @param int $qty
    * @param float $weight
    */
    public function __construct(
        $declaredValue = 0.0,
        $freeShipping = false,
        $items = [],
        $price = 0.0,
        $qty = 0,
        $weight = 0.0
    ) {
    
        $this->declaredValue = $declaredValue;
        $this->freeShipping = $freeShipping;
        $this->items = $items;
    }

   /**
    * @param float $declaredValue
    */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
    }

   /**
    * @return float
    */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

   /**
    * @param boolean $freeShipping
    */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;
    }

   /**
    * @return boolean
    */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

   /**
    * @param array $items
    */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

   /**
    * @return array
    */
    public function getItems()
    {
        return $this->items;
    }
}
