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
namespace ShipperHQ\WS\Rate\Request\Shipping;

/**
 * Class SelectedOptions
 *
 * @package ShipperHQ\Shipping
 */
class SelectedOptions
{

    public $options;

    public function __construct($options = null)
    {
        $this->options = $options;
    }

    /**
     * @param null $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return null
     */
    public function getOptions()
    {
        return $this->options;
    }
}
