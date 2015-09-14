<?php

namespace ShipperHQ\WS;

use \ShipperHQ\WS\Rate\Response;

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
