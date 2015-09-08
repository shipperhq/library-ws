<?php

namespace ShipperHQ\WS\Response;

/**
 * Class ResponseSummary
 *
 * @package ShipperHQ\WS\Response
 */
class ResponseSummary {

   public $date;
   public $version;
   public $status;

   function __construct($date = 0, $status = -1, $version = "")
   {
      $this->date = $date;
      $this->status = $status;
      $this->version = $version;
   }

   /**
    * @param int $date
    */
   public function setDate($date)
   {
      $this->date = $date;
   }

   /**
    * @return int
    */
   public function getDate()
   {
      return $this->date;
   }

   /**
    * @param mixed $status
    */
   public function setStatus($status)
   {
      $this->status = $status;
   }

   /**
    * @return mixed
    */
   public function getStatus()
   {
      return $this->status;
   }

   /**
    * @param string $version
    */
   public function setVersion($version)
   {
      $this->version = $version;
   }

   /**
    * @return string
    */
   public function getVersion()
   {
      return $this->version;
   }
}