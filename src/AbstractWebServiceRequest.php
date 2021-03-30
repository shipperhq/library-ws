<?php
/**
 * Shipper HQ
 *
 * @category ShipperHQ
 * @package ShipperHQ_WS
 * @copyright Copyright (c) 2019 Zowta LTD and Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */

namespace ShipperHQ\WS;

use \ShipperHQ\WS\WebServiceRequestInterface;

/**
 * Class AbstractWebServiceRequest
 *
 * @package ShipperHQ\WS\Request
 */
abstract class AbstractWebServiceRequest implements WebServiceRequestInterface
{

    public $credentials;
    public $siteDetails;

   /**
    * @return mixed
    */
    public function getCredentials()
    {
        return $this->credentials;
    }

   /**
    * @param \ShipperHQ\WS\Shared\Credentials $credentials
    */
    public function setCredentials(\ShipperHQ\WS\Shared\Credentials $credentials)
    {
        $this->credentials = $credentials;
    }

   /**
    * @return mixed
    */
    public function getSiteDetails()
    {
        return $this->siteDetails;
    }

   /**
    * @param \ShipperHQ\WS\Shared\SiteDetails $siteDetails
    */
    public function setSiteDetails(\ShipperHQ\WS\Shared\SiteDetails $siteDetails)
    {
        $this->siteDetails = $siteDetails;
    }
}
