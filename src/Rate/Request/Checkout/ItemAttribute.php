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
 * Class ItemAttribute
 *
 * @package ShipperHQ\Checkout
 */
class ItemAttribute
{

    public $name;
    public $value;

   /**
    * @param string $name
    * @param string $value
    */
    public function __construct($name = "", $value = "")
    {
        $this->name = $name;
        $this->value = $value;
    }

   /**
    * @param string $name
    */
    public function setName($name)
    {
        $this->name = $name;
    }

   /**
    * @return string
    */
    public function getName()
    {
        return $this->name;
    }

   /**
    * @param string $value
    */
    public function setValue($value)
    {
        $this->value = $value;
    }

   /**
    * @return string
    */
    public function getValue()
    {
        return $this->value;
    }
}
