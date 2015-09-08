<?php

namespace ShipperHQ\WS;

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
   function setResponseSummary(\ShipperHQ\WS\Rate\Response\ResponseSummary $responseSummary);
}
