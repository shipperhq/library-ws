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

namespace ShipperHQ\WS;

use \ShipperHQ\WS\Rate\Response\ResponseSummary;

/**
 * Interface WebServiceResponse
 *
 * @package ShipperHQ\WS\Response
 */
interface WebServiceResponseInterface
{
    public function getErrors();

    public function setErrors(array $errors);

    public function getResponseSummary();

    public function setResponseSummary(ResponseSummary $responseSummary);
}
