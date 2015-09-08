<?php

namespace ShipperHQ\WS\Response;

/**
 * Class AbstractWebServiceResponse
 *
 * @package ShipperHQ\WS\Response
 */
abstract class AbstractWebServiceResponse implements \ShipperHQ\WS\Response\WebServiceResponse
{
   public $errors = array();
   public $responseSummary;

   /**
    * @param ResponseSummary $responseSummary
    * @param array $errors
    */
   function __construct(\ShipperHQ\WS\Response\ResponseSummary $responseSummary = null, array $errors = array())
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
    * @param \ShipperHQ\WS\Response\ResponseSummary $responseSummary
    */
   public function setResponseSummary(\ShipperHQ\WS\Response\ResponseSummary $responseSummary)
   {
      $this->responseSummary = $responseSummary;
   }

   /**
    * @return \ShipperHQ\WS\Response\ResponseSummary
    */
   public function getResponseSummary()
   {
      return $this->responseSummary;
   }


}

