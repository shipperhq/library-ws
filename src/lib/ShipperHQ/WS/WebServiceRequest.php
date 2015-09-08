<?php

namespace ShipperHQ\WS;

/**
 * Interface WebServiceRequest
 *
 * @package ShipperHQ\WS\Request
 */
interface WebServiceRequest
{

   function getCredentials();

   function setCredentials(\ShipperHQ\WS\Shared\Credentials $credentials);

   function getSiteDetails();

   function setSiteDetails(\ShipperHQ\WS\Shared\SiteDetails $siteDetails);
}
