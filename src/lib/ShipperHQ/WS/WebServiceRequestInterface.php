<?php

namespace ShipperHQ\WS;

/**
 * Interface WebServiceRequest
 *
 * @package ShipperHQ\WS\Request
 */
interface WebServiceRequestInterface
{

    /**
     * @return mixed
     */
    public function getCredentials();

    public function setCredentials(\ShipperHQ\WS\Shared\Credentials $credentials);

    public function getSiteDetails();

    public function setSiteDetails(\ShipperHQ\WS\Shared\SiteDetails $siteDetails);
}
