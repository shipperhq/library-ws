<?php
/**
 *
 * ShipperHQ
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * Shipper HQ Shipping
 *
 * @category ShipperHQ
 * @package ShipperHQ_WS
 * @copyright Copyright (c) 2015 Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
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
