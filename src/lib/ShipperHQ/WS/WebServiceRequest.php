<?php

namespace ShipperHQ\WS\Request;

/**
 * Interface WebServiceRequest
 *
 * @package ShipperHQ\WS\Request
 */
interface WebServiceRequest
{

   function getCredentials();

   function setCredentials(\ShipperHQ\User\Credentials $credentials);

   function getSiteDetails();

   function setSiteDetails(\ShipperHQ\User\SiteDetails $siteDetails);
}
