<?php

namespace ShipperHQ\WS\Response;

/**
 * Class WebServiceError
 *
 * @package ShipperHQ\WS\Response
 */
class WebServiceError {

   public $errorCode;
   public $description;
   public $errorMessage;

   /**
    * @param $description
    * @param $errorCode
    * @param $errorMessage
    */
   function __construct($description = "", $errorCode = -1, $errorMessage = "")
   {
      $this->description = $description;
      $this->errorCode = $errorCode;
      $this->errorMessage = $errorMessage;
   }

   /**
    * @param string $description
    */
   public function setDescription($description)
   {
      $this->description = $description;
   }

   /**
    * @return string
    */
   public function getDescription()
   {
      return $this->description;
   }

   /**
    * @param int $errorCode
    */
   public function setErrorCode($errorCode)
   {
      $this->errorCode = $errorCode;
   }

   /**
    * @return int
    */
   public function getErrorCode()
   {
      return $this->errorCode;
   }

   /**
    * @param string $errorMessage
    */
   public function setErrorMessage($errorMessage)
   {
      $this->errorMessage = $errorMessage;
   }

   /**
    * @return string
    */
   public function getErrorMessage()
   {
      return $this->errorMessage;
   }

}