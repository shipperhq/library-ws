<?php
/**
 * ShipperHQ
 *
 * @category ShipperHQ
 * @package ShipperHQ\WS
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
namespace ShipperHQ\WS\Rate\Request;

/**
 * Class CustomerDetails
 *
 * @package ShipperHQ\WS\Request\Rate
 */
class CustomerDetails
{

    /**
     * @var null|string
     */
    public $customerGroup;

    /**
     * @param null|string $customerGroup
     */
    public function __construct(?string $customerGroup = null)
    {
        $this->customerGroup = $customerGroup;
    }
}
