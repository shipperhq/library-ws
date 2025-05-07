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

namespace ShipperHQ\WS\Rate\Response\Shipping\Carrier;

enum AvailableOptionType: string
{
    case BOOLEAN = 'BOOLEAN';
    case SELECT = 'SELECT';
    case TEXT = 'TEXT';
}
