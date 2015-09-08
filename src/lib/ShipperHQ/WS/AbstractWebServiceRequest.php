<?php

namespace ShipperHQ\WS;

use \ShipperHQ\WS\Request\WebServiceRequest;

/**
 * Class AbstractWebServiceRequest
 *
 * @package ShipperHQ\WS\Request
 */
abstract class AbstractWebServiceRequest implements WebServiceRequest
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
    * @param \ShipperHQ\WS\Shared\Credentials $credentials
    */
   function setCredentials(\ShipperHQ\WS\Shared\Credentials $credentials)
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
    * @param \ShipperHQ\WS\Shared\SiteDetails $siteDetails
    */
   function setSiteDetails(\ShipperHQ\WS\Shared\SiteDetails $siteDetails)
   {
      $this->siteDetails = $siteDetails;
   }
}

