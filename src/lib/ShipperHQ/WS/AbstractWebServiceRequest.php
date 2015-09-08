<?php

namespace ShipperHQ\WS\Request;

include_once 'ShipperHQ/WS/Request/WebServiceRequest.php';

/**
 * Class AbstractWebServiceRequest
 *
 * @package ShipperHQ\WS\Request
 */
abstract class AbstractWebServiceRequest implements \ShipperHQ\WS\Request\WebServiceRequest
{

   public $credentials;
   public $siteDetails;

   /**
    * @return mixed
    */
   function getCredentials()
   {
      return $this->credentials;
   }

   /**
    * @param \ShipperHQ\User\Credentials $credentials
    */
   function setCredentials(\ShipperHQ\User\Credentials $credentials)
   {
      $this->credentials = $credentials;
   }

   /**
    * @return mixed
    */
   function getSiteDetails()
   {
      return $this->siteDetails;
   }

   /**
    * @param \ShipperHQ\User\SiteDetails $siteDetails
    */
   function setSiteDetails(\ShipperHQ\User\SiteDetails $siteDetails)
   {
      $this->siteDetails = $siteDetails;
   }
}

