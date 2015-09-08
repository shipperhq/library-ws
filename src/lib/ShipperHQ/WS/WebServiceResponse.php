<?php

namespace ShipperHQ\WS\Response;

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
   function setResponseSummary(\ShipperHQ\WS\Response\ResponseSummary $responseSummary);
}
