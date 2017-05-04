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
namespace ShipperHQ\WS\Rate\Request\Shipping;

/**
 * Class Accessorials
 *
 * @package ShipperHQ\Shipping
 */
class Accessorials
{

    public $liftgateRequired;
    public $destinationType;
    public $notifyRequired;
    public $insideDelivery;

    public function __construct(
        $liftgateRequired = null,
        $destinationType = null,
        $notifyRequired = null,
        $insideDelivery = null
    ) {
    
        $this->liftgateRequired = $liftgateRequired;
        $this->destinationType = $destinationType;
        $this->notifyRequired = $notifyRequired;
        $this->insideDelivery = $insideDelivery;
    }

   /**
    * @param mixed $liftgateRequired
    */
    public function setLiftgateRequired($liftgateRequired)
    {
        $this->liftgateRequired = $liftgateRequired;
    }

   /**
    * @return mixed
    */
    public function getLiftgateRequired()
    {
        return $this->liftgateRequired;
    }
    /**
     * @param null $destinationType
     */
    public function setDestinationType($destinationType)
    {
        $this->destinationType = $destinationType;
    }

    /**
     * @return null
     */
    public function getDestinationType()
    {
        return $this->destinationType;
    }

    /**
     * @param null $insideDelivery
     */
    public function setInsideDelivery($insideDelivery)
    {
        $this->insideDelivery = $insideDelivery;
    }

    /**
     * @return null
     */
    public function getInsideDelivery()
    {
        return $this->insideDelivery;
    }

    /**
     * @param null $notifyRequired
     */
    public function setNotifyRequired($notifyRequired)
    {
        $this->notifyRequired = $notifyRequired;
    }

    /**
     * @return null
     */
    public function getNotifyRequired()
    {
        return $this->notifyRequired;
    }
}
