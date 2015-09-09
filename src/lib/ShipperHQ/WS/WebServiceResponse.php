<?php

namespace ShipperHQ\WS;

use \ShipperHQ\WS\Rate\Response;

/**
 * Interface WebServiceResponse
 *
 * @package ShipperHQ\WS\Response
 */
interface WebServiceResponse
{
   function getErrors();
   function setErrors(array $errors);
   function getResponseSummary();
   function setResponseSummary(ResponseSummary $responseSummary);
}
