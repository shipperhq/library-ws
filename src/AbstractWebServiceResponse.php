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
 * Class AbstractWebServiceResponse
 *
 * @package ShipperHQ\WS\Response
 */
abstract class AbstractWebServiceResponse implements WebServiceResponseInterface
{
    public $errors = [];
    public $responseSummary;

    /**
     * @param ResponseSummary $responseSummary
     * @param array $errors
     */
    public function __construct(ResponseSummary $responseSummary = null, array $errors = [])
    {
        $this->responseSummary = $responseSummary;
        $this->errors = $errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ResponseSummary $responseSummary
     */
    public function setResponseSummary(ResponseSummary $responseSummary)
    {
        $this->responseSummary = $responseSummary;
    }

    /**
     * @return ResponseSummary
     */
    public function getResponseSummary()
    {
        return $this->responseSummary;
    }
}
