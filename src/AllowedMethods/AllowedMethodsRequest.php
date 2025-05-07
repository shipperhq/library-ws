<?php
/**
 * ShipperHQ
 *
 * @category ShipperHQ
 * @package ShipperHQ\WS
 * @copyright Copyright (c) 2025 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\WS\AllowedMethods;

use \ShipperHQ\WS\Shared\Address;
use \ShipperHQ\WS\Rate\Request;
use \ShipperHQ\WS\AbstractWebServiceRequest;
use \ShipperHQ\WS\WebServiceRequestInterface;

/**
 * Class AllowedMethodsRequest
 *
 * Nothing in it, just send credentials and siteDetails
 *
 * @package ShipperHQ\WS\AllowedMethods\Request
 */
class AllowedMethodsRequest extends AbstractWebServiceRequest implements WebServiceRequestInterface
{}
