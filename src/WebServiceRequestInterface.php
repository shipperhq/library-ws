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
