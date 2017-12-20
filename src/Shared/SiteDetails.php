<?php
/**
 *
 * ShipperHQ Shipping Module
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
 * @package ShipperHQ_Shipping_Carrier
 * @copyright Copyright (c) 2014 Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
namespace ShipperHQ\WS\Shared;

/**
 * Class SiteDetails
 *
 * @package ShipperHQ\WS\Shared
 */
class SiteDetails
{
    public $ecommerceCart;
    public $ecommerceVersion;
    public $websiteUrl;
    public $environmentScope;
    public $appVersion;
    public $ipAddress;

    const LIVE = 'LIVE';
    const DEV = 'DEVELOPMENT';
    const TEST = 'TEST';
    const INTEGRATION = 'INTEGRATION';

    /**
     * SiteDetails constructor.
     * @param $ecommerceCart
     * @param $ecommerceVersion
     * @param $websiteUrl
     * @param $environmentScope
     * @param $appVersion
     * @param $ipAddress
     */
    public function __construct(
        $ecommerceCart = null,
        $ecommerceVersion = null,
        $websiteUrl = null,
        $environmentScope = null,
        $appVersion = null,
        $ipAddress = null
    ) {
        $this->ecommerceCart = $ecommerceCart;
        $this->ecommerceVersion = $ecommerceVersion;
        $this->websiteUrl = $websiteUrl;
        $this->environmentScope = $environmentScope;
        $this->appVersion = $appVersion;
        $this->ipAddress = $ipAddress;
    }

   /**
    * @param mixed $ecommerceCart
    */
    public function setEcommerceCart($ecommerceCart)
    {
        $this->ecommerceCart = $ecommerceCart;
    }

   /**
    * @return mixed
    */
    public function getEcommerceCart()
    {
        return $this->ecommerceCart;
    }

   /**
    * @param mixed $ecommerceVersion
    */
    public function setEcommerceVersion($ecommerceVersion)
    {
        $this->ecommerceVersion = $ecommerceVersion;
    }

   /**
    * @return mixed
    */
    public function getEcommerceVersion()
    {
        return $this->ecommerceVersion;
    }

   /**
    * @param mixed $websiteUrl
    */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
    }

   /**
    * @return mixed
    */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }

    public function setEnvironmentScope($environmentScope)
    {
        $this->environmentScope = $environmentScope;
    }

    public function getEnvironmentScope()
    {
        return $this->environmentScope;
    }

    public function setAppVersion($appVersion)
    {
        $this->appVersion = $appVersion;
    }

    public function getAppVersion()
    {
        return $this->appVersion;
    }

    /**
     * @return null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param null $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
}
