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
namespace ShipperHQ\WS\Rate\Request\Checkout;

/**
 * Class StockDetail
 *
 * @package ShipperHQ\Shipping
 */
class PhysicalBuildingDetail extends StockDetail
{

    public $name;

    public function __construct(?string $name = null, ?int $inventoryCount = null, ?string $availabilityDate = null, ?bool $inStock = null)
    {
        $this->name = $name;
        parent::__construct($inventoryCount, $availabilityDate, $inStock);
    }

    /**
     * @return null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
