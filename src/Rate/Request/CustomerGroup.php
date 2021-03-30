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
namespace ShipperHQ\WS\Rate\Request;

/**
 * Class CustomerGroup
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class CustomerGroup
{
    public $name;
    public $description;

   /**
    * @param null $customerGroup
    */
    public function __construct($name = null, $description = null)
    {
        $this->name = $name;
        $this->description = $description;
    }
}
